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

	</style>
</head>
<body>
<?php

session_start();
$conn=mysqli_connect("localhost","root","","library");
$sqlquery="SELECT book.yyid,book.deptid,book.name,book.author from book join year on book.yyid=year.yid join department on book.deptid=department.ddid where book.yyid='".$_SESSION['id1']."' and book.deptid='".$_SESSION['id']."'" ;
$result=$conn->query($sqlquery);
?><h1>BOOK</h1>
<?php
while($row= $result->fetch_assoc())
{?>
	<div id="new">
<span>Name of the book: </span><?php echo  $row['name'];?><br>
<span>Author: </span><?php echo   $row['author'];?><br>
<br>
</div>
<?php
}
?>
<br>
<a href="logout.php">Logout</a>
</body>
</html>