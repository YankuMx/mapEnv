<!DOCTYPE html>
<html>
	<head>
		<title>Prueba Mapa</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" href="leaflet-0.7.3/leaflet.css" />
		<script src="leaflet-0.7.3/leaflet-src.js"></script>
		<script src="rastercoords.js"></script>
		<script src="index.js"></script>
			<!-- html, body, #map { width:500px; height:500px; margin:0; padding:0;} -->
		<style>
			 #map { 
				width:100%;
				height:600px; 
				margin:0; 
				padding:0;
			}
			#imagenes{
				display:none;
			}
			

		</style>
	</head>
	<body onload="init()" id="cuerpo">
		<div id="map"></div>
        
        <form>
          <input type="range" name="points" min="0" max="10">
        </form>
        
        
        
        
        
        <?php
/*$dir ='tiles';
while($dirs = glob($dir . '/*', GLOB_ONLYDIR)) {
  $dir .= '/*';
  if(!$d) {
     $d=$dirs;
   } else {
      $d=$dirs;
   }
}
$count=0;
echo "<div id='imagenes'>";
foreach($d as $directory){
	$images = glob($directory . "/*.png");
	foreach($images as $image)
	{
		$count++;
	  echo "<img src='".$image."'>";
	}
	
}
echo $count;
echo "</div>";*/
?>
	</body>
</html>
