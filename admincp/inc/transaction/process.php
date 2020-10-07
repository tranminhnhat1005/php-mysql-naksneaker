<?php	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','sneakers') or die('Connection error');

	$id = $_GET['id'];
	$userName = $_POST['userName'];
	$total = $_POST['total'];
	$bill = addslashes($_POST['bill']);
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['$address'];
	$timemake = $_POST['timemake'];
	$IDs = $_POST['IDs'];
	if (isset($_POST['submit'])) {
		$sql = "UPDATE 
		transaction 
		SET userName='$userName', 
		total='$total' 
		,bill='$bill' 
		,fname='$fname' 
		,lname='$lname' 
		,email='$email' 
		,phone='$phone' 
		,address='$address' 
		,timemake='$timemake' 
		,IDs='$IDs' 
		WHERE IDtr='$id'";
		$result = mysqli_query($con,$sql);
		header('location:../../index.php?manage=transaction&ac=checkbill');
	}else{
		$del="DELETE FROM transaction WHERE IDtr ='$id'";
		mysqli_query($con,$del);
		header('location:../../index.php?manage=transaction&ac=checkbill');
	}

?>