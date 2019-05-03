<?php
session_start();
$conn=mysqli_connect("localhost","root","","students");
$user=$_POST["Username"];
$password=$_POST["Password"];
$sqlquery=mysqli_query($conn,"SELECT id1,username ,password from login where username='$user' and password='$password'");
//$sqlquery1=mysqli_query($conn,"SELECT login.id1 ,login.username,login.password,profile.id,profile.first from login join profile on login.id1=profile.id");
if(!$sqlquery)
{
//$_SESSION['id']=$_SESSION['id1'];
//header("location:myprofile.php");
	echo "not successfu";
}
else
{

if(mysqli_num_rows($sqlquery)>0)
{
	$row = mysqli_fetch_assoc($sqlquery);


$_SESSION['id']=$row['id1'];
header("location:myprofile.php");
}
else
{
	echo "login fail";
}

}
?>