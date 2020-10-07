<?php

include './connect.php';

mysqli_select_db($con,'n');

session_start();


$userName = $_POST['userName'];
$userPass = $_POST['userPass'];

if(!empty($userName)&&!empty($userPass)){
	$s = " SELECT * FROM usertable where userName = '$userName'";

	$result = mysqli_query($con, $s);

	$num = mysqli_num_rows($result);

	if($num == 1){
	     echo '<script language="javascript">alert("Username already taken !"); window.location="../public/register.php";</script>';
	}else{
	    $reg = "INSERT INTO usertable(userName,userPass) VALUES ('$userName','$userPass')";
	    mysqli_query($con, $reg);
	    echo '<script language="javascript">alert("Registration successful !"); window.location="../public/login.php";</script>';
	}
} else {
	echo '<script language="javascript">alert("Username or password empty !"); window.location="../public/register.php";</script>';
}
?>
