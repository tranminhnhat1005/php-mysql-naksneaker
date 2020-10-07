<?php
	ob_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','sneakers') or die('Connection error');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shopping cart</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<?php
	include 'inc/header.php';
?>

<?php

?>
 <div class="container-fluid">
 	<form action="./payment.php" method="post" accept-charset="utf-8">
	 	<table class="table text-center">
	 		<thead class="thead-dark">
	 			<tr>
	 				<th scope="col">#</th>
	 				<th scope="col">ID</th>
	 				<th scope="col">Name</th>
	 				<th scope="col">Photo</th>
	 				<th scope="col">Price</th>
	 				<th scope="col">Quantity</th>
	 				<th scope="col">Task</th>
	 			</tr>
	 		</thead>
	 		<tbody>



<?php
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id = $_GET['add'];
		// echo $id;
		@$_SESSION['c'.$id]+=1;
		header('location:cart.php?watch=cart');
	}

	if(isset($_GET['plus'])){
		$_SESSION['c'.$_GET['plus']]+=1;
		header('location:cart.php?watch=cart');
	}

	if(isset($_GET['minus'])){
		$_SESSION['c'.$_GET['minus']]--;
		header('location:cart.php?watch=cart');
	}

	if(isset($_GET['delete'])){
		$_SESSION['c'.$_GET['delete']]=0;
		header('location:cart.php?watch=cart');
	}

	$total = 0;
	$d=1;
	foreach ($_SESSION as $name => $value){
		if($value > 0){
			$idp = substr($name,1,strlen($name)-1);
			$sql = "SELECT * FROM detail WHERE IDp=".$idp;
			$result = mysqli_query($con,$sql);

			if($result){
				while($row = mysqli_fetch_array($result)){
					$cost = $row['price'] * $value;
					if($row['size']=='fullsize'){
						$min = 4;
						$max = 13;
					}elseif($row['size']=='mensize'){
						$min = 7;
						$max = 13;
					}else{
						$min = 4;
						$max = 7;
					}
?>
				<tr>
					<th scope="row">
						<input type="text" class="border-0 text-center" style="width: 20px;" name="number" value="<?php echo $d ?>" readonly>
					</th>
					<td>
						<?php echo $row['IDp']; ?>
					</td>
					<td>
						<?php echo $row['pname']; ?>
					</td>
					<td>
						<img class="img-fluid" style="width: 60%" src="../admincp/inc/detail/uploads/<?php echo $row['image'] ?>">
					</td>
					<td>$<?php echo number_format($row['price'],0,',','.') ?></td>
					<td><input class="border-0 text-center" type="text" name="quantity" readonly style="width: 20px;" value="<?php echo $value ?>"></td>
					<td>
						<a href="cart.php?watch=cart&plus=<?php echo $idp ?>">
							<i style="font-size: 30px;" class="fa fa-plus"></i>
						</a>
						<a href="cart.php?watch=cart&minus=<?php echo $idp ?>">
							<i style="font-size: 30px" class="fa fa-minus"></i>
						</a>
						<a href="cart.php?watch=cart&delete=<?php echo $idp ?>">
							<i style="font-size: 30px" class="fa fa-times"></i>
						</a>
					</td>
				</tr>
<?php
					$d++;
					$total = $total + $cost;
					}
				}
			}
		}

?>
			</tbody>
		</table>
		<div class="row">
			<div class=" col-lg-6 col-md-6 col-sm-12">
				<button name="checkout" class="btn btn-block btn-success my-3 mx-4" href="./allbrand.php" type="submit">Checkout</button>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
<?php
	if ($total == 0){
?>
				<h2>
					<input class="border-0 field left my-3 mx-4" type="text" name="total" value="Cart empty !" readonly>
				</h2>
<?php
	}else{
?>
				<h2 class=" my-3 mx-4">Total: $
					<input class="border-0 field left" type="text" name="total" value="<?php echo $total ?>" readonly>
				</h2>
<?php
	}
?>
			</div>
		</div>
	</form>
			<div class=" col-lg-12 col-md-12 col-sm-12">
				<a href="./allbrand.php" class="text-decoration-none">
					<button href="./allbrand.php" class="btn btn-block btn-secondary mx-2 my-4" style="text-decoration: none !important;">Countine Shopping</button>
				</a>
			</div>
</div>
