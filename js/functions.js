var map;
var geocoder;
var filterResults;
function initialize() {
	var latlng = new google.maps.LatLng(39.9536322, -75.1988056);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DEFAULT,
			position: google.maps.ControlPosition.BOTTOM_LEFT,
			mapTypeIds: [ google.maps.MapTypeId.SATELLITE, google.maps.MapTypeId.HYBRID, 'greys' ]
		},
		navigationControl: true,
		navigationControlOptions: {
			style: google.maps.NavigationControlStyle.ZOOM_PAN,
			position: google.maps.ControlPosition.TOP_LEFT
		},
		scaleControl: true,
		scaleControlOptions: {
			position: google.maps.ControlPosition.TOP_LEFT
		},
		streetViewControl: true
	};
	
	var mapStyles = [
    {
		featureType: "road",
		elementType: "geometry",
		stylers: [
			{ gamma: 1 },
			{ hue: '#ffffff' },
			{ lightness: -5 },
			{ saturation: -100 }
		]
    },
	{
		featureType: "road.local",
		elementType: "geometry",
		stylers: [
			{ gamma: 1 },
			{ hue: '#ffffff' },
			{ lightness: -23 },
			{ saturation: -100 }
		]
    },
	{
		featureType: "road",
		elementType: "labels",
		stylers: [
			{ gamma: 1 },
			{ hue: '#ffffff' },
			{ lightness: 30 },
			{ saturation: -100 }
		]
    },
    {
		featureType: "administrative",
		elementType: "all",
		stylers: [
			{ gamma: 1 },
			{ hue: '#cccccc' },
			{ lightness: 40 },
			{ saturation: -100 }
		]
    },
	{
		featureType: "poi",
		elementType: "all",
		stylers: [
			{ gamma: 1 },
			{ hue: '#ffffff' },
			{ lightness: 25 },
			{ saturation: -100 }
		]
    },
	];
	
	map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);
	
	var styledMapOptions = {
      name: "Map"
  }

  var pennMapType = new google.maps.StyledMapType(
      mapStyles, styledMapOptions);

  map.mapTypes.set('greys', pennMapType);
  map.setMapTypeId('greys');
}

/* 
   given a string containing an address, returns a 2-element array x, such that
   x[0] = lattitude
   x[1] = longitude
*/
function getLatLng(address) {
	geocoder = new google.maps.Geocoder();
    geocoder.geocode( { 'address': address}, function(results, status) {
		if (status == google.maps.GeocoderStatus.OK) {
			var lat = results[0].geometry.location.lat();
			var lng = results[0].geometry.location.lng();
			var pair = new Array();
			pair[0] = lat;
			pair[1] = lng;
			return pair;
        } else {
			alert("Geocode was not successful for the following reason: " + status);
		}
    });
}

/*
	Given a (lat,lng) pair and an optional name (shows up in a rollover box),
	places a Marker at that location
*/
function placeHouse(lat,lng,name) {
	var marker = new google.maps.Marker({
      position: new google.maps.LatLng(lat,lng), 
      map: map, 
      title: name
	});  
}

$(document).ready(function(){
	/* Using custom settings */
	
	$("#inline1").fancybox({
		'hideOnContentClick': false
	});

	// Tabs
	$('#search-results').tabs({
		select: function(event, ui) {
			if (ui.index==1){
				compareResults();
				return true;
			}
		}
	});
	$('#map-overlay').tabs();
			
	$('#dashboard-main').tabs();
			
	$('#filter-button').click(function(){$('#search-results').tabs('select', 0);filterResults();});
	$('#filter-button').click(function(){filterResults();});
});	
		
