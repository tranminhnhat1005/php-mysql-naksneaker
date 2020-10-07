

<?php
	// mysqli_select_db($con,'sneakers');
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include '../connect.php';
	$id = $_GET['id'];
	$brandname = $_POST['brandname'];
	$sort = $_POST['sort'];
	$image = $_FILES['image']['name'];
	$image_tmp = $_FILES['image']['name'];
	$path = "uploads/";
	if(isset($_POST['add'])){
		if(!empty($brandname)&&!empty($sort)){
			$s="SELECT * FROM brand WHERE brandname='$brandname' OR sort = '$sort'";

			$result = mysqli_query($con,$s);

			$num = mysqli_num_rows($result);

			if($num > 0){
	     		echo '<script language="javascript">alert("Brand or Sort already !"); window.location="../../index.php";</script>';
	     	}else{
	     		move_uploaded_file($image_tmp,$path.$image);
				$image = $_FILES['image']['name'];
	     		$add = "INSERT INTO brand(brandname,sort,image) VALUES ('$brandname','$sort','$image')";
	     		mysqli_query($con,$add);
	     		echo '<script language="javascript">alert("Add Brand successful !"); window.location="../../index.php";</script>';
	     	}
	    }else{
	    	echo '<script language="javascript">alert("Anything empty !"); window.location="../../index.php";</script>';
	    }

	}elseif (isset($_POST['edit'])) {
		if($image!=''){
			$sql = "UPDATE brand SET brandname='$brandname', sort='$sort', image='$image' WHERE IDbrand='$id'";
		}else{
			$sql = "UPDATE brand SET brandname='$brandname', sort='$sort' WHERE IDbrand='$id'";
		}
		mysqli_query($con,$sql);
			header('location:../../index.php?manage=brand&action=edit&id='.$id);

	}else{
		$del="DELETE FROM brand WHERE IDbrand ='$id'";
		mysqli_query($con,$del);
		header('location:../../index.php');
	}
?>