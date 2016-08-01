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
    <h1 class="text-center">Update Halqa</h1>
  	<hr>
	<div class="row">

<?php
include("connect.php");

//$employeeUsername=$_SESSION['emp_username'];

@$halqaId=$_GET['id'];

$query = mysql_query("SELECT * FROM halqa where halqa_id='$halqaId' ");

while ($row=mysql_fetch_array($query)){
	$halqaId1 = $row['halqa_id'];
    $halqaName = $row['halqa_name'];

?>
<form method="post" action="edit_halqa.php" class="form-horizontal" role="form" enctype="multipart/form-data">
<input type="hidden" id="update_id" name="update_id" value="<?php echo $halqaId1; ?>">    
	<div class="form-group">
            <label class="col-lg-3 control-label">Halqa Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="halqaName" name="halqaName" type="text" value="<?php echo $halqaName; ?>">
            </div>
          </div>
          
		 		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="update" name="update" class="btn btn-info">Update</button>
              <span></span>
              <a href="view_halqa.php?viewhalqa=viewhalqa"><button type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button></a>
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
	  $halqaId = $_POST['update_id'];    
	 	  $halqaName = $_POST['halqaName'];
		 		 
		 $query = mysql_query("update halqa set halqa_name= '$halqaName' where halqa_id='$halqaId'");
	     
		 if($query){
      
	  
			 echo "<div class='text-center text-success'>
			 <h1>Halqa Has Been Updated!!</h1>
			 </div>";
		 }
?>
<hr/>
<?php	 
	 }
	 
}


?>


