<h2>Change password</h2>
<form action="" method="post" accept-charset="utf-8">
	<p>Admin name</p>
	<input type="text" name="adminName">
	<p>Old password</p>
	<input type="password" name="oldpass">
	<p>New password</p>
	<input type="password" name="newpass">
	<p><button type="submit" name="change">Change</button></p>
</form>
<br>
<a href="../index.php">Back to Homepage</a>
<?php
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');

	if(isset($_POST['change'])){
		if(!empty($_POST['adminName']) && !empty($_POST['oldpass']) && !empty($_POST['newpass'])){
			$adminName = $_POST['adminName'];
			$oldpass = md5($_POST['oldpass']);
			$newpass = md5($_POST['newpass']);
			$sql = "SELECT * FROM admintable WHERE adminName = '$adminName'";
			$result = mysqli_query($con,$sql);
			if($result){
				$row = mysqli_fetch_array($result);
				if($row['adminPass']==$oldpass){
					$update = "UPDATE admintable SET adminName = '$adminName', adminPass = '$newpass'";
					mysqli_query($con,$update);
					echo '<script language="javascript">alert("Password has been changed !"); window.location="changepw.php";</script>';
				}else{
					echo '<script language="javascript">alert("Password incorrect !"); window.location="changepw.php";</script>';
				}
			}else{
				echo "Admin name not exist";
			}
		}else{
			echo '<script language="javascript">alert("Anything empty !"); window.location="changepw.php";</script>';
		}
	}

?>