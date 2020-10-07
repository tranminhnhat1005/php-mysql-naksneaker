<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
	$sql_brand = "SELECT * FROM brand WHERE IDbrand = '$_GET[id]'";
	$result_brand = mysqli_query($con,$sql_brand);
	session_start();
?>



<?php
	if($result_brand){
		while($row_brand = mysqli_fetch_array($result_brand)){
?>
<?php
	$photo = $row_brand['image'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $row_brand['brandname'] ?></title>
	<link rel="stylesheet" href="../css/index.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
</head>
<body>

<?php
		}
	}
?>
	<?php
		include 'inc/header.php';
	?>

	<div class="brand-photo container-fliud text-center">
		<img class="photo img-fluid col-xs-12 col-sm-12 col-md-12" src="../admincp/inc/brand/uploads/<?php echo $photo ?>">
	</div>

	<div class="container-fliud padding my-4">
		<ul class="row text-center padding" style="padding: 40px; ">
			<?php
				$sql_detail = "SELECT * FROM brand,detail WHERE brand.IDbrand = detail.IDbrand AND detail.IDbrand = $_GET[id]";
				$result_detail = mysqli_query($con,$sql_detail);
				if($result_detail){
					while($row_detail = mysqli_fetch_array($result_detail)){
			?>
			<li class="item col-xs-12 col-sm-6 col-md-4">
				<a href="detail.php?watch=detail&id=<?php echo $row_detail['IDp'] ?>">
					<p class="price"><b>$<?php echo $row_detail['price'] ?></b></p>
					<img class="detail-photo img-fluid" src="../admincp/inc/detail/uploads/<?php echo $row_detail['image'] ?>">
					<p class="pname"><b><?php echo $row_detail['pname'] ?></b></p>
					<p></p>
				</a>
			</li>
			<?php
					}
				}
			?>
		</ul>
	</div>
	<?php
		include 'inc/footer.php';
	?>
</body>
</html>



