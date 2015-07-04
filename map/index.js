/*
 * @copyright 2015 commenthol
 * @license MIT
 */

/* globals L */

function init() {
	
	var minZoom = 1,
		maxZoom = 5,
		img = [
			3011,  // original width of image
			2029   // original height of image
		];

	// create the map
	var map = L.map('map',{
			minZoom: minZoom,
			maxZoom: maxZoom,
		});

	// assign map and image dimensions
	var rc = new L.RasterCoords(map, img);
	// set the bounds on map
	rc.setMaxBounds();
	
	
	/*map.on('dragend', function(event){
		alert("mousemove");
		var marker = event.target;


	});	*/
	
	

	// set the view on a marker ...
	map.setView(rc.unproject([3011, 2029]), 1);

	// the tile layer containing the image generated with gdal2tiles --leaflet ...
	L.tileLayer('./tiles/{z}/{x}/{y}.png', {
		noWrap: true,
		attribution: 'CONABIO',
	}).addTo(map);
}