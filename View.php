<html>
<head>
<title>Admin Manager All Books</title>
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
<br>
<h2><center>List of all books in Library</center></h2>
<center>
<table>
	<tr>
		<th>Book ID</th>
		<th>Title</th>
		<th>Author</th>
		<th>Publisher</th>		
		<th>Price</th>
		<th>Category</th>			
	</tr>
<?php
require_once('config.inc');
$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
$sql="SELECT BookID, Title, Author, Publisher, Category, Price FROM book";
$result=mysqli_query($conn,$sql);
if($result === FALSE) { 
    die(mysql_error()); 
}
		while($row=mysqli_fetch_assoc($result)){
			$BookID=$row["BookID"];
			$Title=$row["Title"];
			$Author=$row["Author"];
			$Publisher=$row["Publisher"];
			$Category=$row["Category"];
			$Price=$row["Price"];
?>
	<tr>
		<td><?php echo $BookID ?></td>
		<td><?php echo $Title ?></td>
		<td><?php echo $Author ?></td>
		<td><?php echo $Publisher ?></td>
		<td><?php echo $Price ?></td>
		<td><?php echo $Category ?></td>
					
	</tr>
<?php
	}
?>
</table>
</center>
</body>
</html>


