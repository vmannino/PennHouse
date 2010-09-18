<script type="text/javascript">
	function initialize() {
		var latlng = new google.maps.LatLng(-34.397, 150.644);
		var myOptions = {
			zoom: 12,
			center: new google.maps.LatLng(-28.643387, 153.612224),
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
			}
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"),
			myOptions);
	
		<!-- Needed later for translating adresses to LatLngs -->
		var geocoder = new google.maps.Geocoder();
	}
</script>

<script type="text/javascript">
	$('#search-results').text('Hello World');
</script>