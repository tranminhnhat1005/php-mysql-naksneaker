<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include '../connect.php';

	$id = $_GET['id'];
	if(isset($_POST['notenew'])){
		$new = 1;
	}else{
		$new = 0;
	}
	if(isset($_POST['notehot'])){
		$hot = 1;
	}else{
		$hot = 0;
	}
	$pname = addslashes($_POST['pname']);
	$psort = $_POST['psort'];
	$size = $_POST['size'];
	$pdes = addslashes($_POST['pdes']);
	$price = $_POST['price'];
	$IDbrand = $_POST['IDbrand'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['name'];
	$image_hot = $_FILES['imagehot']['name'];
	$image_hot_tmp = $_FILES['imagehot']['name'];
	$path = "uploads/";

	if(isset($_POST['add'])){
		if(!empty($IDbrand) && !empty($psort) && !empty($pname) && !empty($pdes) && !empty($price) && !empty($image) && !empty($size)){
			$s="SELECT * FROM detail WHERE pname='$pname' OR psort = '$psort'";

			$result = mysqli_query($con,$s);
			if($result){
				$num = mysqli_num_rows($result);
				if($num > 0){
		     		echo '<script language="javascript">alert("Name or Sort already !"); window.location="../../index.php?manage=detail&ac=add";</script>';
		     	}else{
					move_uploaded_file($image_tmp,$path.$image);
					move_uploaded_file($image_hot_tmp,$path.$image_hot);
					$image = $_FILES['image']['name'];
					$image_hot = $_FILES['imagehot']['name'];
		     		$add = "INSERT INTO detail(IDbrand,pname,image,imagehot,price,size,pdes,psort,hot,new) VALUES ('$IDbrand','$pname','$image','$image_hot','$price','$size','$pdes','$psort','$hot','$new')";

		     		mysqli_query($con,$add);

		     		echo '<script language="javascript">alert("Add product successful !"); window.location="../../index.php?manage=detail&ac=add";</script>';
		     	}
	     	}
		}else{
			echo '<script language="javascript">alert("Anything empty !"); window.location="../../index.php?manage=detail&ac=add";</script>';
		}

	}elseif (isset($_POST['edit'])){
		if($image!=''){
			if ($image_hot!=''){
				$sql = "UPDATE detail SET IDbrand='$IDbrand',pname='$pname', image='$image',imagehot='$image_hot', price='$price', size='$size', pdes='$pdes', psort='$psort',hot='$hot',new='$new' WHERE IDp='$id'";
			}else{
				$sql = "UPDATE detail SET IDbrand='$IDbrand',pname='$pname', image='$image', price='$price', size='$size', pdes='$pdes', psort='$psort',hot='$hot',new='$new' WHERE IDp='$id'";
			}
		}else{
			$sql = "UPDATE detail SET IDbrand='$IDbrand',pname='$pname', price='$price', size='$size', pdes='$pdes', psort='$psort',hot='$hot',new='$new' WHERE IDp='$id'";
		}
		mysqli_query($con,$sql);
		header('location:../../index.php?manage=detail&action=add');

	}else{
		$del="DELETE FROM detail WHERE IDp ='$id'";
		mysqli_query($con,$del);
		header('location:../../index.php?manage=detail&ac=add');
	}

?>