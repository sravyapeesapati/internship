<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
$value=$_POST["y"];
$sqlquery=mysqli_query($conn,"SELECT yid,yearst from year where yearst='$value' ");
if(mysqli_num_rows($sqlquery)>0)
{
	$row = mysqli_fetch_assoc($sqlquery);
	$_SESSION['id1']=$row['yid'];
    header("location:book.php");
}    
?>