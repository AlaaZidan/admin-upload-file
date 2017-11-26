<?php

if(isset($_GET["list_files"])){
	$files  = array();

	foreach ($glob('books/*.*') as $file) {
		# code...

		array_push($files, basename($file));
	}
	header('Content-type: application/json');
	echo json_encode($files);
}