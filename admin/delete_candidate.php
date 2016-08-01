<?php include ("header.php"); ?>
<?php include ("navbar.php");?>
<?php

if(!isset($_SESSION['admin_name'])){
	
	header("location: login.php");
}
else
{
	
?>

<?php
include("connect.php");

//$employeeUsername=$_SESSION['emp_username'];

$candidateId=$_GET['id'];

$delete_query ="delete from candidate where candidate_id='$candidateId'";

if(mysql_query($delete_query)){
	
	echo "<div class='text-center text-danger' style='margin-top: 200px;'>
			 <h1>Candidate Has Been Deleted!!</h1>
			 </div>";
	
}
	









?>
<div class="row" style="margin-top: 50px;">
<div class="col-md-7">
</div>
<div class="col-md-5">
  <a href="view_candidate.php?viewcandidate=viewcandidate"><button type="button" id="submit" name="submit" class="btn btn-primary">Go Back</button></a>
         <span></span>
</div>

</div>
<?php } ?>