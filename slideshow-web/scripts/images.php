<?php
function imgsInDir($dir = "images/slides") {
    $imgs = glob($dir ."/*.{jpg,png,JPG,PNG}", GLOB_BRACE); // get your image files with .jpg
    foreach ($imgs AS $i) {
    	echo "            <div data-src='$i'>\n"; //
    	echo "                <div class='camera_caption fadeFromBottom'>\n";
    	if ( file_exists($i .'.caption') ){
    		echo "                    ";
    		echo file_get_contents($i .'.caption');
    	}else{
    		echo "                    SiSLab Gallery @snn\n";
    	}
    	echo "                </div>\n"; //
    	echo "            </div>\n"; //
    }
}
?>

