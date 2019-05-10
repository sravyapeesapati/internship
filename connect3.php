<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
$value=$_POST["dept"];
$sqlquery=mysqli_query($conn,"SELECT ddid,name from department where name='$value' ");
if(mysqli_num_rows($sqlquery)>0)
{
	$row = mysqli_fetch_assoc($sqlquery);
	$_SESSION['id2']=$row['name'];
    header("location:adminbook.php");
} 
?>