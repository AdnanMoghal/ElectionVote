<?php include ("header.php"); ?>
<?php include ("navbar.php");?>
<?php

if(!isset($_SESSION['admin_name'])){
	
	header("location: login.php");
}
else
{
	
?>

<body>
<div class="container">
    <h1 class="text-center">Add New political Party</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
<?php
include("connect.php");




if(isset($_POST['submit'])){
	
	 
	  $partyName = $_POST['partyName'];
	  

$query1 = mysql_query("SELECT * FROM party WHERE party_name ='$partyName'")or die(mysql_error());
	  if(mysql_num_rows($query1)>0){
				echo'<div class="alert alert-warning alert-dismissible text-center" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		  <strong>Warning!! </strong> Halqa '.$partyName.' Already Exists </div>';
			}
			else{
		

		
		 $query = mysql_query("INSERT INTO party VALUES ('','$partyName')");
	     
		 if($query){
             
			 //header("location: index.php");
	  
			  echo"<script>window.open('index.php?addedParty=Party has been Added','_self')</script>";
			}
			}
?>
<hr/>
<?php	 
	 }
	 



?>






      
	  
	  
      <!--  form column -->
      
        
        <h2 class="text-center"><b>Political Party info</b></h2>
        <form method="post" action="add_party.php" class="form-horizontal" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">New Political Party Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="partyName" name="partyName" type="text" placeholder="New Political Party Name" required>
            </div>
          </div>
          
		 
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="submit" name="submit" class="btn btn-info">Add New Political Party</button>
              <span></span>
              <input type="reset" class="btn btn-primary" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>

<hr>
</body>
</html>
<?php } ?>