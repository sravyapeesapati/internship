<?php
session_start();
$value=$_GET['ddid'];

$conn=mysqli_connect("localhost","root","","library");
 $sql = "DELETE FROM department WHERE ddid = '$value'" ;
 $book="DELETE FROM book where deptid='$value' ";
if (($conn->query($sql) && $conn->query($book)) === TRUE) {
    header("location:detaildepart.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
?> 