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
											<th>Candidate Party</th>
											<th>Candidate Halqa</th>
											<th>Candidate First Name</th>
											<th>Candidate Last Name</th>
											<th>Candidate Image</th>
											<th>Delete</th>
											<th>Edit</th>
										</tr>
									</thead>
<?php									
$i=1;
if(isset($_GET['viewcandidate'])){
	$query = "select * from candidate ";
	$run =mysql_query($query);
	while($row=mysql_fetch_array($run)){	
    $candidateId = $row['candidate_id'];
    $partyId = $row['party_id'];
    $halqaId = $row['halqa_id'];
    $candidateFirstName = $row['candidate_fname'];
    $candidateLastName = $row['candidate_lname'];
    $candidateImage = $row['candidate_image'];
    
				
					?>
									
					<tbody>
						<tr>
						         
								<td>
								<?php echo $i++; ?>
								</td>
<?php
$query1 = mysql_query("SELECT * FROM party WHERE party_id ='$partyId'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>								


								<td>
									<?php echo $row['party_name']; ?>
								</td>
<?php
$query1 = mysql_query("SELECT * FROM halqa WHERE halqa_id ='$halqaId'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>								
							
							    <td>
									<?php echo $row['halqa_name']; ?>
								</td>
							
							    <td>
									<?php echo $candidateFirstName; ?>
								</td>
							
							     <td>
									<?php echo $candidateLastName; ?>
								</td>
								
							    <td>
									<img src="../candidateImages/<?php echo $candidateImage; ?>" class="img-circle" alt="<?php echo $candidateImage; ?>" width="80" height="80" >
								</td>
							
								<td>
								<a href='delete_candidate.php?id=<?php echo $candidateId;?>'><input type='button' value='Delete'data-toggle="tooltip" data-placement="top" title="Delete Candidate" class='btn btn-info'/></a>
								</td>
								
								<td>
								<a href='edit_candidate.php?id=<?php echo $candidateId;?>'><input type='button' value='Update'data-toggle="tooltip" data-placement="top" title="Update Candidate" class='btn btn-info'/></a>
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