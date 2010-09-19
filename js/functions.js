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
	
	
	
	
	/* Dashboard Initializations */
	
	$("#privacy-settings-button").fancybox({
		'hideOnContentClick': false
	});
	
	$("#logout-button").fancybox({
		'hideOnContentClick': false
	});
	
	$("#edit-residence-button").fancybox({
		'hideOnContentClick': false
	});
	
	$("#edit-review-button").fancybox({
		'hideOnContentClick': false
	});
	
	$("#edit-images-button").fancybox({
		'hideOnContentClick': false
	});
	
	$("#edit-landlord-button").fancybox({
		'hideOnContentClick': false
	});
	
	$('#dashboard-main').tabs();
	
	
	/* End the Dashboard initializations */

	
	/* Filter Initializations */
	$("#avg-rent-slider").slider({
		range: true,
		min: 0,
		max: 1500,
		values: [400, 700],
		slide: function(event, ui) {
			$("#avgRentMin").text('$' + ui.values[0]);
			$("#avgRentMax").text('$' + ui.values[1]);
		}
	});
	
	$("#total-rent-slider").slider({
		range: true,
		min: 0,
		max: 8000,
		values: [1000, 5000],
		slide: function(event, ui) {
			$("#ttlRentMin").text('$' + ui.values[0]);
			$("#ttlRentMax").text('$' + ui.values[1]);
		}
	});
	
	$("#rooms-slider").slider({
		range: true,
		min: 1,
		max: 14,
		values: [1, 6],
		slide: function(event, ui) {
			$("#bdrmMin").text(ui.values[0]);
			$("#bdrmMax").text(ui.values[1]);
		}
	});
	
	$("#rank-house").click(function(e){
		var offset = $("#rank-house").offset();
		var offsetL = offset.left;
		var x = e.pageX - offsetL;
		$('#hsRtngMax').text((x/115)*5);
		$('#rank-house-slider').css('width', x);
   });
   
   $("#rank-landlord").click(function(e){
		var offset = $("#rank-landlord").offset();
		var offsetL = offset.left;
		var x = e.pageX - offsetL;
		$('#llRtngMax').text((x/115)*5);
		$('#rank-landlord-slider').css('width', x);
   });
	
	
	
	//$("#amount").val('$' + $("#slider-range").slider("values", 0) + ' - $' + $("#slider-range").slider("values", 1));
	
	/* End the Filter initializations */
	
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

function getAddresses(){
$.ajax({
  url: 'search.php',
  data: ({ avgRentMin : $('#avgRentMin').val(), avgRentMax : $('#avgRentMax').val(), ttlRentMin : $('#ttlRentMin').val(), ttlRentMax : $('#ttlRentMax').val(),llRtngMin : $('#llRtngMin').val(), llRtngMax : $('#llRtngMax').val(), hsRtngMin : $('#hsRtngMin').val(), hsRtngMax : $('#hsRtngMax').val(), bdrmMin : $('#bdrmMin').val(), bdrmMax : $('#bdrmMax').val()}),
  success: function(data){},
  error:function(xhr,err){
	
    alert("readyState: "+xhr.readyState+"\nstatus: "+xhr.status);
    alert("responseText: "+xhr.responseText);
	
},
dataType: 'json'
});	
	
	
}

