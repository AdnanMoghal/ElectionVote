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
											<th>Halqa Name</th>
											<th>Edit</th>
										</tr>
									</thead>
<?php									
$i=1;
if(isset($_GET['view_halqa'])){
	$query = "select * from halqa ";
	$run =mysql_query($query);
	while($row=mysql_fetch_array($run)){	
    $halqaId = $row['halqa_id'];
    $halqaName = $row['halqa_name'];
				
					?>
									
					<tbody>
						<tr>
						         
								<td>
								<?php echo $i++; ?>
								</td>
								<td>
									<?php echo $halqaName; ?>
								</td>
							
								<td>
								<a href='edit_halqa.php?id=<?php echo $halqaId;?>'><input type='button' value='Update'data-toggle="tooltip" data-placement="top" title="Update Halqa" class='btn btn-info'/></a>
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