<?php
	include '../libraries/connect.php';
	if(isset($_POST['searchbtn'])){
		$search=$_POST['search'];
		$sql_search="SELECT * FROM detail WHERE pname LIKE '%$search%'";
		$result_search= mysqli_query($con,$sql_search);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Search</title>
	<link rel="stylesheet" href="../css/index.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
</head>
<body>
	<?php
		include 'inc/header.php';
	?>
	<div class="container-fliud padding my-4">
<?php
	if($count=mysqli_num_rows($result_search)==0){
?>
		<h2 class="text-center">There were no matching results. Please try a different search.</h2>
<?php
	}else{
?>
		<ul class="row text-center padding" style="padding: 40px; ">
<?php
		if($result_search){
			while($row_search = mysqli_fetch_array($result_search)){
?>
			<li class="item col-xs-12 col-sm-6 col-md-4">
				<a href="detail.php?watch=detail&id=<?php echo $row_detail_all['IDp'] ?>">
					<p class="price"><b>$<?php echo $row_search['price'] ?></b></p>
					<img class="img-fluid" src="../admincp/inc/detail/uploads/<?php echo $row_search['image'] ?>">
					<p class="pname"><b><?php echo $row_search['pname'] ?></b></p>
				</a>
			</li>
<?php
			}
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