function filterResults(){
$.ajax({
  url: 'search.php',
  data: ({ avgRentMin : $('#avgRentMin').val(), avgRentMax : $('#avgRentMax').val(), ttlRentMin : $('#ttlRentMin').val(), ttlRentMax : $('#ttlRentMax').val(),llRtngMin : $('#llRtngMin').val(), llRtngMax : $('#llRtngMax').val(), hsRtngMin : $('#hsRtngMin').val(), hsRtngMax : $('#hsRtngMax').val(), bdrmMin : $('#bdrmMin').val(), bdrmMax : $('#bdrmMax').val()}),
  success: function(data){
	  $('#globe').show();
	  $('#results').html('');
	  filterResults=data;
	  for (result in data){
		  //result=getLatLng(data[result].address);
		  //placeHouse(result[0],result[1],data[result].title);
		  
		  summaryDiv=$('<div>',{className:'house-summary', id:'summary'+result});
		  summaryDiv.hide();
		  summaryDiv.append($('<div>Lots of extra stuff about this house<br/>Can go here<br/>Well leave the images for a nice fancybox<br/></div>'));
		  resultDiv=$("<div class='house-result hovering' id='result"+result+"'  onclick=\"if(event.target.className=='house-compare' || event.target.className=='fav'){}else{$('#min"+result+"').show();$('#summary"+result+"').slideDown();$('#result"+result+"').removeClass('hovering');$('#result"+result+"')[0].onclick='';}\"></div>");
		  
		  resultImg=$('<img>',{className:"house-thumb", src:'img/houses/thumb/'+data[result].imgFileName[0]});
		  resultOptions=$('<div>',{className:"house-result-options"});
		  resultOptions.append($("<div class='house-result-meta'><a href='javascript:void(0)' id='min"+result+"' style='display:none;' class='button bluebutton shrink'>&ndash;</a></div>"));
		  resultOptions.append($("<div class='house-result-meta'><input type='checkbox' onclick=\"$('#summary"+result+"').slideUp();$('#result"+result+"').addClass('hovering');$('#min"+result+"').hide();setTimeout(function(){$('#result"+result+"').click(function(){$('#min"+result+"').show();$('#summary"+result+"').slideDown();$('#result"+result+"').removeClass('hovering');$('#result"+result+"').unbind('click');});},1);\" class='house-compare' value='0' title='Compare this House with Other Checked Ones' /><span>compare</span></div>"));
		  resultOptions.append($("<div class='house-result-meta'><img src='img/fav-blank.png' onclick=\"addFavorite("+result+");$('#favorite"+result+"').attr('src',''img/fav.png'');\" class='fav' alt='fav' title='Save this House to Your Favorites'/><span>fav</span></div>"));
		  resultDetails=$('<div>',{className:"house-result-details"});
		  resultDetails.append($("<div class='house-result-meta'><h2>"+data[result].title+"</h2><span>address</span></div><div class='clear'></div>"));
		  resultDetails.append($("<div class='house-result-meta'>$"+data[result].total_rent+"<br/><span>TOTAL RENT</span></div>"));
		  resultDetails.append($("<div class='house-result-meta'>"+data[result].bedrooms+"<br/><span>rooms</span></div>"));
		  resultRankDiv=$('<div>',{className:"house-result-ranking"});
		  resultRankDiv.append($("<div class='house-result-meta'>$"+data[result].avg_rent+"<br/><span>AVG RENT/ROOM</span></div>"));
		  resultRankDiv.append($("<div class='house-result-meta'><div id='rank-house'><img src='img/star.png' class='star' alt='star'/><div id='rank-house-slider' style='width:65px'></div></div><span>RANK</span></div>"));	  
	
		  resultDiv.append(resultOptions);
		  resultDiv.append(resultImg);
		 resultDiv.append( resultDetails);
		  resultDiv.append(resultRankDiv);
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
function addFavorite(index){
	resultDiv=$('<div>', {class:'house-favorite'});
	resultImg=$('<img>',{width:'60', height:'40', src:'img/houses/thumb/'+filterResults[index].imgFileName[0], class:'house-thumb-favorite'});
    resultMetaDiv=$("<div>",{class:'house-favorite-meta'});
	resultMetaDiv.append($("<h2>", {text:filterResults[index].title}));
	resultRankDiv=$("<div>",{class:'house-favorite-ranking'});
	resultRankDiv.append($("<div>",{class:'house-favorite-avg-rent', text:filterResults[index].avg_rent+"<span>AVG RENT</span>"}));
	resultRankDiv.append($("<div>",{class:'house-favorite-rank', text:filterResults[index].avg_rank+"<span>STARS</span>"}));
	resultRankDiv.append($("<div>",{class:'house-favorite-rooms', text:filterResults[index].bedrooms+"<span>ROOMS</span>"}));
	resultDiv.append(resultImg);
	resultDiv.append(resultMetaDiv);
	resultDiv.append(resultRankDiv);
	resultDiv.append($("<div>",{class:'clear'}));
	resultDiv.append($("<hr>",{class:'custom-rule'}));
	resultRmv=$("<button onclick=\$('#rmvFav"+index+"').remove();$('#favorite"+index+"').removeClass('');\" class='house-rmv-fav' id='rmvFav"+index+"'></button>");
	resultDiv.append(resultRmv);
	$('#favorites').append(resultDiv);
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
			if (item%2==1)
			tableRow=$('<tr>',{className:'odd'});
			else
			tableRow=$('<tr>');
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


