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
});	

