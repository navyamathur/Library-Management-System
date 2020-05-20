<?php
session_start();
if(!isset($_SESSION["uname"])){
	header('Location:booksearch.php');
}
else{
$uname=$_SESSION["uname"];
$fullname=$_SESSION["name"];
}
if(isset($_REQUEST["logout"])){
	header('Location:index.php');
}
?>

<html>
<head>
<title>Books Record</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
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
<br>
<h2><center>Table of issued Books</h2>
<?php
require_once('config.inc');
$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");

$query="SELECT * FROM book WHERE emailID='$uname'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
?>
	<table>
		<tr>
			<th>Book ID</th>
			<th>Title</th>
			<th>Author</th>		
			<th>Publisher</th>
			<th>Category</th>
		</tr>
<?php
	while($row=mysqli_fetch_assoc($result)){
		$bookid=$row["BookID"];
		$title=$row["Title"];
		$author=$row["Author"];
		$publisher=$row["Publisher"];
		$category=$row["Category"];

?>
	<tr>
		<td><?php echo $bookid ?></td>
		<td><?php echo $title ?></td>
		<td><?php echo $author ?></td>
		<td><?php echo $publisher ?></td>
		<td><?php echo $category ?></td>
	</tr>
<?php
	}
?>
	</table>
<?php
}
else
	echo "No books issued to you";
?>
<a href="index.php"> Click Here </a> to go back to Home Page.<br>
</body>
</html>
