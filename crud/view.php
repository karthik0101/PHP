<?php  require 'connection.php'; ?>

<?php if (isset($_GET['deleted'])) {
	# code...
	$new = $_GET['deleted']; 
	echo '<div class="alert alert-success"><strong>Action granted Successfully</strong> </div>';
} ?>



<!DOCTYPE html>
<html>
<head>
	<title>View From Database</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<div class="container border" style="margin-top: 30px;">
			<form class="form-group">
				<div class="form-group">
					<label class="form-group">Search Field</label>
					<input type="text" name="Search" value="" class="form-control" placeholder="Search By Employee Name"><br>
					<input type="submit" name="Searchbtn" class="btn btn-primary">
				</div>
			</form>
		</div>
		
		<table width="1000" border="5" align="center" class="table table-hover table-bordered table-striped">
			<h1>View From Database</h1>
			<tr>
				<th>ID</th>
				<th>Employee Name</th>
				<th>SSN</th>
				<th>Department</th>
				<th>Salary</th>
				<th>Home Address</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>

			<?php 
				$ViewQuery = "SELECT * FROM emp_record";
				$Execute = mysqli_query($connection, $ViewQuery);
				$result = mysqli_fetch_all($Execute, MYSQLI_ASSOC);
			 ?>
			 <?php foreach ($result as $results) : ?>
			 <tr>
			 	<td><?php  echo $results['id']; ?></td>
			 	<td><?php  echo $results['ename']; ?></td>
			 	<td><?php  echo $results['ssn']; ?></td>
			 	<td><?php  echo $results['dept']; ?></td>
			 	<td><?php  echo $results['salary']; ?></td>
			 	<td><?php  echo $results['homeaddress']; ?></td>
			 	<td><a href="update.php?upd=<?php echo $results['id'] ?>" class="btn btn-default">update</a></td>
			 	<td><a href="delete.php?del=<?php echo $results['id']; ?>" class="btn btn-default">Delete</a></td>
			 </tr>
			<?php endforeach; ?>
		</table>
		<button class="btn btn-lg btn-block " href="insert.php"><a href="insert.php">ADD NEW </a></button>
	</div>
</body>
</html>