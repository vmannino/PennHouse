
function initialize() {
	var latlng = new google.maps.LatLng(39.9536322, -75.1988056);
	var myOptions = {
		zoom: 15,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),myOptions);
}

/* 
   given a string containing an address, returns a 2-element array x, such that
   x[0] = lattitude
   x[1] = longitude
*/
function getLatLng(address) {
	var geocoder = new google.maps.Geocoder();
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
		
$(document).ready(function(){
	// Tabs
	$('#search-results').tabs();
	$('#map-overlay').tabs();
});

