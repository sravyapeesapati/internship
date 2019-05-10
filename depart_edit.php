<?php
session_start();
$value=$_GET['ddid'];

$conn=mysqli_connect("localhost","root","","library");
$departments = mysqli_query($conn,"SELECT ddid,name FROM department where ddid='$value'");
$result=mysqli_fetch_assoc($departments);
if(isset($_POST) && !empty($_POST["update_btn"]) && $_POST["update_btn"] == "Update")
{	
$dname=$_POST["dname"];
$id=$_POST["did"];
$sqlquery="UPDATE department SET name='$dname', ddid='$id' WHERE ddid='$value'  ";
$query="UPDATE book set dname='$dname',deptid='$id' where deptid='$value'";
if (($conn->query($sqlquery) && $conn->query($query))==TRUE) {
    //echo "Record updated successfully";
    header("location:detaildepart.php");
} else {
    echo "not updated: " . $conn->error;
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>
</head>
<body>
<form name="edit_form" method="post" action="">

	department:<input type="text" name="dname" id="dname" value="<?php echo $result["name"];?>"><br><br>
	id:<input type="text" name="did" id="did" value="<?php echo $result["ddid"];?>"><br><br>
	<input type="submit" name="update_btn" value="Update">
</form>
</body>
</html>