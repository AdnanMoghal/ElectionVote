<?php session_start(); ?>
<?php include ("connect.php");?>

<?php

if(!isset($_SESSION['cnic']))	{
	
	header("location: index.php");
}
else{
	
?>

<?php
$userCnic=$_SESSION['cnic'];


$query = mysql_query("SELECT * FROM user where cnic='$userCnic' ");

while ($row=mysql_fetch_array($query)){
	
	 $name = $row['name'];
	 $cnic = $row['cnic'];
	 $phone = $row['phone'];
	$userId = $row['user_id'];
	$halqaId = $row['halqa_id'];
    $address = $row['address'];
	$dob = $row['dob'];
	$password = $row['password'];
	$religion = $row['religion'];
	$email = $row['email'];

}
?>
<?php
$query1 = mysql_query("SELECT * FROM halqa where halqa_id='$halqaId' ");
while ($row=mysql_fetch_array($query1)){
	$halqaId1 = $row['halqa_id'];
	$halqaName = $row['halqa_name'];

}
?>

<?php

/*	$file='Candidates/excellent.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result1=fread($fh,filesize($file));
	fclose($fh);

	$file='Candidates/good.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result2=fread($fh,filesize($file));
	fclose($fh);

	$file='Candidates/notbad.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result3=fread($fh,filesize($file));
	fclose($fh);

	$file='Candidates/bad.txt';
	$fh=fopen($file,'r') or die ('Failed to read file');
	$result4=fread($fh,filesize($file));
	fclose($fh);

	*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Voting System</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div id="companyname" align="left">Voting System</div>
			<div align="right" class="links_menu" id="menu"><a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="logout.php">Logout</a> </div>
		</div>
		<br />
		<div id="content">
			<div id="leftpanel">
				<div class="table_top">
					<div align="center"><span class="title_panel">News</span> </div>
				</div>
				<div class="table_content">
					<div class="table_text">
						<span class="news_date">October 16, 2006</span> <br />
						<span class="news_text">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
						<span class="news_more"><a href="#">Read More</a></span><br /><br />
						<span class="news_date">September 27, 2006</span> <br />
						<span class="news_text">Curabitur arcu tellus, suscipit in, aliquam eget, ultricies id, sapien. Nam est.</span><br />
						<span class="news_more"><a href="#">Read More</a></span>				
					</div>
				</div>
				<div class="table_bottom">
					<img src="images/table_bottom.jpg" width="204" height="23" border="0" alt="" />
				</div>
				<br />
				<div class="table_top">
					<span class="title_panel">Links</span>
				</div>
				<div class="table_content">
					<div class="table_text">
						<span class="news_more"><a href="http://www.winkhosting.com">Wink Hosting </a></span><br />
						<span class="news_more"><a href="http://www.google.com">Google </a></span><br />
						<span class="news_more"><a href="http://www.oswd.org">OSWD</a></span><br />
						<span class="news_more"><a href="http://www.yahoo.com">Yahoo</a></span><br />
						<span class="news_more"><a href="http://www.amazon.com">Amazon</a></span><br />
					</div>
				</div>
				<div class="table_bottom">
					<img src="images/table_bottom.jpg" width="204" height="23" border="0" alt="" />
				</div>
			</div>
			
            <h3>Welcome <font color="red"><?php echo $name; ?></font> of</h3>
			<h1>Halqa <?php echo $halqaName; ?> </h1>
			<div id="contenttext">
				  
<?php
$query3 = mysql_query("SELECT * FROM party ");
while ($row=mysql_fetch_array($query3)){
	$partyId = $row['party_id'];
	$partyName = $row['party_name'];



$query2 = mysql_query("SELECT * FROM candidate where halqa_id='$halqaId1' AND party_id='$partyId' ");
while ($row=mysql_fetch_array($query2)){
    $candidateId = $row['candidate_id'];
	$partyId = $row['party_id'];
	$halqaId2 = $row['halqa_id'];
	$candidateFirstName = $row['candidate_fname'];
	$candidateLastName = $row['candidate_lname'];
	$candidateImage = $row['candidate_image'];


?>
                
   
<br/>
<fieldset style="width:70%; height:170px;"><legend>Candidate Of <?php echo $partyName; ?>.</legend>
<form id="pmlnForm" method="post" action="vote.php">
<?php echo $candidateFirstName.'&nbsp'.$candidateLastName; ?> 
&nbsp<img src="candidateImages/<?php echo $candidateImage; ?>"   width="120" height="120"><br/>
<input type="hidden" id="partyId" name="partyId" value="<?php echo $partyId; ?>">
<input type="hidden" id="partyName" name="partyName" value="<?php echo $partyName; ?>">
<p align="center">  <input type="submit"  name="submit" value="Vote to <?php echo $partyName; ?>"></p>
</form>
</fieldset>
<?php }} ?>

<br/>
<br/>
			
<?php

if(isset($_POST['submit'])){
	$partyId = $_POST['partyId'];
	//$candidateId = $_POST['update_id'];
	$query3 = mysql_query("SELECT * FROM voted where user_id='$userId' ");
	if(mysql_num_rows($query3)>0){
	echo "<script>alert('You already cast your Vote')</script>";
	
}
else{
   
  $query4 = mysql_query("INSERT INTO voted VALUES ('','$userId','$halqaId','$partyId','$candidateId','1')") or die(mysql_error());
  if($query2){
				
				echo "<script>alert('Congratulations! Your Vote Successfully Casted!')</script>";

  }
}
}

?>

<?php
/*
if(isset($_POST['submitPpp'])){
	
	$query3 = mysql_query("SELECT * FROM voted where user_id='$userId' ");
	if(mysql_num_rows($query3)>0){
	echo "<script>alert('You already cast your Vote')</script>";
	
}
else{
   
  $query4 = mysql_query("INSERT INTO voted VALUES ('','$userId','$halqaId','2','$candidateId','1')") or die(mysql_error());
  if($query2){
				
				echo'<h1>Vote Casted</h1>';

  }
}
}

?>
<?php

if(isset($_POST['submitPti'])){
	
	$query3 = mysql_query("SELECT * FROM voted where user_id='$userId' ");
	if(mysql_num_rows($query3)>0){
	echo "<script>alert('You already cast your Vote')</script>";
	
}
else{
   
  $query4 = mysql_query("INSERT INTO voted VALUES ('','$userId','$halqaId','3','$candidateId','1')") or die(mysql_error());
  if($query2){
				
				echo'<h1>Vote Casted</h1>';

  }
}
}

?>
<?php

if(isset($_POST['submitJui'])){
	
	$query3 = mysql_query("SELECT * FROM voted where user_id='$userId' ");
	if(mysql_num_rows($query3)>0){
	echo "<script>alert('You already cast your Vote')</script>";
	
}
else{
   
  $query4 = mysql_query("INSERT INTO voted VALUES ('','$userId','$halqaId','4','$candidateId','1')") or die(mysql_error());
  if($query2){
				
				echo'<h1>Vote Casted</h1>';

  }
}
}

?>
<?php

if(isset($_POST['submitPmlq'])){
	
	$query3 = mysql_query("SELECT * FROM voted where user_id='$userId' ");
	if(mysql_num_rows($query3)>0){
	echo "<script>alert('You already cast your Vote')</script>";
	
}
else{
   
  $query4 = mysql_query("INSERT INTO voted VALUES ('','$userId','$halqaId','5','$candidateId','1')") or die(mysql_error());
  if($query2){
				
				echo'<h1>Vote Casted</h1>';

  }
}
}
*/
?>





		  
	</div>
		<div class="footer"> <br />
		  <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | Your Company Name. Designed by <a href="http://www.winkhosting.com/">Wink Hosting</a>. </div>
</body>
</html>

<?php } ?>
<script>
$('pmlnForm').on('submit',function(e){
e.preventDefault();

var r = confirm("sure you want to save");
if (r == true) {
   $()'myform').submit();
}
else {
    alert("You pressed Cancel!");
}
})
</script>
