<html>
<head>
<title>Admin Manager Return</title>
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
<h2><center>Return Book</center></h2>
	<form action="" method="post" align="center">
		<label for="title"><b>Title</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="title" name="title" placeholder="Book Title"><br> <br>
		<input type="submit" value="Return">

	</form>
<?php
	require_once('config.inc');
	if(isset($_POST['title'])){
		$title=$_POST['title'];
		
	$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
	$sql = "UPDATE Book SET emailID=NULL WHERE title='$title'";
	
	if (mysqli_query($conn, $sql)) {
			echo "Book returned successfully";
	}
	else {
			echo "Error ";
		}	
?>
</body>
</html>
<?php
	}
?>


