<?php 
include("db.php");
include("header.php");
session_start();
if(isset($_POST['submit']))
{
	
	foreach($_POST['AttendanceStatus'] as $id=>$AttendanceStatus)
	{
		$StudentName=$_POST['StudentName'];
		$RollNo=$_POST['RollNo'];

		$date=date("Y-m-d H:i:s");
		mysqli_query($con,"insert into attendance_record(StudentName,RollNo,AttendanceStatus,date)values('$StudentName','$RollNo','$AttendanceStatus','$date')");
	}
}
?>
<div class="panel panel-default">
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="add.php">Add student</a>
			<a class="btn btn-info pull-right" href="view_all.php">View All</a>
		</h2>
		<h3><div class="well text-center">Date:<?php echo date("y-m-d");?></div></h3>
		<div class="panel panel-body">
			<form action="" method="post">
				<table class="table table-striped">
				<tr>
					<th>SerialNumber</th> <th>StudentName</th> <th>RollNo</th> <th>Email</th> <th>AttendanceStatus</th> 
				</tr>
					<?php 
					$result=mysqli_query($con,"select * from attandance");
					$serialnumber=0;
					$counter=0;
					while($row=mysqli_fetch_array($result))

					 {
						$serialnumber++;
					
					?>
					<tr>
					<td><?php echo $serialnumber; ?></td>
					<td><?php echo $row['StudentName']; ?>
						<input type="hidden" value="<?php echo $row['StudentName'] ?>" name="StudentName">
					</td>
					<td><?php echo $row['RollNo']; ?>
						<input type="hidden" value="<?php echo $row['RollNo'] ?>" name="RollNo">
					</td>
					<td><?php echo $row['email']; ?></td>
					<td>
						<input type="radio" name="AttendanceStatus[<?php echo $counter; ?>]" value="present">present
						<input type="radio" name="AttendanceStatus[<?php echo $counter; ?>]" value="absent">absent
					</td>
					</tr>
					<?php
					$counter++;
					}
					?>
				</table>
				<input type="submit" name="submit" value="submit" class="btn btn-primary">
				
			</form>
			
		</div>
	</div>
	
</div>