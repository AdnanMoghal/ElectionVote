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

$adminName=$_SESSION['admin_name'];
?>
<body>
<br/>
<div class="container-fluid text-center">
<div class="container " style="margin-top:160px;">
        <h1>Dear Admin  <strong class="text-success"><?php echo ($_SESSION['admin_name']); ?>! </strong></h1>
		
        <h1>Welcome to Admin panel of  <strong class="text-success">Online Voting System</strong></h1>
		<h3>you can manage all of your voting system content here</h3>
        </div>
</div>
<div>

<h1 class="text-center"><?php   echo @$_GET['addedVoter']; ?></h1>
<h1 class="text-center"><?php   echo @$_GET['addedHalqa']; ?></h1>
<h1 class="text-center"><?php   echo @$_GET['addedParty']; ?></h1>
<h1 class="text-center"><?php   echo @$_GET['addedCandidate']; ?></h1>
</div>

</body>
</html>
<?php } ?>


