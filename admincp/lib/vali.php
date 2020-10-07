<?php

include 'connect.php';

?>

<?php

mysqli_select_db($con,'n');

session_start();

$adminName = $_POST['adminName'];
$adminPass = md5($_POST['adminPass']);

$s = " SELECT * FROM tbl_admin where adminName = '$adminName' AND adminPass = '$adminPass'";

$result = mysqli_query($con, $s);
if ($result) {
	$num = mysqli_num_rows($result);
	// echo $num;

	if($num == 1){
		$_SESSION['adminName'] = $adminName;
	     echo '<script language="javascript">alert("Welcome Mr.NAK!"); window.location="../index.php";</script>';
	}
	else{
	    echo '<script language="javascript">alert("Login failed !"); window.location="../login.php";</script>';
	}
}

?>