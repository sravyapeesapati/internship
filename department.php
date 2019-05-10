<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
$departments = mysqli_query($conn,"SELECT ddid,name FROM department");
$query=mysqli_query($conn, "SELECT bid,yyid,deptid,dname,author from book ");
$result=mysqli_fetch_assoc($query)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Department</title>
	<style type="text/css">
		.look
		{
			text-align: center;
		}
		h1
		{
			font-family: serif;
			font-style: inherit;
			text-align: center;
			text-decoration: underline;
		}
		.button
{
	width: 10%;
	align-items: center;
	background: none;
	border: 2px solid;
	color:black;
	padding:5px;
	font-size: 20px;
	margin:5px;
}
	</style>
</head>
<body>
<div class="look">
	<form action="connect3.php" method="post">	
	<h1>Admin page</h1>
	<!--<input class="button" type="submit" name="dept" value="CSE">
	<input class="button" type="submit" name="dept" value="ECE">
	<input class="button" type="submit" name="dept" value="EEE">
	<br><br>-->
	<select name="dept">
	<?php	while($depts = mysqli_fetch_assoc($departments))
	{
	?>
	<option value="<?php echo $depts["name"];?>" <?php if($depts["ddid"] == $result["deptid"]){echo "selected";}?>><?php echo $depts["name"];?></option>
	<?php
	}
	?>
	</select><br><br>
	<input type="submit" name="button" value="View Books"><br><br>
	<a href="depart_add.php">Add Departments</a><br><br>
	
	<!--<a href="depart_delete.php">Delete</a>
	<a href="depart_edit.php">Edit</a>-->
</form>
<a href="detaildepart.php">List of departments</a><br><br>
<a href="logout.php">logout</a>

</div>
</body>
</html>