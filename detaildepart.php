<!DOCTYPE html>
<html>
<head>
	<title>details of departments</title>
</head>
<body><?php
session_start();
$conn=mysqli_connect("localhost","root","","library");

 $sqlquery="SELECT ddid,name from department" ;

$result=$conn->query($sqlquery);
?>
<h1>DEPARMENTS</h1>
<a href="depart_add.php">Add</a><br><br>
<?php
while($row= $result->fetch_assoc())
{
//print_r($row);

	?><div id="new">
	<span> department: </span><?php echo  $row['name'];?><br>
<span>department id: </span><?php echo   $row['ddid'];?><br>
<a href="depart_edit.php?ddid=<?php echo $row['ddid'];?>">Edit</a>&nbsp;
<a href="depart_delete.php?ddid=<?php echo $row['ddid'];?>">Delete</a>
<br><br>
</div>
<?php
}
?>
<br>
<a href='department.php'>Back</a>
</body>
</html>