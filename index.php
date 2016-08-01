<?php session_start(); ?>
<?php include ("connect.php");?>


<?php if(isset($_GET['button2'])) 
{
	session_start();
	$_SESSION['a']=$_GET['cnic'];	
}         
?>


<?php
/*	
	$file='Candidates/excellent.txt';
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
	*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
	<script language="javascript">
function doFocus(textValue)
{
	if(textValue=="cnic")
	{	
		document.getElementById('td1').innerHTML="";
		document.getElementById('cnic').style.background='#ffffee';
	}	
	
	if(textValue=="password1")
	{
			
		document.getElementById('td2').innerHTML="";
		document.getElementById('password1').style.background='#ffffee';
	}	
	
}
function doBlur(textValue)
{
	if(textValue=="name")
	{
		document.getElementById('name').style.background='#ffffdd';
	}
	if(textValue=="password1")
	{
		document.getElementById('password1').style.background='#ffffdd';
	}
	}
function checkValidation()
{
	if(document.getElementById("cnic").value=="")
	{
		document.getElementById('td1').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("password1").value=="")
	{
		document.getElementById('td2').innerHTML="Sorry,you missed feild";
	}
	if(!(document.getElementById("cnic").value=="" || document.getElementById("password1").value==""))
	{
		document.getElementById('button2').setValue='Register';
		document.getElementById('form1').action='index.php';
		document.getElementById('form1').submit();
	}
}

 
</script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Voting System</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div align="right" class="links_menu" id="menu"><a href="#">Home</a> | <a href="admin/login.php">Admin</a> | <a href="#">Public</a> | <a href="#">Election Comission</a> | <a href="#">Contact Us</a> </div>
</div>
		<br />
		<div id="content">
			<div id="leftpanel">
				<div class="table_top">
					<div align="center"><span class="title_panel">News</span> </div>
				</div>
				<div class="table_content">
					<div class="table_text">
						<span class="news_date">Election Date Announced</span> <br />
						<span class="news_text">Election Comission of Pakistan has announced the date of parliminary elections</span><br />
						<span class="news_more"><a href="#">Read More</a></span><br /><br />
						<span class="news_date">New Staff</span> <br />
						<span class="news_text">Election Comission has orderd to make new staff for the election</span><br />
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
						<span class="news_more"><a href="#">Government of Pakistan </a></span><br />
						<span class="news_more"><a href="#">Election Parties</a></span><br />
						<span class="news_more"><a href="#">The Elections</a></span><br />
						<span class="news_more"><a href="#">Mobile Info</a></span><br />
						<span class="news_more"><a href="#">Voting List</a></span><br />
					</div>
				</div>
				<div class="table_bottom">
					<img src="images/table_bottom.jpg" width="204" height="23" border="0" alt="" />
				</div>
				<br />
			</div>
			<div id="contenttext">
				  
                
   

<form method="post" action="index.php"  id="form1" >
  <table width="591">
  <tr><td><span class="title_blue">LogIn</span>
              </td></tr>
<tr name="tr1"><td width="100" height="26">Cnic:</td>
<td width="242"><input type='text' id='cnic' name='cnic'  onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td><td width="160" id="td1" style="color:#CC3333"></td></tr>

<tr><td>Password:</td>
<td>
<input type='password' name='password1' id='password1'  onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td>
<td id='td2' style="color:#CC3333"></td></tr>
<tr>
<td colspan='2'>
</td>
</tr>
<tr>
<td></td>
<td><input type="hidden" name="button2" id="button2" value="">
  <input type='button' id='button1' name='button1' value='VoteIn' class="text-small" onClick="checkValidation()"/>  <?php
if(isset($_POST['button2'])) 
{
		$cnic=$_POST['cnic'];
		$password=$_POST['password1'];
		$q_user=mysql_query("select * from user where cnic='$cnic' and password='$password'");
		
		if(mysql_num_rows($q_user)>0){
		
		//creating session of user name's input field.
		$_SESSION['cnic']=$cnic;
		echo "<script>window.open('vote.php','_self')</script>";
	}
	else{
		echo'Username or password is incorrect! ';
	}
	
}
		
		
/*		
		
		if(!$q_user)
			{
				//die("quere error".mysql_error());
			}
		$r=mysql_fetch_array($q_user,MYSQLI_NUM);
		if($r)
			{
			?>
				<script type="text/javascript">
					window.location.href="Vote.php";
					
				</script>
			<?php
			}
		else
			{
				$q_user=mysqli_query($con,"select * from user where cnic='".$a."' and password='".$b."' and approved=1");
		//echo "select * from signin where name='$a' and password='$b'";
		if(!$q_user)
			{
				//die("quere error".mysql_error());
			}
		$r=mysqli_fetch_array($q_user,MYSQLI_NUM);
		if($r)
			{
				echo 'You Have Casted Your Vote';
			}
			else
				echo "Password Not Match";// if password not match
			}

			}
*/
?></td>
</tr>
  
<tr>

<td></td><td>
<!--<a href="Sign_up.php">
<input type='button' id='button1' value='Create Your Vote' name='button1' class="text-small1"/></a>--></td></tr>
</table>
<?php
/*

$sql="select SUM(vote_count) AS count2 From voted where party_id = '2'";
			$qry = mysql_query($sql);
			$rec = mysql_fetch_array($qry);
			 $value2=$rec ['count2'];
?>
<?php
$sql="select SUM(vote_count) AS count3 From voted where party_id = '3'";
			$qry = mysql_query($sql);
			$rec = mysql_fetch_array($qry);
			 $value3=$rec ['count3'];
?>
<?php
$sql="select SUM(vote_count) AS count4 From voted where party_id = '4'";
			$qry = mysql_query($sql);
			$rec = mysql_fetch_array($qry);
			 $value4=$rec ['count4'];
?>
<?php
$sql="select SUM(vote_count) AS count5 From voted where party_id = '5'";
			$qry = mysql_query($sql);
			$rec = mysql_fetch_array($qry);
			 $value5=$rec ['count5'];

			 */?>
<?php

//$total = ($value1 + $value2 + $value3 + $value4 + $value5);

?>
</form>
<br/>
<table border="1" width="100%">

<tr><th width="50%">Party Name:</th><th width="50%">Votes</th></tr>
<?php
$total=0;
$query = mysql_query("SELECT * FROM party");
while ($row=mysql_fetch_array($query)){
	
	$partyId = $row['party_id'];
	$partyName = $row['party_name'];


$sql="select SUM(vote_count) AS count From voted where party_id = '$partyId'";
			$qry = mysql_query($sql);
			$rec = mysql_fetch_array($qry);
			 $value=$rec ['count'];
			 $total = $total + $value;
?>

<tr>
<td width="50%" align="center"><?php echo $partyName; ?>.</td>
<td width="50%" align="center"><?php echo $value; ?>
</td>
</tr>
<?php } ?>
<tr>
<td width="50%" align="center">Total Votes:</td>
<td width="50%" align="center"><?php echo $total; ?>.</td>
</tr>
</table>

			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
			<br />
		  </div>
	</div>
		<div class="footer"> <br />
		  <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | Your Company Name. Designed by <a href="http://www.winkhosting.com/">Wink Hosting</a>. </div>
</body>
</html>
