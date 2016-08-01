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
    <h1 class="text-center">Update Voter's Data</h1>
  	<hr>
	<div class="row">

<?php
include("connect.php");

//$employeeUsername=$_SESSION['emp_username'];

@$voterId=$_GET['id'];

$query = mysql_query("SELECT * FROM user where user_id='$voterId' ");

while ($row=mysql_fetch_array($query)){
	$voterName = $row['name'];
    $voterCnic = $row['cnic'];
	//$employeeLastName = $row['emp_lname'];
	//$employeeImage =$row['emp_img'];
	//$employeeDesignation = $row['emp_designation'];
	//$employeeBasicSalary = $row['emp_basic_salary'];
	$voterContactNumber = $row['phone'];
	$voterId = $row['user_id'];
	$halqaId = $row['halqa_id'];
	$voterAddress = $row['address'];
	$voterDob = $row['dob'];
	$voterPassword = $row['password'];
	$voterReligion = $row['religion'];
	$voterEmail = $row['email'];
	//$employeeUsername = $row['emp_uname'];
	//$employeePassword = $row['emp_password'];
	

?>
<form method="post" action="edit_voter.php" class="form-horizontal" role="form" enctype="multipart/form-data">
<input type="hidden" id="update_id" name="update_id" value="<?php echo $voterId; ?>">    
	<div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="voterName" name="voterName" type="text" value="<?php echo $voterName; ?>">
            </div>
          </div>
          
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">National ID Card Number:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterCnicNumber" name="voterCnicNumber" type="text" value="<?php echo $voterCnic; ?>" >
            </div>
          </div>
		 
          <div class="form-group">
            <label class="col-md-3 control-label">Contact Number:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterContactNumber" name="voterContactNumber" type="text" value="<?php echo $voterContactNumber; ?>" >
            </div>
          </div>
		  
<?php
$query1 = mysql_query("SELECT * FROM halqa WHERE halqa_id ='$halqaId'")or die(mysql_error());
$row=mysql_fetch_array($query1)
?>		  
		  <label class="col-lg-3 control-label">Halqa:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="voterHalqa" id="voterHalqa" class="select2" style="width: 775px; height:37px;">
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
            <label class="col-md-3 control-label">Address:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterAddress" name="voterAddress" type="text" value="<?php echo $voterAddress; ?>">
            </div>
          </div>
		  
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Date Of Birth:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterDob" name="voterDob" type="date" value="<?php echo $voterDob; ?>">
            </div>
          </div>   
         
		 
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterPassword" name="voterPassword" type="password" value="<?php echo $voterPassword; ?>">
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Confirm Password:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterCPassword" name="voterCPassword" type="password" value="<?php echo $voterPassword; ?>">
            </div>
          </div>
          
		 <div class="form-group">
            <label class="col-md-3 control-label">Religion:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterReligion" name="voterReligion" type="text" value="<?php echo $voterReligion; ?>">
            </div>
          </div>
		  
		 
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" id="voterEmail" name="voterEmail" type="email" value="<?php echo $voterEmail; ?>">
            </div>
          </div>		  
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="update" name="update" class="btn btn-info">Update</button>
              <span></span>
              <a href="view_voters.php?view=view"><button type="button" id="submit" name="submit" class="btn btn-primary">Cancel</button></a>
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
	  $voterId = $_POST['update_id'];    
	 	  $voterName = $_POST['voterName'];
	  //$voterLastName = $_POST['voterLastName'];
	 $voterCnicNumber = $_POST['voterCnicNumber'];
	 $voterContactNumber = $_POST['voterContactNumber'];
	 //$gender = $_POST['gender'];
	 //$employeeImage = $_FILES['employeeImage']['name'];
	 //$employeeImage_tmp = $_FILES['employeeImage']['tmp_name'];
	 $voterHalqa = $_POST['voterHalqa'];
	 //$employeeBasicSalary = $_POST['employeeBasicSalary'];
	 $voterAddress = $_POST['voterAddress'];
	 $voterDob = $_POST['voterDob'];
	 $voterPassword = $_POST['voterPassword'];
	 $voterCPassword = $_POST['voterCPassword'];
	 $voterReligion = $_POST['voterReligion'];
	 $voterEmail = $_POST['voterEmail'];

	 
	 if($voterPassword==$voterCPassword){
		 
		 
		 //move_uploaded_file($employeeImage_tmp,"../employee/emp_images/$employeeImage");
		 
		 
		 
		 
		 $query = mysql_query("update user set name= '$voterName',cnic='$voterCnicNumber',phone='$voterContactNumber',halqa_id='$voterHalqa',address='$voterAddress',dob='$voterDob',password='$voterPassword',email='$voterEmail' where user_id='$voterId'");
	     
		 if($query){
      
	  
			 echo "<div class='text-center text-success'>
			 <h1>Voter Has Been Updated!!</h1>
			 </div>";
		 }
?>
<hr/>
<?php	 
	 }
	 else
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
	 }
}

}
?>