function filterResults(){
$.ajax({
  url: 'search.php',
  data: ({ avgRentMin : $('input[name=avgRentMin]').val(), avgRentMax : $('input[name=avgRentMax]').val(), ttlRentMin : $('input[name=ttlRentMin]').val(), ttlRentMax : $('input[name=ttlRentMax]').val(),llRtngMin : $('input[name=llRtngMin]').val(), llRtngMax : $('input[name=llRtngMax]').val(), hsRtngMin : $('input[name=hsRtngMin]').val(), hsRtngMax : $('input[name=hsRtngMax]').val(), bdrmMin : $('input[name=bdrmMin]').val(), bdrmMax : $('input[name=bdrmMax]').val()}),
  success: function(data){
	  $('#globe').show();
	  $('#results').html('');
	  $('#results').append($('<hr>',{className:"custom-rule"}));
	  filterResults=data;
	  for (result in data){
		  summaryDiv=$('<div>',{className:'house-summary', id:'summary'+result});
		  summaryDiv.hide();
		  summaryDiv.append($('<div>Lots of extra stuff about this house<br/>Can go here<br/>Well leave the images for a nice fancybox<br/></div>'));
		  resultDiv=$("<div class='house-result hovering' id='result"+result+"'  onclick=\"if(event.target.className=='house-compare'){}else{$('#min"+result+"').show();$('#summary"+result+"').slideDown();$('#result"+result+"').removeClass('hovering');$('#result"+result+"')[0].onclick='';}\"></div>");
		  resultMin=$("<button onclick=\"$('#summary"+result+"').slideUp();$('#result"+result+"').addClass('hovering');$('#min"+result+"').hide();setTimeout(function(){$('#result"+result+"').click(function(){$('#min"+result+"').show();$('#summary"+result+"').slideDown();$('#result"+result+"').removeClass('hovering');$('#result"+result+"').unbind('click');});},1);\" class='house-min' id='min"+result+"'></button>");//1 ms delay so click events dont conflict
		  resultMin.hide();
		  resultImg=$('<img>',{className:"house-thumb", src:'img/houses/thumb/'+data[result].imgFileName[0]});
		  resultMetaDiv=$('<div>',{className:"house-result-meta"});
		  resultMetaDiv.append($('<h2>',{text: data[result].title}));
		  resultMetaDiv.append($('<h3>',{text: data[result].bedrooms+' bedrooms | '+data[result].total_rent+'/month'}));
		  resultRankDiv=$('<div>',{className:"house-result-ranking"});
		  resultRentDiv=$('<div>',{className:"house-result-avg-rent", text:'$'+data[result].avg_rent});
		  rentSpan=$('<span>', {text:'AVG RENT/PERSON'});
		  resultRentDiv.append(rentSpan);
		  resultRankDiv.append(resultRentDiv);
		  resultRank=$('<div>',{className:"house-result-rank", text:data[result].avg_rating});
		  rankSpan=$('<span>',{text:'STARS'});
		  resultRank.append(rankSpan);
		  resultRankDiv.append(resultRank);
		  compareBox=$('<input>',{type:'checkbox', className:'house-compare', name:result});
		  resultDiv.append(resultMin);
		  resultDiv.append(resultImg);
		  resultDiv.append(resultMetaDiv);
		  resultDiv.append(resultRankDiv);
		  resultDiv.append(compareBox);
		  
		  
		  $('#results').append(resultDiv);
		  $('#results').append(summaryDiv);
		  $('#results').append($('<hr>',{className:"custom-rule"}));
	  }
	$('#globe').hide();
  },
  error:function(xhr,err){
	
    alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
    alert("responseText: "+xhr.responseText);
	
},
dataType: 'json'
});
}

function compareResults(){
	compareArray=new Array();
	$('input.house-compare').each(function(index,value){
		hasResults='true';
		if (value.checked){
			compareArray.push(filterResults[value.name]);
		}
		});
		if(!hasResults){
		}
		else{
			
		$('#globe').show();
	  $('#compare').html('');
	  cmpTable=$('<table>',{id:"compare-table"});
	  tableHead=$('<thead>');
	  tableHead.append($('<tr><th scope="col">Thumbnail</th><th scope="col">Address</th><th scope="col">Rank</th><th scope="col">Avg R/R</th><th scope="col">Rooms</th><th scope="col">Rent</th><th scope="col">Landlord</th><th scope="col">Landlord Rank</th></tr>'));
	  tableBody=$('<tbody>');
	  
	    for (item in compareArray){
			tableRow=$('<tr>',{className:'odd'});
			td=$('<td>');
			td.append($('<img>',{src:"img/houses/thumb/"+compareArray[item].imgFileName[0], class:"house-thumb"}));
			tableRow.append(td);
			td=$('<td>',{text:compareArray[item].title});
			tableRow.append(td);
		  	td=$('<td>',{text:compareArray[item].avg_rating});
			tableRow.append(td);
			td=$('<td>',{text:'$'+compareArray[item].avg_rent});
			tableRow.append(td);
			td=$('<td>',{text:compareArray[item].bedrooms});
			tableRow.append(td);
			td=$('<td>',{text:'$'+compareArray[item].total_rent});
			tableRow.append(td);
			td=$('<td>',{text:compareArray[item].ll_title});
			tableRow.append(td);
			td=$('<td>',{text:compareArray[item].ll_avg_rating});
			tableRow.append(td);
			tableBody.append(tableRow);
	  }
	  cmpTable.append(tableHead);
	  cmpTable.append(tableBody);
	  $('#compare').append(cmpTable);
	  $('#globe').hide();
		}
}	


