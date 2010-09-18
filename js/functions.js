
function initialize() {
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
		zoom: 8,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map-canvas"),
		myOptions);
		
	<!-- Needed later for translating adresses to LatLngs -->
	var geocoder = new google.maps.Geocoder();
}
		
$(document).ready(function(){
	// Tabs
	$('#search-results').tabs();
	$('#map-overlay').tabs();
});

