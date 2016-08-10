<?php 
	$ASSETS = "assets";

	function set_page_data($array) {
		return $GLOBALS['page'] = $array;
	}
	function get_title() {
		echo $GLOBALS['page']['title'];
	}
	function get_metadata() {
		return array(
			'keywords' => $GLOBALS['page']['keywords'],
			'desc' => $GLOBALS['page']['description'],
			'image' => $GLOBALS['page']['image']
		);
	}

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