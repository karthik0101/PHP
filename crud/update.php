<?php 
	require 'connection.php';

	if (isset($_GET['upd'])) {
		$upd = $_GET['upd'];
	}

	if(isset($_POST['submit'])){
		if(!empty($_POST['ename']) && !empty($_POST['ssn'])){
			$ename = $_POST['ename'];
			$ssn = $_POST['ssn'];
			$dept = $_POST['dept'];
			$salary = $_POST['salary'];
			$homeaddress = $_POST['homeaddress'];


			// $query = "UPDATE emp_record(ename, ssn, dept, salary, homeaddress) VALUES('$ename', '$ssn', '$dept', '$salary', '$homeaddress') WHERE id = $upd";

			$query = "UPDATE emp_record SET ename = '$ename', ssn = '$ssn', dept = '$dept', salary = '$salary', homeaddress = '$homeaddress' WHERE id = {$upd}" ;
			if(mysqli_query($connection, $query)){
				echo '<script>window.open("view.php?deleted=Record Deleted Successfully", "_self")</script>';
			}
			}else {
				echo '<span class="FieldInfoHead">Please Atleast add Name and Socila Security Number</span>';
			}
	}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>UPDATE INTO DATABASE#</title>
	<style type="text/css">
		input[type="text"], textarea {
			border: 1px solid dashed;
			background-color: rgb(221, 216, 212);
			width: 480px;
			padding: .5em;
			font-size: 1.0em;
		}
		input[type="submit"]{
			color: white;
			font-size: 1.0em;
			font-family: Bitter, Georgia, Times, "Times New Roman", serif;
			width: 200px;
			height: 40px;
			background-color: #5d0580;
			border: 5px solid;
			border-bottom-left-radius: 35px;
			border-bottom-right-radius: 35px;
			border-top-left-radius: 35px;
			border-top-right-radius: 35px;
			border-color: rgb(221, 216, 212);
			font-weight: bold;
			float: left;
		}
	</style>
</head>
<body>
	<form action="#" method="post">
		<fieldset>
			Employee Name:<br> <input type="text" name="ename" value=""><br>
			Social Security Number: <br><input type="text" name="ssn" value=""><br>
			Department:<br> <input type="text" name="dept" value=""><br>
			Salary: <br><input type="text" name="salary" value=""><br>
			Home Address: <br><input type="text" name="homeaddress" value=""><br>
			<input type="submit" name="submit" value="Submit Your Record"><br>
		</fieldset>
	</form>
</body>
</html>