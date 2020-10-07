<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
	$total = $_POST['total'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Payment</title>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
	<link rel="stylesheet" type="text/css" href="../css/index.css">
</head>
<body>
<?php
	include 'inc/header.php';
	if(!$_SESSION['userName']){
		echo '<script language="javascript">alert("Please Login before !"); window.location="./login.php";</script>';
	}else{
?>
	<div class="container">
		<form class="needs-validation" novalidate="" action="../libraries/processpayment.php" method="post" accept-charset="utf-8">
			<div class="py-5 text-center">
				<h2 class="border border-primary py-3">Checkout form</h2>
			</div>
			<div class="row">
				<div class="col-md-4 order-md-2 mb-4">
					<h4 class="d-flex justify-content-between align-items-center mb-3">
						<span class="text-muted"><b>Your cart</b></span>
					</h4>
					<ul class="list-group mb-3">
						<div class="form-group">
  							<label for="comment">Bill:</label>
  							<textarea readonly class="form-control" name="bill" rows="15" id="comment">
<?php
	if(isset($_POST['checkout'])){
		if($total == 0){
			echo 'Nothing in your cart :(';
		}else{
			$d=1;
			foreach ($_SESSION as $name => $value){
				if($value > 0){
					$idp = substr($name,1,strlen($name)-1);
					$sql = "SELECT * FROM detail WHERE IDp=".$idp;
					$result = mysqli_query($con,$sql);
					if($result){
						while($row = mysqli_fetch_array($result)){
							// echo substr_replace($row['pname'],'...',28,100)."\t\t";
							echo $value."\t\t";
							echo $row['pname']."\n\n";
						}
					}
				}
			}
		}
	}
?>
</textarea>

	            		<li class="list-group-item d-flex justify-content-between">
	              			<span class="col-6 my-3">Total (USD)</span>
	              			<strong><input type="text" style="font-size: 30px;color: blue" class="form-control col-12 py-3 my-3 text-center border-0" name="total" value="<?php echo $total ?>" readonly></strong>
	            		</li>
	          		</ul>
	    		</div>
        		<div class="col-md-8 order-md-1">
          			<h4 class="mb-3"><b>Billing address</b></h4>
            		<div class="row">
              			<div class="col-md-6 mb-3">
			                <label for="firstName">First name</label>
			                <input type="text" class="form-control" name="fname" id="firstName" minlength="1" pattern="[a-zA-Z]{1,20}" maxlength="20" required>
			                <div class="invalid-feedback">
			                  Valid first name is required.
			                </div>
              			</div>
             			<div class="col-md-6 mb-3">
			                <label for="lastName">Last name</label>
			                <input type="text" class="form-control" name="lname" id="lastName" minlength="1" pattern="[a-zA-Z]{1,20}" maxlength="20" required>
			                <div class="invalid-feedback">
			                  Valid last name is required.
			                </div>
              			</div>
        			</div>
            		<div class="mb-3">
						<label for="username">Username</label>
						<div class="input-group">
            				<div class="input-group-prepend">
                  				<span class="input-group-text">@</span>
                			</div>
                			<input type="text" class="form-control" name="userName" id="username" placeholder="" required="" value="<?php echo $_SESSION['userName'] ?>">
                			<div class="invalid-feedback" style="width: 100%;">Your username is required.
                			</div>
              			</div>
            		</div>
            		<div class="mb-3">
		              	<label for="email">Email</label>
		              	<input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
              			<div class="invalid-feedback">Please enter a valid email address for shipping updates.
              			</div>
            		</div>
					<div class="mb-3">
              			<label for="address">Address</label>
              			<input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required="">
	              		<div class="invalid-feedback">Please enter your shipping address.
	              		</div>
            		</div>
            		<div class="mb-3">
              			<label for="phone">Phone number</label>
              			<input type="text" class="form-control" name="phone" id="phone" placeholder="+(84) " required="">
	              		<div class="invalid-feedback">Please enter your shipping address.
	              		</div>
            		</div>
					<hr class="mb-4">
					<p class="text-center">We will contact you as soon as possible to check the size of your product(s). Thank you for using our service.</p>
					<hr class="mb-4">
					<button class="btn btn-primary btn-lg btn-block" name="done" type="submit">Continue to checkout</button>
				</div>
			</div>
		</form>
	</div>
<?php

	include 'inc/footer.php';
}


?>