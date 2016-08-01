<?php session_start(); ?>
<?php

if(!isset($_SESSION['admin_name']))	{
	
	header("location: login.php");
}
else{
	
?>
<?php

//$admin_username=$_SESSION['admin_username']

?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				  <div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					<!--  <a class="navbar-brand" href="#">Smart HR Manager</a> -->
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="myNavbar">
					  <ul class="nav navbar-nav">
						<li><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
						<li><a href="add_voter.php?addvoter=addvoter">Add New Voter<span class="sr-only">(current)</span></a></li>
					<!--	<li><a href="#">View Employee<span class="sr-only">(current)</span></a></li>
						<li><a href="#">Delete Employee<span class="sr-only">(current)</span></a></li>
						<li><a href="#">Update Employee<span class="sr-only"></span></a></li> -->
						<li><a href="view_voters.php?view=view">View All Voters<span class="sr-only"></span></a></li>
					<!--	<li><a href="#">Delete All Employees<span class="sr-only"></span></a></li>  -->
					<!--	<li><a href="#">Assign Task To Employees<span class="sr-only"></span></a></li> -->
						<li><a href="add_halqa.php?addhalqa=addhalqa">Add New Halqa<span class="sr-only"></span></a></li>
					<!--	<li><a href="#">View Salary Details<span class="sr-only"></span></a></li>  -->
					<!--	<li><a href="#">View Payslips<span class="sr-only"></span></a></li>  -->
						<li><a href="view_halqa.php?view_halqa=view_halqa">View All Halqas<span class="sr-only"></span></a></li>
					<!--	<li><a href="#">Generate Reports<span class="sr-only"></span></a></li> -->
					<!--	<li><a href="#">Create Evaluation Forms<span class="sr-only"></span></a></li>  -->
					<!--	<li><a href="#">Manage Department<span class="sr-only"></span></a></li>  -->
						<li><a href="add_party.php?addparty=addparty">Add New Party<span class="sr-only"></span></a></li>
						<li><a href="view_party.php?viewparty=viewparty">View All Parties<span class="sr-only"></span></a></li>
						<li><a href="add_candidate.php?addcandidate=addcandidate">Add New Candidate<span class="sr-only"></span></a></li>
						<li><a href="view_candidate.php?viewcandidate=viewcandidate">View All Candidate<span class="sr-only"></span></a></li>
					<!--	<li><a href="#">Add New Admin<span class="sr-only"></span></a></li> -->
						<!--<p class="navbar-text">Welcome Admin! <strong class="text-danger"><?php echo ($_SESSION['admin_username']) ?></strong></p>-->
						<!--<li><p class="navbar-text"><a href="logout.php" class="navbar-link"  data-placement="bottom" title="Log Out">Logout</a></p></li>-->
					  </ul>
					 <ul class="nav navbar-nav navbar-right"> 
						<!-- Brand and toggle get grouped for better mobile display -->
						<p class="navbar-text">Welcome Admin! <strong class="text-danger"><?php echo ($_SESSION['admin_name']) ?></strong></p>
						
						
						<li><p class="navbar-text"><a href="logout.php" class="navbar-link"  data-placement="bottom" title="Log Out">Logout</a></p></li>
					</ul>  
					
					</div><!-- /.navbar-collapse -->
				  </div><!-- /.container-fluid -->
				</nav>
<?php } ?>