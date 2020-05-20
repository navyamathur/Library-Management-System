<?php
session_start();
require_once('config.inc');
if(isset($_POST['login'])){
	$aname=$_POST['aname'];
	$pass=$_POST['pass'];
	
	$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");

	$query="SELECT * FROM admin WHERE email='.$aname.' AND pwdd='.$pass.'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	if(mysqli_num_rows($result)>0){
		header('Location:manage.php');
	}
	else{
		echo "Invalid admin username or password <br>";
		echo "<a href=index.php>Click Here</a> to go home page.";
	}
}
else
{
?>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 70%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 60%;
}
button:hover {
    opacity: 0.8;
}
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}
img.avatar {
    width: 20%;
    border-radius: 20%;
}
.container {
    padding: 16px;
}
span.psw {
    float: right;
    padding-top: 16px;
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<h2><center>Admin Login Panel</center></h2>
<form action="manage.php" method="post">
  <div class="imgcontainer">
    <img src="9.jpg" alt=ímage" class="avatar" width=80 height=200>
  </div>
  <div class="container" align="center">
    <label><b>Admin ID</b></label>
    <input type="text" placeholder="Enter Username" name="aname" required><br>
    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>       
    <button type="submit">Login</button>
     </div>
  <div class="container" style="background-color:#f1f1f1" align="center">
    <button type="button" class="cancelbtn"><a href="index.php">Cancel</a></button>
  </div>
</form>
</body>
</html>
<?php
}
?>