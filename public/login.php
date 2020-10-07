<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="../css/index.css" type="text/css">
	<script type="text/javascript" src="./js/index.js"></script>
<?php
	include 'inc/header.php';
?>
</head>
<body>
	<div class="container-fluid background-image" style="background:url('../images/background_login.png') width:100% height:100%">
		<div class="row justify-content-center">
			<div class="col-md-3 col-sm-6 col-xs-12 row-container">
				<form action="../libraries/validation.php" method="post">
					<h1>Login with your information</h1>
					<div class="form-group">
						<label style="color: white" for="userName">Username</label>
						<input minlength="6" maxlength="20" required pattern="[a-z]{6,20}" type="text" class="form-control" name="userName" id="userName" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label style="color: white" for="userPass" class="label">Password</label>
						<input minlength="6" maxlength="20" required type="password" pattern="[a-z]{6,20}" class="form-control" name="userPass" id="userPass" placeholder="Enter Password" title="Bạn chỉ được phép nhập chuỗi từ 6 => 20 ký tự">
					</div>
					<button type="submit" class="btn btn-success btn-block my-3">Login</button>
				</form>
				<button class="btn btn-secondary btn-block my-3">
					<a class="no" href="./register.php">
						No account ?
					</a>
				</button>
				<button class="btn btn-info btn-block my-3">
					<a class="no" href="../admincp/login.php">
						Admin
					</a>
				</button>
			</div>
		</div>
	</div>
<?php
	include 'inc/footer.php'
?>
</body>
</html>


