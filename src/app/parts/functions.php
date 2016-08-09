<?php 
	$ASSETS = "assets";

	function get_files($dir) {
		if (is_dir($dir)){
			if ($dh = opendir($dir)){
				while (($file = readdir($dh)) !== false) {
				  	if ( preg_match('/^\.$|^\.\.$/', $file) == 0 ) {
				  		echo "<p><a href='/app/$dir/$file'>$file</a></p>";
				  	}
				}
				closedir($dh);
			}
		}
	}
?>