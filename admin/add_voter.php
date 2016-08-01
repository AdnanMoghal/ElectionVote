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
    <h1 class="text-center">Add New Voter</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
<?php
include("connect.php");




if(isset($_POST['submit'])){
	
	 
	  $voterFirstName = $_POST['voterFirstName'];
	  $voterLastName = $_POST['voterLastName'];
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
		 
		// move_uploaded_file($employeeImage_tmp,"../employee/emp_images/$employeeImage");

$query1 = mysql_query("SELECT * FROM user WHERE cnic ='$voterCnicNumber'")or die(mysql_error());
	  if(mysql_num_rows($query1)>0){
				echo'<div class="alert alert-warning alert-dismissible text-center" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		  <strong>Warning!! </strong> Voter with Cnic Number '.$voterCnicNumber.' Already Exists </div>';
			}
			else{
		

		
		 $query = mysql_query("INSERT INTO user VALUES ('$voterFirstName$voterLastName','$voterCnicNumber','$voterContactNumber','','$voterHalqa','$voterAddress','$voterDob','$voterPassword','$voterReligion','$voterEmail')");
	     
		 if($query){
             
			 //header("location: index.php");
	  
			  echo"<script>window.open('index.php?addedVoter=Voter has been Added','_self')</script>";
			}
			}
?>
<hr/>
<?php	 
	 }
	 else
	 {
		 echo "<script>alert('your passwords dont match!!')</script>";
	 }
}


?>






      
	  
	  
      <!--  form column -->
      
        
        <h2 class="text-center"><b>Voter info</b></h2>
        <form method="post" action="add_voter.php" class="form-horizontal" role="form" enctype="multipart/form-data">
          <div class="form-group">
            <label class="col-lg-3 control-label">First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="voterFirstName" name="voterFirstName" type="text" placeholder="Voter First Name" required>
            </div>
          </div>
          
		  <div class="form-group">
            <label class="col-lg-3 control-label">Last Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="voterLastName" name="voterLastName" type="text" placeholder="Voter Last Name" required>
            </div>
          </div>
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">National ID Card Number:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterCnicNumber" name="voterCnicNumber" type="text" placeholder="CNIC Number" required>
            </div>
          </div>
		 
          <div class="form-group">
            <label class="col-md-3 control-label">Contact Number:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterContactNumber" name="voterContactNumber" type="text" placeholder="Contact Number" required>
            </div>
          </div>
		  
		  
		  <label class="col-lg-3 control-label">Halqa:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="voterHalqa" id="voterHalqa" class="select2" style="width: 775px; height:37px;">
                    <option value="" >Choose Your Halqa</option>
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
              <input class="form-control" id="voterAddress" name="voterAddress" type="text" placeholder="Address" required>
            </div>
          </div>
		  
		  
		  <div class="form-group">
            <label class="col-md-3 control-label">Date Of Birth:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterDob" name="voterDob" type="date" placeholder="Date Of Birth" required>
            </div>
          </div>   
         
		 
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterPassword" name="voterPassword" type="password" placeholder="password" required>
            </div>
          </div>
		  
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterCPassword" name="voterCPassword" type="password" placeholder="confirm password">
            </div>
          </div>
		  
		 <div class="form-group">
            <label class="col-md-3 control-label">Religion:</label>
            <div class="col-md-8">
              <input class="form-control" id="voterReligion" name="voterReligion" type="text" placeholder="Religion" required>
            </div>
          </div>
		  
		 
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" id="voterEmail" name="voterEmail" type="email" placeholder="example@gmail.com" required>
            </div>
          </div>
          
		 
		 
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="submit" name="submit" class="btn btn-info">Add Voter</button>
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