<?php include ("header.php"); ?>
<?php include ("navbar.php");?>
<?php

if(!isset($_SESSION['admin_name'])){
	
	header("location: login.php");
}
else
{
	
?>
<div class="container-fluid">
	<div class = "row">
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="table-responsive">
					<?php
					include("connect.php");
  
?>
						<table class='table table-hover' style='margin-top:10px;'>
									<thead>
										<tr>
										    <th>Sr No:</th>  
											<th>Voter Name</th>
											<th>CNIC</th>
											<th>Contact Number</th>
											<th>Halqa</th>
											<th>Address</th>
											<th>Date Of Birth</th>
											<th>Religion</th>
											<th>Email</th>
											<th>Delete</th>
											<th>Edit</th>
										</tr>
									</thead>
<?php									
$i=1;
if(isset($_GET['view'])){
	$query = "select * from user ";
	$run =mysql_query($query);
	while($row=mysql_fetch_array($run)){	
    $voterName = $row['name'];
    $voterCnic = $row['cnic'];
	//$employeeLastName = $row['emp_lname'];
	//$employeeImage =$row['emp_img'];
	//$employeeDesignation = $row['emp_designation'];
	//$employeeBasicSalary = $row['emp_basic_salary'];
	$voterContactNumber = $row['phone'];
	$voterId = $row['user_id'];
	$halqaId = $row['halqa_id'];
	$voterAddress = $row['address'];
	$voterDob = $row['dob'];
	$voterPassword = $row['password'];
	$voterReligion = $row['religion'];
	$voterEmail = $row['email'];
	//$employeeUsername = $row['emp_uname'];
	//$employeePassword = $row['emp_password'];
				
					?>
									
					<tbody>
						<tr>
						         
								<td>
								<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $voterName; ?>
								</td>
							
								<td>
									<?php echo $voterCnic; ?>
								</td>
				
								<td>
									<?php echo $voterContactNumber; ?>
								</td>
<?php
$query1 = mysql_query("SELECT * FROM halqa WHERE halqa_id ='$halqaId'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>								

                                 <td>
									<?php echo $row['halqa_name']; ?>
								</td>
								<td>
									<?php echo $voterAddress; ?>
								</td>
								<td>
									<?php echo $voterDob; ?>
								</td>
								<td>
									<?php echo $voterReligion; ?>
								</td>
								<td>
									<?php echo $voterEmail; ?>
								</td>
								
								<td>
								<a href='delete_voter.php?id=<?php echo $voterId;?>'><input type='button' value='Delete'data-toggle="tooltip" data-placement="top" title="Delete Voter" class='btn btn-info'/></a>
								</td>
								<td>
								<a href='edit_voter.php?id=<?php echo $voterId;?>'><input type='button' value='Update'data-toggle="tooltip" data-placement="top" title="Update Voter's Data" class='btn btn-info'/></a>
								</td>
								
							</tr>
					</tbody>
				<?php
}}
					echo"</table>";
				?>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
<?php } ?>	