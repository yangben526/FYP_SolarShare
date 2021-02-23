      
function initMap() {

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: {lat: 3.467531, lng: 107.961020}
    });


	const solarimageicon ="photovoltaicinfo/img/solariconmap.png";	
			
	const solarimageicontwo = "https://www.pinclipart.com/picdir/big/73-730313_flat-icons-solar-panel-regreen-2018-03-20t16.png";
		
		
    var markers = locations.map(function(location, i) {
        return new google.maps.Marker({
			position: location,
			map: map,
			icon: solarimageicon
        });
    });
		

    // Add a marker clusterer to manage the markers.
    var markerCluster = new MarkerClusterer(map, markers,
    {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
}