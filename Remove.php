<html>
<head>
<title>Admin Manager Remove Book</title>
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
	<br>
	<center><h3>Delete Book here!<h3></center>
	<form action="" method="post" align="center">
		<label for="title"><b>Book Title</b></label>
		&nbsp;&nbsp;&nbsp;
		<input type="text" id="title" name="title" placeholder="Book Title">
	</form>
	<?php
	require_once('config.inc');
	if(isset($_POST['title'])){
		$title=$_POST['title'];
		
	$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
	$sql = "DELETE FROM Book WHERE Title='$title'";
	if (mysqli_query($conn, $sql)) {
			echo "Record deleted successfully";
	}
	else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}	
?>
</body>
</html>
<?php
	}
?>