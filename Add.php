<html>
<head>
<title>Admin Manager Add Books</title>
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
 input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 30%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
</style>
</head>
<body>
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
	<center><h3>Add Book Details here!<h3></center>
	<form action="" method="post" align="center">
		<label for="BookID"><b>Book ID</b></label>
		<input type="text" id="BookID" name="BookID" placeholder="Book ID"><br>
		<label for="title"><b>Title</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="title" name="title" placeholder="Book Title"><br>
		<label for="author"><b>Author</b></label>&nbsp;&nbsp;&nbsp;
		<input type="text" id="author" name="author" placeholder="Book Author"><br>
		<label for="publisher"><b>Publisher</b></label>&nbsp;&nbsp;
		<input type="text" id="publisher" name="publisher" placeholder="Book Publisher"><br>
		<label for="category"><b>Category</b></label>&nbsp;&nbsp;&nbsp;
		<input type="text" id="category" name="category" placeholder="Book category"><br>
		<label for="price"><b>Price</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="price" name="price" placeholder="Book Costing"><br>
		<input type="submit" value="Add Book">
	</form>
<?php
	require_once('config.inc');
	if(isset($_POST['BookID'])){
		$BookID=$_POST['BookID'];
		$title=$_POST['title'];
		$author=$_POST['author'];
		$publisher=$_POST['publisher'];
		$category=$_POST['category'];
		$price=$_POST['price'];

	$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
	$sql = "INSERT INTO Book (BookID, Title, Author,Publisher,Category, Price) VALUES ('$BookID', '$title', '$author', '$publisher', '$category', '$price')";
	if (mysqli_query($conn, $sql)) {
			echo "New record created successfully";
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