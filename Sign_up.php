

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script language="javascript">

function doFocus(textValue)
{
	if(textValue=="first")
	{	
		document.getElementById('td1').innerHTML="";
		document.getElementById('first').style.background='#ffffee';
	}	
	if(textValue=="last")
	{	
		document.getElementById('td2').innerHTML="";
		document.getElementById('last').style.background='#ffffee';
	}	
	if(textValue=="contact")
	{	
		document.getElementById('td3').innerHTML="";
		document.getElementById('contact').style.background='#ffffee';
	}	
	
	if(textValue=="email")
	{
			
		document.getElementById('td4').innerHTML="";
		document.getElementById('email').style.background='#ffffee';
	}	
	if(textValue=="address")
	{	
		document.getElementById('td5').innerHTML="";		//to remove sorry, you missed field
		document.getElementById('address').style.background='#ffffee';
		document.getElementBy
	}	
	if(textValue=="cnic")
	{	
		document.getElementById('td6').innerHTML="";
		document.getElementById('cnic').style.background='#ffffee';
	}
	if(textValue=="answer")
	{	
		document.getElementById('td16').innerHTML="";
		document.getElementById('answer').style.background='#ffffee';
	}
	if(textValue=="password")
	{	
		document.getElementById('td7').innerHTML="";
		document.getElementById('password').style.background='#ffffee';
	}	
	if(textValue=="rpassword")
	{	
		document.getElementById('td8').innerHTML="";
		document.getElementById('rpassword').style.background='#ffffee';
	}
}
function doBlur(textvalue)
{
	
	if(textValue=="first")
	{
		document.getElementById('first').style.background='#ffffdd';
	}
	if(textValue=="last")
	{
		document.getElementById('last').style.background='#ffffdd';
	}
	if(textValue=="contact")
	{
		document.getElementById('contact').style.background='#ffffdd';
	}
	if(textValue=="email")
	{
		document.getElementById('email').style.background='#ffffdd';
	}
	if(textValue=="address")
	{
		document.getElementById('address').style.background='#ffffdd';
	}
	if(textValue=="answer")
	{
		document.getElementById('answer').style.background='#ffffdd';
	}
	if(textValue=="password")
	{
		document.getElementById('password').style.background='#ffffdd';
	}
	if(textValue=="rpassword")
	{
		document.getElementById('rpassword').style.background='#ffffdd';
	}
}
function checkValidation()
{
	if(document.getElementById("first").value=="")
	{
		document.getElementById('td1').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("last").value=="")
	{
		document.getElementById('td2').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("contact").value=="")
	{
		document.getElementById('td3').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("answer").value=="")
	{
		document.getElementById('td16').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("email").value=="")
	{
		document.getElementById('td4').innerHTML="Sorry,you missed feild";
	}
	else
	validate_email();
	if(document.getElementById("address").value=="")
	{
		document.getElementById('td5').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("cnic").value=="")
	{
		document.getElementById('td6').innerHTML="Sorry,you missed feild";
	}
	else
	validate_cnic();
	if(document.getElementById("password").value=="")
	{
		document.getElementById('td7').innerHTML="Sorry,you missed feild";
	}
	if(document.getElementById("rpassword").value=="")
	{
		document.getElementById('td8').innerHTML="Sorry,you missed feild";
	}
	else
	if(document.getElementById("rpassword").value!=document.getElementById("password").value)
	{
		document.getElementById('td8').innerHTML="Retype your password";
	}
	if(!(document.getElementById("first").value=="" || document.getElementById("last").value=="" || document.getElementById("contact").value=="" || document.getElementById("email").value=="" || document.getElementById("address").value==""  || document.getElementById("answer").value==""  || document.getElementById("password").value=="" || document.getElementById("rpassword").value=="" || document.getElementById("rpassword").value!=document.getElementById("password").value || validate_email() || validate_cnic()))
	{
		document.getElementById('button2').setValue='Register';
		document.getElementById('form1').action='Sign_up.php';
		document.getElementById('form1').submit();
	}
	}

function validate_email() {
	   var reg_email= /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
   var email = document.forms['form1'].email.value;
if(reg_email.test(email) == false)
    {
		document.getElementById('td4').innerHTML="Invalid Email";

      return true;
   }
}
function validate_cnic() {
	   var reg_cnic= /^([0-9]{5})+\-+([0-9]{7})+\-+([0-9]{1})$/; //myown made expression ,expression should be / / and symbols should be started with / and +for concatenation
   var cnic = document.forms['form1'].cnic.value
if(reg_cnic.test(cnic) == false)
    {
		document.getElementById('td6').innerHTML="Invalid Cnic";
		return true;
   }
}
</script>

<meta name="author" content="Wink Hosting (www.winkhosting.com)" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<link rel="stylesheet" href="images/style.css" type="text/css" />
	<title>Voting System</title>
