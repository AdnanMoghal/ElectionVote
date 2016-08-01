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
    <h1 class="text-center">Update Candidates's Data</h1>
  	<hr>
	<div class="row">

<?php
include("connect.php");

//$employeeUsername=$_SESSION['emp_username'];

@$candidateId=$_GET['id'];

$query = mysql_query("SELECT * FROM candidate where candidate_id='$candidateId' ");

while ($row=mysql_fetch_array($query)){
	$candidateId = $row['candidate_id'];
	$candidateParty = $row['party_id'];
	$candidateHalqa = $row['halqa_id'];
	$candidateFirstName = $row['candidate_fname'];
	$candidateLastName = $row['candidate_lname'];
	$candidateImage = $row['candidate_image'];
    
	

?>
<form method="post" action="edit_candidate.php" class="form-horizontal" role="form" enctype="multipart/form-data">

<input type="hidden" id="update_id" name="update_id" value="<?php echo $candidateId; ?>">    
		  
<?php
$query1 = mysql_query("SELECT * FROM party WHERE party_id ='$candidateParty'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>		  
		  <label class="col-lg-3 control-label">Party:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="candidateParty" id="candidateParty" class="select2" style="width: 775px; height:37px;">
                    <option value="<?php echo $row['party_id']; ?>" ><?php echo $row['party_name']; ?></option>
<?php

$query = mysql_query("SELECT * FROM party");
while ($row=mysql_fetch_array($query)){
	
	$partyId = $row['party_id'];
	$partyName = $row['party_name'];


?>		 		 

					<option value="<?php echo $partyId; ?>"><?php echo $partyName; ?></option>
<?php } ?>
					<!--<option value="Manager">Manager</option>
					<option value="Team Lead">Team Lead</option>
					<option value="Project Manager">Project Manager</option>
					<option value="Senior Developer">Senior Developer</option>
					<option value="Junior Developer">Junior Developer</option>
					<option value="Market Manger">Market Manger</option>-->
                    </select></div>
		  




<?php
$query1 = mysql_query("SELECT * FROM halqa WHERE halqa_id ='$candidateHalqa'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>		  
		  <label class="col-lg-3 control-label">Halqa:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="candidateHalqa" id="candidateHalqa" class="select2" style="width: 775px; height:37px;">
                    <option value="<?php echo $row['halqa_id']; ?>" ><?php echo $row['halqa_name']; ?></option>
<?php

$query = mysql_query("SELECT * FROM halqa");
while ($row=mysql_fetch_array($query)){
	
	$halqaId = $row['halqa_id'];
	$halqaName = $row['halqa_name'];


?>		 		 

					<option value="<?php echo $halqaId; ?>"><?php echo $halqaName; ?></option>
<?php } ?>
					<!--<option value="Manager">Manager</option>
					<option value="Team Lead">Team Lead</option>
					<option value="Project Manager">Project Manager</option>
					<option value="Senior Developer">Senior Developer</option>
					<option value="Junior Developer">Junior Developer</option>
					<option value="Market Manger">Market Manger</option>-->
                    </select></div>


		  
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">First Name:</label>
            <div class="col-md-8">
              <input class="form-control" id="candidateFirstName" name="candidateFirstName" type="text" value="<?php echo $candidateFirstName; ?>">
            </div>
          </div>
		  
		  
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Last Name:</label>
            <div class="col-md-8">
              <input class="form-control" id="candidateLastName" name="candidateLastName" type="text" value="<?php echo $candidateLastName; ?>">
            </div>
          </div>
		  
		  
           <div class="form-group">
		    <label class="col-md-3 control-label">Candidate Image:</label>
			<div class="col-md-8">
           <input type="file" class="form-control" id="candidateImage" name="candidateImage"  required><img src="../candidateImages/<?php echo $candidateImage; ?>" class="img" alt="<?php echo $candidateImage; ?>" width="180" height="80" >
		   </div>
	      </div>
		


		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="update" name="update" class="btn btn-info">Update</button>
              <span></span>
              <a href="view_candidate.php?viewcandidate=viewcandidate"><button type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button></a>
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
	   $candidateId = $_POST['update_id'];    
	 	  //$voterName = $_POST['voterName'];
	  //$voterLastName = $_POST['voterLastName'];
	 //$voterCnicNumber = $_POST['voterCnicNumber'];
	 //$voterContactNumber = $_POST['voterContactNumber'];
	 //$gender = $_POST['gender'];
	 //$employeeImage = $_FILES['employeeImage']['name'];
	 //$employeeImage_tmp = $_FILES['employeeImage']['tmp_name'];
	 $candidateParty = $_POST['candidateParty'];
	$candidateHalqa = $_POST['candidateHalqa'];
	$candidateFirstName = $_POST['candidateFirstName'];
	$candidateLastName = $_POST['candidateLastName'];
	$candidateImage = $_FILES['candidateImage']['name'];
	$candidateImage_tmp = $_FILES['candidateImage']['tmp_name'];
	 //$employeeBasicSalary = $_POST['employeeBasicSalary'];
	 
	 
	 //if($voterPassword==$voterCPassword){
		 

		 
		 
		 
		 
		 
		 
		 
		 		 
		 move_uploaded_file($candidateImage_tmp,"../candidateImages/$candidateImage");
		 
		 
		 
		 
		 $query = mysql_query("update candidate set party_id= '$candidateParty',halqa_id='$candidateHalqa',candidate_fname='$candidateFirstName',candidate_lname='$candidateLastName',candidate_image='$candidateImage' where candidate_id='$candidateId'");
	     
		 if($query){
      
	  
			 echo "<div class='text-center text-success'>
			 <h1>Candidate Has Been Updated!!</h1>
			 </div>";
		 } 

		 
		 
		 
		 
		 ?>
<hr/>
<?php	 
	 //}
	/* else
	 {
		 
		 echo '<div class="container-fluid">
								<div class="row">
									<div class="col-md-4 col-md-offset-4">
										<div class="alert alert-success">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">
												×</button>
										   <span class="glyphicon glyphicon-ok"></span> <strong>Warning!</strong>
											<hr class="message-inner-separator">
											<p><strong>Error!!</strong> Passwords Dont Match !
											&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
											<a href="edit_voter.php?id='.$voterId.'"><button type="button" class="btn btn-success">Go Back</button></a>
											</p>
										</div>
									</div>
								</div>
							</div>';
	 } */
}

}
?>


