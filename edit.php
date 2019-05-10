<?php
session_start();
$bookid=$_GET['bid'];

$conn=mysqli_connect("localhost","root","","library");
$query=mysqli_query($conn, "SELECT bid,yyid,deptid,name,author from book where bid='$bookid'");
$result=mysqli_fetch_assoc($query);

$departments = mysqli_query($conn,"SELECT ddid,name FROM department");
$years=mysqli_query($conn,"SELECT yid,yearst from year");

//if(isset($_POST["update_btn"]) && $_POST["update_btn"])
if(isset($_POST) && !empty($_POST["update_btn"]) && $_POST["update_btn"] == "Update")
{	
$dname=$_POST["department"];
$name=$_POST["bname"];
$author=$_POST["bauthor"];
$sqlquery="UPDATE book SET dname='$dname',name='$name',author='$author'WHERE bid='$bookid'  ";
if ($conn->query($sqlquery) === TRUE) {
    //echo "Record updated successfully";
    header("location:adminbook.php");
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

	Year:<select name="year" id="year">
		<?php 
			while($year=mysqli_fetch_assoc($years))  {
				//print_r($year);
		?>
		<option value="<?php echo $year["yid"];?>"<?php if($year["yid"]==$result["yyid"]){echo "selected";}?>><?php echo 
		$year["yearst"];?></option><?php
		}?>
	</select><br><br>
	Department:<select name="department" id="department">
	<?php
	while($depts = mysqli_fetch_assoc($departments))
	{
	?>
	<option value="<?php echo $depts["name"];?>" <?php if($depts["ddid"] == $result["deptid"]){echo "selected";}?>><?php echo $depts["name"];?></option>
	<?php
	}
	?>
	</select><br><br>

	Name of the book:<input type="text" name="bname" id="bname" value="<?php echo $result["name"];?>"><br><br>
	Author:<input type="text" name="bauthor" id="bauthor" value="<?php echo $result["author"];?>"><br><br>
	<input type="submit" name="update_btn" value="Update">
</form>
</body>
</html>