</head>
<body>
	<div id="page" align="center">
		<div id="header">
			<div id="companyname" align="left">Voting System</div>
			<div align="right" class="links_menu" id="menu"><a href="index.php">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> </div>
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
				  
	<form method="GET"  id="form1" name="form1">
		<table width="556">
        <tr><td></td><td>
		<?php if(isset($_GET['button2'])){ 
				$cnic=$_GET['cnic'];
				$con=mysqli_connect("localhost","root","");
		if(!$con)
			{
				die("conection error".mysqli_error());
			}
		mysqli_select_db($con,"vote");
		
		
	$q_sign_up=mysqli_query($con,"select name from user where cnic='$cnic'");
	$name=mysqli_fetch_array($q_sign_up,MYSQLI_NUM);
	if($name)
			{
				echo "<d style='color:green'>You have already registered.</d>";
			}
			else
			{
		$first=$_GET['first'];
		$last=$_GET['last'];
		$name=$first.$last;
		$address=$_GET['address'];
		$email=$_GET['email'];
		$password=$_GET['password'];
		$dob=$_GET['dob'];
		$religion=$_GET['religion'];

		$approved=0;
		//echo "insert into user(name,address,email,CNIC,password,dob,religion) values('".$name."','".$address."','".$email."','".$cnic."','".$password."','".$dob."','".$religion."')";
		$q_sign_up=mysqli_query($con,"insert into user(name,address,email,CNIC,password,dob,religion) values('".$name."','".$address."','".$email."','".$cnic."','".$password."','".$dob."','".$religion."')" );
		if(!$q_sign_up)
			{
			echo "<d style='color:red'>Quere Error</d>"; 
			}
			else
			echo "<d style='color:green'>Your form has been submited.</d>"; 
				
		

			}
				}  ?>
</td></tr>
			<tr>
				<td width="149">Name:</td>
				<td width="195"><input type='text' id='first' name='first' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td>
				<td width="196" id='td1' style="color:#CC3333"></td>
			</tr>
			<tr name="tr1"><td>Father Name:</td>
				<td><input type='text' id='last' name='last' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td><td id="td2" style=				"color:#CC3333"></td>
			</tr>

			<tr>
				<td width="149">Cnic:</td>
				<td width="195"><input type='text' id='cnic' name='cnic' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td>
				<td width="196" id='td6' style="color:#CC3333"></td>
			</tr>
			
            <tr name="tr1">
				<td>Gender:</td>
				<td>Male<input type='radio' id='gender' name='gender' checked="checked" onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/>Female<input type='radio' id='contact' name='contact' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td><td id="td3" style="color:#CC3333"></td>
			</tr>
			<tr name="tr1">
				<td>E-mail Address</td>
				<td><input type='text' id='email' name='email' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td><td id="td4" style="color:#CC3333"></td>
			</tr>
			<tr name="tr1">
				<td>Address:</td>
				<td><input type='text' id='address' name='address' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td><td id="td5" style="color:#CC3333"></td>
			</tr>
			<tr name="tr1">
				<td>Religion:</td>
				<td><input type='text' id='answer' name='religion' onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/></td>
<td id='td16' style="color:#CC3333"></td>
				</tr>
				<td>Date of Birth:</td>
				<td><select name="dob">
<option selected>Date
<option>1
<option>2
<option>3
<option>4
<option>5
<option>6
<option>7
<option>8
<option>9
<option>10
<option>11
<option>12
<option>13
<option>14
<option>15
<option>16
<option>17
<option>18
<option>19
<option>20
<option>21
<option>22
<option>23
<option>24
<option>25
<option>26
<option>27
<option>28
<option>29
<option>30
<option>31
</select>
<select name="requiredhobby">
<option selected>Month
<option>1
<option>2
<option>3
<option>4
<option>5
<option>6
<option>7
<option>8
<option>9
<option>10
<option>11
<option>12
</select>
<select name="requiredhobby">
<option selected>Year
<option>1970
<option>1971	
<option>1972
<option>1973
<option>1974
<option>1975
<option>1976
<option>1977
<option>1978
<option>1979
<option>1980
<option>1981
<option>1982
<option>1983
<option>1984	
<option>1985
<option>1986
<option>1987
<option>1988
<option>1989
<option>1990
<option>1991
<option>1992
</select>
</td>
<td id='td6' style="color:#CC3333"></td>
				</tr>
					
			<tr>
				<td>Password:</td>
				<td><input type='password' name='password' id='password'  onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/>
</td>
				<td id='td7' style="color:#CC3333"></td></tr>
			<tr>
			<tr>
				<td>Retype Password:</td>
				<td><input type='password' name='rpassword' id='rpassword'  onBlur="doBlur(this.id)" onFocus="doFocus(this.id)"/>
</td>
				<td id='td8' style="color:#CC3333"></td></tr>
			<tr>
				<td colspan='2'>
				</td>
			</tr>
			<tr>
				<td><input type='button' id='button1' name='button1' value='Register' onClick="checkValidation()"/><input type="hidden" name="button2" id="button2" value=""></td>

				</tr>
		</table>
	  
	  </form>
			</div>
	</div>
		<div class="footer"> <br />
		  <a href="index.php">Home</a> | <a href="#">About Us</a> | <a href="#">Products</a> | <a href="#">Our Services</a> | <a href="#">Contact Us</a> | Your Company Name. Designed by <a href="http://www.winkhosting.com/">Wink Hosting</a>. </div>
</body>
</html>
