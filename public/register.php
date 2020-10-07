<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" href="../css/index.css" type="text/css">
	<script type="text/javascript" src="./js/index.js"></script>
	<script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<?php
	include 'inc/header.php';
?>
</head>
<body>
	<div class="container-fluid background-image">
		<div class="row justify-content-center">
			<div class="col-md-3 col-sm-6 col-xs-12 row-container">
				<form action="../libraries/registration.php" method="post">
					<h1>Fill in your information</h1>
					<div class="form-group">
						<label style="color: white" for="userName">Username</label>
						<input minlength="6" maxlength="20" type="userName" pattern="[a-z]{6,20}" class="form-control" name="userName" id="userName" placeholder="Enter Username" title="Tên người dùng chưa hợp lệ! Vui lòng nhập ký tự chữ" required>
						<p class="UsernameError"></p>
					</div>
					<div class="form-group">
						<label style="color: white" for="userPass" class="label">Password</label>
						<input minlength="6" maxlength="20" type="password" pattern="[a-z]{6,20}" class="form-control" name="userPass" id="userPass" placeholder="Enter Password" required title="Bạn chỉ được phép nhập chuỗi từ 6 => 20 ký tự">
						<p class="UserpassError"></p>
					</div>
					<button type="submit" name="register" class="btn btn-success btn-block my-3">Create</button>
				</form>
			</div>
		</div>
	</div>
<?php
	include 'inc/footer.php'
?>
</body>
</html>