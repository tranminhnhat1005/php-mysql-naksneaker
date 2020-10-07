<?php

include 'connect.php';

?>

<?php

mysqli_select_db($con,'n');

session_start();

$userName = $_POST['userName'];
$userPass = $_POST['userPass'];

$s = " SELECT * FROM usertable where userName = '$userName' AND userPass = '$userPass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['userName'] = $userName;
     echo '<script language="javascript">alert("Welcome to N A K !"); window.location="../public/index.php";</script>';
}else{
    echo '<script language="javascript">alert("Login failed !"); window.location="../public/login.php";</script>';
}
?>
