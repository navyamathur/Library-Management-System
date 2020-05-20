<?php
require_once('config.inc');

if(isset($_POST['email'])){
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$enrol=$_POST['enrol'];
$batch=$_POST['batch'];
$email=$_POST['email'];
$password=$_POST['ps'];
$mobile=$_POST['mobile'];

$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
$query="INSERT INTO user VALUES('$fname', '$lname', '$email', '$enrol', '$batch', '$password', '$mobile')";
mysqli_query($conn, $query) or die(mysqli_error($conn));

echo "user registered successfully <br>";
echo "<a href=index.php>Click Here</a> to go home page.";
}
else
{
?>
<html>
<head>
<title>User Registration Form</title>
<style type="text/css">
h3
{
	font-family: Calibri; 
	font-size: 22pt; 
	font-style: normal; 
	font-weight: bold; 
	color:#0033cc;
text-align: center;
 text-decoration: underline 
 }
table{
	font-family: Calibri; 
	color:black; 
	font-size: 14pt; 
	font-style: bold;
text-align:; 
background-color: #b3e6ff;
 border-collapse: collapse;
 border: 2px state blue}
table.inner{border: 0px}
.button {
    background-color: #b3e6ff;
    border: white;
    color: black;
    padding: 22px 32px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
 }
</style>
</head>
<body >
<i><b><center><h3>USER REGISTRATION FORM</h3></center></b></i>
<a href="index.php" class="button"><u>Back to Home</u></a>
<form action="registration.php" method="POST">
<table align="center" cellpadding = "10">
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname" maxlength="50" required/>
(max 30 characters a-z and A-Z)
</td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr> 
<tr>
<td>ENROLLMENT NUMBER</td>
<td><input type="text" name="enrol" maxlength="100" required/></td>
</tr>
<tr>
<td>BATCH</td>
<td><input type="text" name="batch" maxlength="100" /></td>
</tr>
<tr>
<td>EMAIL ID/USER ID</td>
<td><input type="text" name="email" maxlength="100" required/></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="ps" maxlength="10" required/></td>
</tr>
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="number" name="mobile" maxlength="10" />
(10 digit number)
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit"  name="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table> 
</form>
</body>
</html>
<?php
}
?>