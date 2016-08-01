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

$voterId=$_GET['id'];

$delete_query ="delete from user where user_id='$voterId'";

if(mysql_query($delete_query)){
	
	echo "<div class='text-center text-danger' style='margin-top: 200px;'>
			 <h1>Voter Has Been Deleted!!</h1>
			 </div>";
	
}
	









?>
<div class="row" style="margin-top: 50px;">
<div class="col-md-7">
</div>
<div class="col-md-5">
  <a href="view_voters.php?view=view"><button type="button" id="submit" name="submit" class="btn btn-primary">Go Back</button></a>
         <span></span>
</div>

</div>
<?php } ?>