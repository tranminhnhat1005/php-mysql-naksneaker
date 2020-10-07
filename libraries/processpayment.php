<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Checkout</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	session_start();
	$con = mysqli_connect('localhost','root','','n',) or die('Connection error');

	date_default_timezone_set("Asia/Ho_Chi_Minh");
	$total = $_POST['total'];
	$bill = addslashes($_POST['bill']);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$user = $_POST['userName'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$timemake = date("Y-m-d H:i:s");
	if(isset($_POST['done'])){
		if(!empty($fname) && !empty($lname) && !empty($email) && !empty($address) && !empty($phone)){
			$sql = mysqli_query($con,"INSERT INTO transaction (userName,bill,total,fname,lname,email,phone,address,timemake,IDs) VALUES ('$user','$bill','$total','$fname','$lname','$email','$phone','$address','$timemake','0')");
			echo '<script language="javascript">alert("Checkout successful and please wait for contact from us !"); window.location="../public/allbrand.php";</script>';
		}else{
			echo '<script language="javascript">alert("Anything empty !"); window.location="../public/cart.php";</script>';
		}
	}
?>