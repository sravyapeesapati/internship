<!DOCTYPE html>
<html>
<head>
	<title>login page</title>
	<style type="text/css">
		form
		{
			text-align: center;
			font-family: all;
			font-style: inherit;
			letter-spacing: 3px;
			font-weight: bold;
		}
		h1
		{
			text-align: center;
			font-family: serif;
			font-style: inherit;
			letter-spacing: 5px;
			font-weight: bolder;
			text-decoration: overline;
		}
		#submit
		{
			font-family: all;
			font-style: inherit;
			letter-spacing: 3px;
			font-weight:bold;
		}
	</style>
</head>
<body>
<h1>LOGIN</h1>
<form action="action.php" method="post">
	Username <input type="text" name="Username" required="required"><br><br>
	Password <input type="Password" name="Password" required="required"><br><br>
	<input id="submit" type="submit" name="Submit">
</form>
</body>
</html>