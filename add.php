<?php

include("header.php");
include("db.php");


if(isset($_POST['submit']))

	
	{
 	mysqli_query($con,"insert into attandance(StudentName,RollNo,email)values('$_POST[name]','$_POST[roll]','$_POST[email]')");
 	header('location:index.php');
 	
	}


?>
<div class="panel panel-default">
	
		<div class="alert alert-success">
			<strong>!success</strong>attendance data successfully insertes;
		</div>
	
	<div class="panel-heading">
		<h2>
			<a class="btn btn-success" href="add.php">Add Student</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>

		</h2>
	</div>
	<div class="panel-body">
		
		<form action="add.php" method="post">
			<div class="form-group">
				<label for="name">Student Name</label>
				<input type="text" name="name" id="name" class="form-control" required>

				
			</div>
			<div class="form-group">
				<label for="roll">Roll NO</label>
				<input type="text" name="roll" id="roll" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="email">email</label>
				<input type="text" name="email" id="email" class="form-control" required>
			</div>
			
			<div class="form-group">
				
				<input type="submit" name="submit" value="submit"  class="btn btn-primary" required>
			</div>
		</form>
		
	</div>
</div>