<?php 

include("db.php");
include("header.php");


?>

<div class="panel panel-default">
	<div class="panel panel-heading">
		<h2>
			<a class="btn btn-success" href="add.php">Add student</a>
			<a class="btn btn-info pull-right" href="index.php">Back</a>
		</h2>

		<div class="panel panel-body">
			
				<table class="table table-striped">
				<tr>
					<th>SerialNumber</th> <th>date</th> <th>Show Attendance</th>
				</tr>
					<?php 
					$result=mysqli_query($con,"select distinct date from attendance_record");
					$serialnumber=0;
					$counter=0;
					while($row=mysqli_fetch_array($result))

					 {
						$serialnumber++;
					
					?>
					<tr>
					<td><?php echo $serialnumber; ?></td>
					<td><?php echo $row['date']; ?>
						
					</td>
					<td>
						<form action="show_attendance.php" method="post">
							<input type="hidden" value="<?php echo $row['date'] ?>" name="date">
							<input type="submit" value="Show Attendance" class="btn btn-primary">
							
						</form>
						
					</td>
						
					
					</tr>
					<?php
					$counter++;
					}
					?>
				</table>
				
				
			</form>
			
		</div>
	</div>
	
</div>