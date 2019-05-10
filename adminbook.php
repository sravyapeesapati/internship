<!DOCTYPE html>
<html>
<head>
	<title>books</title>
	<style type="text/css">
		span
		{
			font-family: serif;
			font-style: inherit;
			font-weight: bold;
			color:blue;
		}
		/*div
		{
			position: absolute;
			top: 30%;
			left:40%;
		}*/
		h1
		{
			font-family: serif;
			font-style: inherit;
			text-decoration: underline;
		}
		#new
		{
			font-family: serif;
			font-style: inherit;
				font-size: 15px;
		}
		a
		{
           color:red;
		}

	</style>
</head>
<body>
	<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");

 $sqlquery="SELECT book.bid,book.yyid,book.deptid,book.dname,book.name,book.author from book join department on book.dname=department.name where book.dname='".$_SESSION['id2']."'" ;

$result=$conn->query($sqlquery);
?>
<h1>BOOK</h1>
<a href="add.php">Add</a><br><br>
<?php
while($row= $result->fetch_assoc())
{
//print_r($row);

	?><div id="new">
	<span>Name of the book: </span><?php echo  $row['name'];?><br>
<span>Author: </span><?php echo   $row['author'];?><br>
<a href="edit.php?bid=<?php echo $row['bid'];?>">Edit</a>&nbsp;
<a href="delete.php?bid=<?php echo $row['bid'];?>">Delete</a>
<br><br>
</div>
<?php
}
?>
<br>
<a href="department.php">Back</a>
</body>
</html>