<?php
	session_start();
	include '../libraries/connect.php';
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
	$sql_brand = "SELECT * FROM brand ORDER BY sort";
	$result_brand = mysqli_query($con,$sql_brand);

?>

<!DOCTYPE html>
<html lang="vn">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="shortcut icon" type="image/png" href="../images/favicon.png"/>

	<!-- <link rel="stylesheet" type="text/css" href="../../css/index.css"> -->

	<!-- <link rel="stylesheet" href="../../css/assets/owl.carousel.min.css"> -->

	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.0.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<!-- <script src="../../js/owl.carousel.min.js"></script> -->

</head>
<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white sticky-top">
		<div class="container-fluid">
			<a href="./index.php" class="navbar-brand logo-container">
					<img src="../images/logo.png" height="60px">
			</a>
			<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="./index.php" class="nav-link active">Home</a>
					</li>
					<?php
						if(!isset($_SESSION['userName'])){
					?>
					<li class="nav-item">
						<a href="./login.php" class="nav-link active">Login</a>
					</li>
					<?php
						}else{
					?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" data-target="d_target">
							User: <?php echo $_SESSION['userName'] ?><span class="caret"></span>
						</a>
						<div class="dropdown-menu brand" aria-labelledby="d_target">
							<a class="dropdown-item" href="./logout.php">Logout</a>
					</li>
					<?php
						}
					?>
					<li class="nav-item dropdown">
						<a href="#" class="nav-link dropdown-toggler" data-toggle="dropdown" data-target="d_target">Brand<span class="caret"></span>
						</a>
						<div class="dropdown-menu brand" aria-labelledby="d_target">
						<?php
							if($result_brand){
								while ($row_brand = mysqli_fetch_array($result_brand)){
						?>
							<a class="dropdown-item" href="brand.php?watch=brand&id=<?php echo $row_brand['IDbrand'] ?>"><?php echo $row_brand['brandname'] ?></a>
							<div class="dropdown-divider"></div>
						<?php
								}
							}
						?>
							<a href="allbrand.php" class="dropdown-item">All brand</a>
						</div>
					</li>
					<li class="nav-item">
						<a href="./cart.php?watch=cart&add" class="nav-link active">
							<i style="font-size: 30px;margin-right: 10px" class="fa fa-shopping-cart"></i>
						</a>
					</li>
				</ul>
			</div>
			<form class="form-inline" action="search.php" method="post">
			    <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
			    	<button class="btn btn-light" name="searchbtn" type="submit">Search</button>
  			</form>
		</div>
	</nav>