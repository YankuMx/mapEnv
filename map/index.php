<!DOCTYPE html>
<html>
	<head>
		<title>Prueba Mapa</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
		<link rel="stylesheet" href="leaflet-0.7.3/leaflet.css" />
        <script>
		var pubThis;
		</script>
		<script src="leaflet-0.7.3/leaflet-src.js"></script>
		<script src="rastercoords.js"></script>
		<script src="index.js"></script>
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="plugins/ion.rangeSlider-2.0.6/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.css">
        <link rel="stylesheet" type="text/css" href="plugins/ion.rangeSlider-2.0.6/css/ion.rangeSlider.skinFlat.css">
			<!-- html, body, #map { width:500px; height:500px; margin:0; padding:0;} -->
		<style>
			html, body, #map-canvas {
            height: 400px;
            margin: 0px;
            padding: 0px;
            font:12px Arial;
            }
            .clmn > div > div
            {
                width: 18%;
                margin:20px 11px;
				float:left;
            }
            .clmn > div > div > span
            {
                margin-bottom: 6px;
            }
			 #map { 
				width:100%;
				height:400px; 
				margin:0; 
				padding:0;
			}
			#imagenes{
				display:none;
			}
			.var{
				width:300px;
			}
			textarea{
				height:500px;
				width:500px;
			}
			

		</style>
	</head>
	<body onload="init()" id="cuerpo">   
    
		<div id="map"></div>
        
        <form method="post" name="vars" id="vars">
            <div>
                <div class="clmn">
                    <div>
                        <div>
                            <span>Var 1</span>
                            <input type="text" id="r1" name="r1" value="" class="var"/>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span>Var 2</span>
                            <input type="text" id="r2" name="r2" value="" class="var"/>
                        </div>
                        <div>
                            <span>Var 3</span>
                            <input type="text" id="r3" name="r3" value="" class="var"/>
                        </div>
                    </div>
                    <div>
                        <div>
                            <span>Var 4</span>
                            <input type="text" id="r4" name="r4" value="" class="var"/>
                        </div>
                        <div>
                            <span>Var 5</span>
                            <input type="text" id="r5" name="r5" value="" class="var"/>
                        </div>
                    </div>
                </div>
            </div>
            <textarea id="puntos"></textarea>
        </form>            
        
        <?php
$dir ='tiles';
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
echo "</div>";
?>
	</body>
</html>
