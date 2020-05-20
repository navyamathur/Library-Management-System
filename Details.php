<html>
<head>
<title>Admin Manager Users Details</title>
<style>
div
{	
	height: 80px;
    	width: 100%;
	background-color: skyblue;	
}
.button {
    background-color: yellow;
    border: white;
    color: black;
    padding: 22px 32px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
 }
 table {
    border-collapse: collapse;
    width: 80%;
}

th, td {
    text-align: center;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color:#0099ff;
    color: white;
}
</style>
</head>
<body>
<br><br>
<a href="index.php" class="button"><u>Back to Home</u></a>
<center><img src="12.jpg" width="650" height="120"></center>
<br><br>
<div>
<br><br><center>
<a href="Add.php" class="button">Add Book</a>
<a href="Remove.php" class="button">Remove Book</a>
<a href="View.php" class="button">View Books</a>
<a href="Details.php" class="button">Users Details</a>
</center>
</div>
<div>
<br><br><center>
<a href="Issue.php" class="button">Issue Book</a>
<a href="Return.php" class="button">Return Book</a> 
<a href="ViewIssue.php" class="button">View Issued Books</a>
</center>
</div>
<div>
<br><br><center>
<a href="index.php" class="button">Log Out</a>
</center>
</div>
<br>
<h2><center>List of all Library Users</center></h2>
<center>
<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email Id</th>
		<th>Enrollment No.</th>		
		<th>Batch</th>
		<th>Password</th>
		<th>Mobile No.</th>		
	</tr>

<?php
require_once('config.inc');
$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
$sql="SELECT * FROM user";
$result=mysqli_query($conn,$sql);
if($result === FALSE) { 
    die(mysql_error()); 
}
while($row=mysqli_fetch_assoc($result)){
			$firstname=$row["firstname"];
			$lastname=$row["lastname"];
			$email=$row["email"];
			$enrollment=$row["enrollment"];
			$batch=$row["batch"];
			$password=$row["password"];
			$mobile=$row["mobile"];
?>
	<tr>
		<td><?php echo $firstname ?></td>
		<td><?php echo $lastname ?></td>
		<td><?php echo $email ?></td>
		<td><?php echo $enrollment ?></td>
		<td><?php echo $batch ?></td>
		<td><?php echo $password ?></td>
		<td><?php echo $mobile ?></td>			
	</tr>
<?php
}
?>
</table>
</center>
</body>
</html>