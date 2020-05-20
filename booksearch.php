<html>
<head>
<title>Books Record</title>
<style>
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
<br>	
<h2><u><center>Table of all Books</center></u></h2>
<br>
<?php
require_once('config.inc');
$conn=mysqli_connect($dbhost, $dbusername, $dbpassword, $db) or die("cannot connect server");
?>
<form action="" method="POST">
<table  align="center" cellpadding = "10">
<tr>
<td><b>Book Search</b></td>
<td><input type="text" name="book_search"></td>
</tr>
</table>
</form>
<?php
if(isset($_POST['book_search'])){
$book_search=$_POST['book_search'];
$query="SELECT Title,Publisher,Author,Price,Category FROM book WHERE title LIKE '$book_search'";
$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
if(mysqli_num_rows($result)>0){
	$row=mysqli_fetch_assoc($result);
	$Title=$row["Title"];
	$Author=$row["Author"];
	$Publisher=$row["Publisher"];
	$Price=$row["Price"];
	$Category=$row["Category"];
?>
	<center>
	<table>
		<tr>
			<th>Title</th>
			<th>Author</th>
			<th>Publisher</th>		
			<th>Price</th>
			<th>Category</th>			
		</tr>

	<tr>
		<td><?php echo $Title ?></td>
		<td><?php echo $Author ?></td>
		<td><?php echo $Publisher ?></td>
		<td><?php echo $Price ?></td>
		<td><?php echo $Category ?></td>
					
	</tr>
<?php
	}
}
?>
	</table>
	</center>
</body>
</html>
