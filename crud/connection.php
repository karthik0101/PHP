<?php 
	$connection = mysqli_connect('localhost', 'root', '', 'record');
	if($connection){
		echo "";
	} else {
		mysqli_error($connection);
	}

 ?>