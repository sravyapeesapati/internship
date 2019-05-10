<!DOCTYPE html>
<html>
<head>
	<title>login for library</title>
	<style type="text/css">
	@import"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
		h1
		{
			text-decoration:underline;
			font-family: serif;
			font-style: inherit; 
		}
		.textbox i
{
	width:26px;
	float: left;
	text-align: center;
}
.button
{
	width: 10%;
	align-items: center;
	background: none;
	border: 2px solid;
	color:black;
	padding:5px;
	font-size: 20px;
	margin:5px;
}
.textbox
{
	font-family: serif;
	font-style: inherit;
}

	</style>
</head>
<body>
<h1>LOGIN</h1>
<form action="connect1.php" method="post">	
<div class="textbox">
	<i class="fa fa-user"></i>
	<input placeholder="Username" type="text" name="Username" required="required">
</div>
<br>
<div class="textbox">
	<i class="fa fa-lock"></i>
	<input placeholder="Password" type="Password" name="Password" required="required">
</div>
<br>
<input class="button" type="submit" name="" value="Login"></form>
</body>
</html>