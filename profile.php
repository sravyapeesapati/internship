<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
	<style type="text/css">
		span
		{
			font-family: serif;
			font-style: inherit;
			font-weight: bold;
			color:blue;
		}
		div
		{
			position: absolute;
			top: 30%;
			left:40%;
		}
		h1
		{
			font-family: serif;
			font-style: inherit;
			position: absolute;
			text-decoration: underline;
			top: 10%;
			left:45%;
		}
		#class
		{
			position: absolute;
			top: 70%;
			left:45%;
			font-family: serif;
			font-style: inherit;
			font-size: 15px;
		}

	</style>
</head>
<body>
<?php
session_start();
$conn=mysqli_connect("localhost","root","","students");
$sqlquery="SELECT login.id1 ,login.username,login.password,profile.id,profile.first ,profile.last,profile.middle,profile.address,profile.number,profile.certification,profile.hobbies from login join profile on login.id1=profile.id and profile.first=login.username where profile.id='".$_SESSION['id']."'";
$result=$conn->query($sqlquery);

while($row= $result->fetch_assoc())
{?> <h1>PROFILE</h1>
	<div id="new">
<span>First Name: </span><?php echo  $row['first'];?><br>
<span>Last Name: </span><?php echo   $row['last'];?><br>
<span>Middle Name: </span><?php echo  $row['middle'];?><br>
<span>Address: </span><?php echo  $row['address'];?><br>
<span>Contact no: </span><?php echo  $row['number'];?><br>
<span>Certification: </span><?php echo  $row['certification'];?><br>
<span>Hobbies: </span><?php echo  $row['hobbies'];?><br>
</div>
<?php
}
//session_write_close();
//header("location:login.php");
?>
<a href="logout.php" style="padding:5px;border:1px solid black;position: absolute;top:70%;left:45%">logout</a>

</body>
</html>