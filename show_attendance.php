<?php 
include("db.php");
include("header.php");
session_start();

?>
<div class="panel panel-default">
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="add.php">Add student</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>
		</h2>
		
		<div class="panel panel-body">
			<form action="index.php" method="post">
				<table class="table table-striped">
				<tr>
					<th>SerialNumber</th> <th>StudentName</th> <th>RollNo</th> <th>AttendanceStatus</th> 
				</tr>
					<?php 
					$result=mysqli_query($con,"select * from attendance_record ");
					$serialnumber=0;
					$counter=0;
					while($row=mysqli_fetch_array($result))

					 {
						$serialnumber++;
					
					?>
					<tr>
					<td><?php echo $serialnumber; ?></td>
					<td><?php echo $row['StudentName']; ?>

					</td>
					<td><?php echo $row['RollNo']; ?>
						
					</td>
					
					<td>
						<input type="radio" name="AttendanceStatus[<?php echo $counter; ?>]"
						<?php if($row['AttendanceStatus']=="present")
						echo "checked=checked";
						  ?>
						 value="present">present
						<input type="radio" name="AttendanceStatus[<?php echo $counter; ?>]"
						<?php if($row['AttendanceStatus']=="absent")
						echo "checked=checked";
						  ?>
						 value="absent">absent
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