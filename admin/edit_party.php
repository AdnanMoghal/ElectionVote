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
    <h1 class="text-center">Update Party</h1>
  	<hr>
	<div class="row">

<?php
include("connect.php");

//$employeeUsername=$_SESSION['emp_username'];

@$partyId=$_GET['id'];

$query = mysql_query("SELECT * FROM party where party_id='$partyId' ");

while ($row=mysql_fetch_array($query)){
	$partyId1 = $row['party_id'];
    $partyName = $row['party_name'];

?>
<form method="post" action="edit_party.php" class="form-horizontal" role="form" enctype="multipart/form-data">
<input type="hidden" id="update_id" name="update_id" value="<?php echo $partyId1; ?>">    
	<div class="form-group">
            <label class="col-lg-3 control-label">Party Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="partyName" name="partyName" type="text" value="<?php echo $partyName; ?>">
            </div>
          </div>
          
		 		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="update" name="update" class="btn btn-info">Update</button>
              <span></span>
              <a href="view_party.php?viewparty=viewparty"><button type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button></a>
            </div>
          </div>
		  <?php } ?>
        </form>
      </div>
  </div>

<hr>
</body>
</html>
<?php

if(isset($_POST['update'])){
	  $partyId = $_POST['update_id'];    
	 	  $partyName = $_POST['partyName'];
		 		 
		 $query = mysql_query("update party set party_name= '$partyName' where party_id='$partyId'");
	     
		 if($query){
      
	  
			 echo "<div class='text-center text-success'>
			 <h1>Party Has Been Updated!!</h1>
			 </div>";
		 }
?>
<hr/>
<?php	 
	 }
	 
}


?>


