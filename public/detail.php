<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
	$id = $_GET['id'];
	$sql_p = "SELECT * FROM detail WHERE IDp = $id";
	$result_p = mysqli_query($con,$sql_p);
	session_start();
?>
<?php
	if($result_p){
		while($row_p = mysqli_fetch_array($result_p)){
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $row_p['pname'] ?></title>

	<link rel="stylesheet" href="../css/index.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
</head>
<body>

	<?php
		include 'inc/header.php';
	?>

	<div class="container-fliud row padding my-4 mx-3">
		<div class="photo col-sm-12 col-md-6 col-lg-6">
			<div id="slidedetail" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<div class="carousel-item active">
						<img class="img-fluid" src="../admincp/inc/detail/uploads/<?php echo $row_p['image'] ?>" >
					</div>
<?php
		}
	}
?>
<?php
	$sql_photo = "SELECT * FROM detailphoto,detail WHERE detailphoto.IDp = detail.IDp AND detailphoto.IDp = $id";
	$result_photo = mysqli_query($con,$sql_photo);
	if ($result_photo) {
		while ($row_photo = mysqli_fetch_array($result_photo)) {
?>

<?php
	$photo = $row_photo['photosrc'];
?>
					<div class="carousel-item ">
						<img class="img-fluid" src="../admincp/inc/photoproduct/<?php echo $photo ?>" >
					</div>
<?php
		}
	}else{
		echo "connect faild";
	}
?>
				</div>
				<a class="carousel-control-prev" href="#slidedetail" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
  				</a>
				<a class="carousel-control-next" href="#slidedetail" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
		</div>
		<div class="info col-sm-12 col-md-6 col-lg-6 ">
			<div class="d-block text-center">
				<h2><p><b>INFORMATION</b></p></h2>
<?php
	$sql_product = "SELECT * FROM brand,detail WHERE brand.IDbrand = detail.IDbrand AND detail.IDp = $id";
	$result_product = mysqli_query($con,$sql_product);
	$row_product = mysqli_fetch_array($result_product);

	$IDbrand = $row_product['IDbrand'];
?>

				<form action="./cart.php?watch=cart&add=<?php echo $row_product['IDp'] ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
					<table class="table table-borderless">
						<tbody>
							<tr>
								<th  scope="row">NAME :</th>
								<td><?php echo $row_product['pname'] ?></td>
							</tr>
							<tr>
								<th scope="row">PRICE :</th>
								<td>$<?php echo number_format($row_product['price'],0,',','.'); ?></td>
							</tr>
<?php
	$sql_brand = "SELECT * FROM brand WHERE IDbrand = $IDbrand";
	$result_brand = mysqli_query($con,$sql_brand);
	$row_brand = mysqli_fetch_array($result_brand);
?>
							<tr>
								<th scope="row">BRAND:</th>
								<td><?php echo $row_brand['brandname'] ?></td>
							</tr>
							<tr>
								<th style="padding: 12px 0px 12px 0px" scope="row">SIZE :</th>
<?php
	$tab = "---------------";
	$size = $row_product['size'];
	if ($size == "fullsize"){
		$i = 3.5;
		$max = 12.5;
	}elseif ($size == "mensize") {
		$i =  6.5;
		$max = 12.5;
	}else{
		$i = 3.5;
		$max = 6.5;
	}
?>
								<td>
									<select class="form-control">
<?php while ($i <= $max) { $i = $i+0.5; ?>
										<option value="<?php echo $i ?>">
											US <?php echo $i ?><?php echo $tab ?>
											UK <?php echo $i-0.5 ?><?php echo $tab ?>
											<?php $cm = 10*$i+180; echo $cm; ?>cm
										</option>
<?php } ?>
									</select>
								</td>
							</tr>
							<tr>
								<td colspan="2">
									<div align="center">
											<button class="btn btn-block btn-primary"  type="submit" name="add" value="add" >Add to Cart
											</button>
										</a>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</form>
			</div>
		</div>
	</div>
	<div class="container-fliud my-3 mx-3 justify-content-">
		<p class="text-center"><?php echo $row_product['pname'] ?></p>
		<p class="my-3 mx-5 d-flex justify-content-center"><?php echo $row_product['pdes'] ?></p>
	</div>
</body>
