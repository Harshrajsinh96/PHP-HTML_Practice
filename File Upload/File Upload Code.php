<?php

if(isset($_FILES['file'])) {
	$file = $_FILES['file'];

	$file_name = $file['name'];
	$file_tmp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	$file_ext = explode('.',$file_name);
	$file_ext = strtolower(end($file_ext));

	$allowed = array('jpg','pdf');

	if(in_array($file_ext, $allowed)) {
		if ($file_error === 0) {
			if ($file_size <=2097152) {

				$file_name_new = 'Resume'.'-'.$file_name;
				$file_destination = 'Uploads/'.$file_name_new;
				if(move_uploaded_file($file_tmp, $file_destination)) {
					echo $file_destination;
					echo nl2br("\n");
					echo ('Success');
				}	else {echo ('Error!');}
			}	else {echo ('Error!');}
		}	else {echo ('Error!');}
	}	else {echo ('Error!');}
}	else {echo ('Error!');}
?>

