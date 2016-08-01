<?php
session_start();
?>
<script language="javascript" type="text/javascript">
<!--
 window.resizeTo(600,400);
-->
</script>
<?php
	$vote=$_POST["rate"];
	$file="candidates/$vote" . ".txt";
	$fh=fopen($file,'r') or die ('Failed to read file');
	$count=fread($fh,filesize($file)) or $count=1;
	fclose($fh);
	$count++;
	
	$fh=fopen($file,'w') or die('could not open file');
	fwrite($fh,$count) or die ('could not write');
	fclose($fh);
?>


<?php
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
?>




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
			<div align="right" class="links_menu" id="menu"><a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> </div>
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
				<br />
			</div>
			<div id="contenttext">
				  
                
   

<br>
Thank you <?php $con=mysqli_connect("localhost","root","");
		if(!$con)
			{
				die("conection error".mysql_error());
			}
		mysqli_select_db($con,"vote");
		$q_sign_up=mysqli_query($con,"select name from user where approved=1 && cnic='".$_SESSION["a"]."'");
		if(mysqli_num_rows($q_sign_up)>0)
			header("location:index.php");
		$q_sign_up=mysqli_query($con,"update user set approved=1 where cnic='".$_SESSION["a"]."'");
		if(!$q_sign_up)
			{
				die("quere error".mysql_error());
			}
	$q_sign_up=mysqli_query($con,"select name from user where cnic='".$_SESSION["a"]."'");
	$name=mysqli_fetch_array($q_sign_up);
	echo "<caption><b>'$name[0]'</b></caption>";
		if(!$q_sign_up)
			{
				//die("quere error".mysql_error());
			}
	?> to cast your vote<br>
<hr>
To close this window click Close window button.<br>
To View the Rating results click Results button.<br>
<hr>
<br>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="javascript:window.close();">Close window</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="index.php">Safe Exit</a><br>
<table border="1" width="100%">
<caption><b>Voting Result:<br>Total Votes: </b> <?php $total= $result1 + $result2 + $result3 + $result4; echo "$total"; ?><br> </caption>
<tr><th width="50%">Rate:</th><th width="50%">Votes</th></tr>
<tr><td width="50%" align="center">Pakistan Tehreek Insaaf.</td><td width="50%" align="center"><?php echo "$result1"; ?></tr>
<tr><td width="50%" align="center">Pakistan People Party</td><td width="50%" align="center"><?php echo "$result2"; ?></td></tr>
<tr><td width="50%" align="center">Q league</td><td width="50%" align="center"><?php echo "$result3"; ?></td></tr>
<tr><td width="50%" align="center">Nawaz Shreef(pmln)</td><td width="50%" align="center"><?php echo "$result4"; ?></td></tr>
</table>

			<br />
			<br />
		  </div>
	</div>
		<div class="footer"> <br />
		  <a href="#">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | Your Company Name. Designed by <a href="http://www.winkhosting.com/">Wink Hosting</a>. </div>
</body>
</html>
