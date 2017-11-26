<?php 

	$file_path ="books/";

	$file_path = $file_path.basename($_FILES['uploaded_file']['name']);
	if (move_uploaded_file($_FILES['uploaded_file']['name'], $file_path)) {
		echo "success";
	}else {
		echo "error";
	}