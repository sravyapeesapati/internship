<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
$user=$_POST["Username"];
$password=$_POST["Password"];
$sqlquery=mysqli_query($conn,"SELECT id,did,utype,Username ,Password from loginpage where Username='$user' and Password='$password'");
if(!$sqlquery)
{
	echo "not successfu";
}
else
{

if(mysqli_num_rows($sqlquery)>0)
{
	$row = mysqli_fetch_assoc($sqlquery);
$_SESSION['id']=$row['did'];
$_SESSION['user']=$row['utype'];
if($_SESSION['user']==s)
{
	header("location:department.php");
}
else
header("location:detail.php");
}
else
{
	echo "login fail";
}

}
?>