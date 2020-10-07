<?php

include './lib/connect.php';

mysqli_select_db($con,'n');

session_start();

if(isset($_SESSION['adminName']))
{?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Website Content Management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>
</head>
<body>
	<div class="wrapper">
	<?php
		include 'inc/connect.php';
		include 'inc/header.php';
	?>
	<?php
		include 'inc/menu.php';
	?>
	<?php
		include 'inc/content.php';
	?>
	<?php
		include 'inc/footer.php';
	?>
	</div>
</body>
</html>

<?php }
else
{
	echo '<script language="javascript">alert("Login failed !"); window.location="./login.php";</script>';
}

?>