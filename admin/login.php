<?php
 session_start();

?>


<html>
<head>


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Admin Voting System</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div align="right" class="links_menu" id="menu"><a href="#">Home</a> | <a href="#">Admin</a> | <a href="#">Public</a> | <a href="#">Election Comission</a> | <a href="#">Contact Us</a> </div>
</div>
		<br />
<br/>
<br/>
<br/>




<form action="login.php" method="post">

<table width="400" align="center" border="20">

<tr>
<td align="center" colspan="5" bgcolor="gray"><h1>Admin Login</h1></td>
</tr>


<tr>
<td align="right">Admin Name:</td>
<td><input type="text" name="admin_name"></td>

</tr>


<tr>
<td align="right">Admin Password:</td>
<td><input type="password" name="admin_pass"></td>

</tr>

<tr>
<td align="center" colspan="5"><input type="submit" name="login" value="Login"></td>
</tr>


</table>


</form>
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
<br />
<br />
<br />
<br />
<br />

</body>

</html>

<?php
include("../connect.php"); 
if(isset($_POST['login'])){
	
	$admin_name = ($_POST['admin_name']);
	$admin_password = ($_POST['admin_pass']);
	
	//$encrypt = md5($admin_password);
	
	$login_query = "select * from admin_login where admin_name='$admin_name' AND admin_password='$admin_password'";
	
	$run = mysql_query($login_query);
	
	if(mysql_num_rows($run)>0){
		
		 $_SESSION['admin_name']=$admin_name;
		
		echo "<script>window.open('index.php','_self')</script>";
		
	}
	else{
		
		echo "<script>alert('Admin Name or Password is incorrect')</script>";
		
	}
	
}



?>
