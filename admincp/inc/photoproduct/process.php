<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
 	include '../connect.php';

?>
<?php
	$site="D:/xampp/htdocs/N/admincp/inc/photoproduct";
	if(isset($_POST['add'])){
		$num=$_GET['file'];
		$IDp=$_GET['id'];

		for($i=0; $i< $num; $i++)
		{
			move_uploaded_file($_FILES['img']['tmp_name'][$i],"uploads/".$_FILES['img']['name'][$i]);
			$url="uploads/".$_FILES['img']['name'][$i];
			$name=$_FILES['img']['name'][$i];
			$sql="INSERT INTO detailphoto(IDp,photosrc,photoname) values('$IDp','$url','$name')";
			mysqli_query($con,$sql);
			echo "<img src='$url' width='120' /><br />";
			echo "Images URL: <input type='text' name='link' value='$site/$url' size='35' /><br />";
			echo '<script language="javascript">alert("Add photo of product successful !"); window.location="../../index.php?manage=photoproduct&ac=add";</script>';
		}
		mysqli_close($con);
	}elseif (isset($_POST['upload'])){
		$IDphoto = $_GET['id'];
		$photoname = $_FILES['newphoto']['name'];
		$photoname_tmp = $_FILES['newphoto']['name'];
		$url = "uploads/".$_FILES['newphoto']['name'];
		$path = "uploads/";

		if($photoname!=''){
			$sql_update = "UPDATE detailphoto SET photoname = '$photoname', photosrc = '$url' WHERE IDphoto = '$IDphoto'";
			mysqli_query($con,$sql_update);
			echo '<script language="javascript">alert("Update file successful !"); window.location="../../index.php?manage=photoproduct&ac=edit";</script>';
		}else{
			echo '<script language="javascript">alert("Choose file first !"); window.location="../../index.php?manage=photoproduct&ac=edit";</script>';
		}
	}else{
		$IDphoto = $_GET['id'];
		$del_photo = "DELETE FROM detailphoto WHERE IDphoto ='$IDphoto'";
		mysqli_query($con,$del_photo);
		echo '<script language="javascript">alert("Delete file successful !"); window.location="../../index.php?manage=photoproduct&ac=edit&id";</script>';
	}
?>