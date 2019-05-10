<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
if(isset($_POST) && !empty($_POST["add_it"]) && $_POST["add_it"] == "Add")
{       
$did=$_POST["branchid"];
$name=$_POST["branch"];
$sqlquery="INSERT into department (ddid,name) values('$did','$name')  ";



if ($conn->query($sqlquery) === TRUE) {
    header("location:department.php");
} else {
    echo "not added: " . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>department add</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div class="align">
        <h1>Add Department details</h1>
       
 <form name="add_form" method="post" action="">
        	Branch: <input type="text" name="branch" placeholder="Branch"><br><br>
            Branch id: <input type="text" name="branchid" placeholder="Branchid"><br><br>

        <input type="submit" name="add_it" value="Add">	
</form><br>
</div>
<a href='department.php'>Back</a>
</body>
</html>