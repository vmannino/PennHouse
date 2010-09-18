var map;
var geocoder;

function initialize() {
	var latlng = new google.maps.LatLng(39.9536322, -75.1988056);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
			position: google.maps.ControlPosition.BOTTOM_LEFT
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
      featureType: "road.highway",
      elementType: "all",
      stylers: [
        { visibility: "on" }
      ]
    },
	{
      featureType: "road.arterial",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
      ]
    }
  ];
	
	map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);
	
	var styledMapOptions = {
      name: "Clean-Neighborhood"
  }

  var pennMapType = new google.maps.StyledMapType(
      mapStyles, styledMapOptions);

  map.mapTypes.set('cleanMap', pennMapType);
  map.setMapTypeId('cleanMap');
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
			// Tabs
			$('#search-results').tabs();
			$('#map-overlay').tabs();
			
			$('#dashboard-main').tabs();
			
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
	  for (result in data){
		  summaryDiv=$('<div>',{className:'house-summary'});
		  summaryDiv.hide();
		  summaryDiv.append($('<div>Lots of extra stuff about this house<br/>Can go here<br/>Well leave the images for a nice fancybox<br/></div>'));
		  resultDiv=$('<div>',{className:"house-result hovering"});
		  resultMin=$('<button>',{className:"house-min"});
		  resultMin.hide();
		  resultMin.click(function(){
			  $('.house-summary').slideUp();
			  $('.house-result').addClass('hovering');
			  $('.house-min').hide();
			  setTimeout(function(){$('.house-result').one('click',function(){
			  $('.house-min').show();
			  $('.house-summary').slideDown();
			  $('.house-result').removeClass('hovering');
			  });},1);//1 ms delay so click events dont conflict
			  });
		  resultImg=$('<img>',{className:"house-thumb", src:'img/houses/thumb/'+data[result].imgFileName[0]});
		  resultMetaDiv=$('<div>',{className:"house-result-meta"});
		  resultMetaDiv.append($('<h2>',{text: data[result].title}));
		  resultMetaDiv.append($('<h3>',{text: data[result].bedrooms+' bedrooms | '+data[result].total_rent+'/month'}));
		  resultRankDiv=$('<div>',{className:"house-result-ranking"});
		  resultRentDiv=$('<div>',{className:"avg-rent", text:'$'+data[result].avg_rent});
		  rentSpan=$('<span>', {text:'AVG RENT/PERSON'});
		  resultRentDiv.append(rentSpan);
		  resultRankDiv.append(resultRentDiv);
		  resultRank=$('<div>',{className:"rank", text:data[result].avg_rating});
		  rankSpan=$('<span>',{text:'STARS'});
		  resultRank.append(rankSpan);
		  resultRankDiv.append(resultRank);
		  compareBox=$('input',{type:'checkbox', className:'house-compare'});
		  resultDiv.append(resultMin);
		  resultDiv.append(resultImg);
		  resultDiv.append(resultMetaDiv);
		  resultDiv.append(resultRankDiv);
		  resultDiv.append(compareBox);
		  
		  resultDiv.one('click',function(){
			  $('.house-min').show();
			  $('.house-summary').slideDown();
			  $('.house-result').removeClass('hovering');
			  });
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
		if (value.checked){
			compareArray.push(value);
		}
		});
		$('#globe').show();
	  $('#results').html('');
	  $('#results').append($('<hr>',{className:"custom-rule"}));
	  for (compare in compareArray){
		  
		  
	  }
	  
	
}
