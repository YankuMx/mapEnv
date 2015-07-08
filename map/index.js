/*
 * @copyright 2015 commenthol
 * @license MIT
 */

/* globals L */

function init() {
	$("#r1, #r2, #r3, #r4, #r5").ionRangeSlider({
	min: 0,
	max: 100,
	from: 50,
	grid:true,
	
	});
	
	$(".var").change(function(){
		L.variable = "";
		L.valor = "";
		$(".var").each(function() {
            var variable = this.id;
			var valor = this.value;
			L.variable = L.variable+variable+",";
			L.valor = L.valor+valor+",";
        });
		pubThis.redraw();
    });
	function componentToHex(c) {
		var hex = c.toString(16);
		return hex.length == 1 ? "0" + hex : hex;
	}
	
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
	L.valor = "50,50,50,50,50,";
	L.variable = "r1,r2,r3,r4,r5,";
	
	var red = 255; 
	var green = 0;
	var blue = 0;
	var stepSize = 16;
	var colores = [];
	var iColores = 0;
	while(green < 255)
	{
		green += stepSize;
		if(green > 255) { green = 255; }
		colores[iColores] = "#" + componentToHex(red) + componentToHex(green) + componentToHex(blue);
		iColores++;
	}
	while(red > 0)
	{
		red -= stepSize;
		if(red < 0) { red = 0; }
		colores[iColores] = "#" + componentToHex(red) + componentToHex(green) + componentToHex(blue);
		iColores++;
	}
	L.colores = colores;	
	
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