<?php
session_start();
$bookid=$_GET['bid'];

$conn=mysqli_connect("localhost","root","","library");
 $sql = "DELETE FROM book WHERE bid = $bookid" ;
if ($conn->query($sql) === TRUE) {
    header("location:adminbook.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?>            