<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Login</title>
	<link rel="stylesheet" href="css/login.css">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
</head>
<body>
	<form action="./lib/vali.php" method="post">
	<h1>Admin Login</h1>
	<input name="adminName" placeholder="Username" type="text" required="">
	<input name="adminPass" placeholder="Password" type="password" required="">
	<button class="text-decoration-none">Log in</button>
	<button> <a href="../public/index.php" style="color: white; text-decoration: none;">Back to Homepage</a></button>
	</form>
</body>
</html>