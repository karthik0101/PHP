<?php 
	require 'connection.php';
	$delete = $_GET['del'];
	$del_query = "DELETE FROM emp_record WHERE id='$delete'";
	$execute = mysqli_query($connection, $del_query);
	if ($execute) {
		# code...
		echo '<script>window.open("view.php?deleted=Record Deleted Successfully", "_self")</script>';
	}

 ?>