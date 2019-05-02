<?php
$conn=mysqli_connect("localhost","root","","students");
$user=$_POST["Username"];
$password=$_POST["Password"];
$sqlquery=mysqli_query($conn,"SELECT username , password from login where username='$user' and password='$password'");
$sqldata=mysqli_fetch_array($sqlquery);
if($sqldata)
{
	echo "Login sucessful";
}
else 
{
	echo "Login not sucessful";
}
?>