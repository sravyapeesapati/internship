<?php
session_start();
$conn=mysqli_connect("localhost","root","","library");
$departments = mysqli_query($conn,"SELECT ddid,name FROM department");
$query=mysqli_query($conn, "SELECT bid,yyid,deptid,name,author from book ");
$result=mysqli_fetch_assoc($query);
if(isset($_POST) && !empty($_POST["add_it"]) && $_POST["add_it"] == "Add")
{       
$did=$_POST["branch"];
$name=$_POST["bookname"];
$author=$_POST["author"];
$year=$_POST["y"];
$dname=$_POST["dname"];
$sqlquery="INSERT into book (deptid,dname,name,author, yyid) values('$did','$dname','$name','$author','$year')  ";



if ($conn->query($sqlquery) === TRUE) {
    header("location:adminbook.php");
} else {
    echo "not added: " . $conn->error;
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<style type="text/css">
	</style>
</head>
<body>
	<div class="align">
        <h1>Add books details</h1>
       
 <form name="add_form" method="post" action="">
        Name of book:<input class="text" type="text" name="bookname" ><br><br>
        Author:<input class="text" type="text" name="author">
       
        	<br>
        	Branch:<br><br>
        	<select name="branch" id="branch" onchange="get_dname()">
                <?php   while($depts = mysqli_fetch_assoc($departments))
    {
    ?>
    <option value="<?php echo $depts["ddid"];?>" <?php if($depts["ddid"] == $result["deptid"]){echo "selected";}?>><?php echo $depts["name"];?></option>
    <?php
    }
    ?>
            </select>
                <br><br>

                <input type="hidden" name="dname" id="dname" value="">

        Year:<select name="y">
            <option value="">Choose your year</option>
            <option value="10">1</option>
            <option value="20">2</option>
            <option value="30">3</option>
            <option value="40">4</option>
        </select>

        <input type="submit" name="add_it" value="Add">	
</form><br>
<a href="adminbook.php">Back</a>
</div>


<script>
        function get_dname()
        {
            var dname_opt = document.getElementById("branch");
            var dname = dname_opt.options[dname_opt.selectedIndex].text;

           // alert(dname);
           document.getElementById("dname").value = dname;
        }
</script>

</body>
</html>