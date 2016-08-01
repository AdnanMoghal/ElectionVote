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
    <h1 class="text-center">Add New political Candidate</h1>
  	<hr>
	<div class="row">
      <!-- left column -->
      
<?php
include("connect.php");




if(isset($_POST['submit'])){
	
	 
	  $candidateParty = $_POST['candidateParty'];
	  $candidateHalqa = $_POST['candidateHalqa'];
	  $candidateFirstName = $_POST['candidateFirstName'];
	  $candidateLastName = $_POST['candidateLastName'];
	  $candidateImage = $_FILES['candidateImage']['name'];
	 $candidateImage_tmp = $_FILES['candidateImage']['tmp_name'];

/*$query1 = mysql_query("SELECT * FROM candidate WHERE party_name ='$partyName'")or die(mysql_error());
	  if(mysql_num_rows($query1)>0){
				echo'<div class="alert alert-warning alert-dismissible text-center" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		  <strong>Warning!! </strong> Halqa '.$partyName.' Already Exists </div>';
			}
			else{
*/		

		move_uploaded_file($candidateImage_tmp,"../candidateImages/$candidateImage");
		
		 $query = mysql_query("INSERT INTO candidate VALUES ('','$candidateParty','$candidateHalqa','$candidateFirstName','$candidateLastName','$candidateImage')");
	     
		 if($query){
             
			 //header("location: index.php");
	  
			  echo"<script>window.open('index.php?addedCandidate=Candidate has been Added','_self')</script>";
			}
			//}
?>
<hr/>
<?php	 
	 }
	 



?>






      
	  
	  
      <!--  form column -->
      
        
        <h2 class="text-center"><b>Political Candidate info</b></h2>
        <form method="post" action="add_candidate.php" class="form-horizontal" role="form" enctype="multipart/form-data">
		
		  <label class="col-lg-3 control-label">Candidate Party:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="candidateParty" id="candidateParty" class="select2" style="width: 775px; height:37px;">
                    <option value="" >Choose Candidate's Party</option>
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
		
		
		
				  <label class="col-lg-3 control-label">Candidate Halqa:</label>
		<input type="hidden" name="" value=""/>
					<div class="form-group">
				<select name="candidateHalqa" id="candidateHalqa" class="select2" style="width: 775px; height:37px;">
                    <option value="" >Choose Candidate's Halqa</option>
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
            <label class="col-lg-3 control-label">Candidate First Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="candidateFirstName" name="candidateFirstName" type="text" placeholder="Candidate First Name" required>
            </div>
          </div>
          
		  <div class="form-group">
            <label class="col-lg-3 control-label">Candidate Last Name:</label>
            <div class="col-lg-8">
              <input class="form-control" id="candidateLastName" name="candidateLastName" type="text" placeholder="Candidate First Name" required>
            </div>
          </div>
		 
		  <div class="form-group">
		    <label class="col-md-3 control-label">Candidate Image:</label>
			<div class="col-md-8">
           <input type="file" class="form-control" id="candidateImage" name="candidateImage" required>
		   </div>
	      </div>
		 
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" id="submit" name="submit" class="btn btn-info">Add New Political Candidate</button>
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