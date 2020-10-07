<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
	if(isset($_GET['page'])){
		$get_page = $_GET['page'];
	}else{
		$get_page = '';
	}


	if($get_page <= 1 || $get_page == 1){
		$page_num = 0;
	}else{
		$page_num = ($get_page*6)-6;
	}
	$sql_detail_all = "SELECT * FROM detail LIMIT $page_num , 6";
	$result_detail_all = mysqli_query($con,$sql_detail_all);
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>All Brands</title>
	<link rel="stylesheet" href="../css/index.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="shortcut icon" type="image/png" href="../images/favicon.png">
</head>
<body>
	<?php
		include 'inc/header.php';
	?>
	<div class="container ">
		<ul class="pagination pagination-lg justify-content-center">
			<li class="page-item">
				<b><a class="page-link mx-2" style="color:blue; border-radius: 5px" href="allbrand.php?page=<?php if(($get_page - 1) <= 1){ echo "1";}else{ echo ($get_page - 1); } ?>">Previous</a></b>
			</li>
	<?php
		$sql_page = mysqli_query($con,'SELECT * FROM detail');
		$count = mysqli_num_rows($sql_page);
		$a = ceil($count/6);
		for($b=1;$b<=$a;$b++){
	?>
			 <li class="page-item">
			 	<b><a class="page-link mx-2" style="color:blue; border-radius: 5px" href="allbrand.php?page=<?php echo $b ?>"><?php echo $b ?></a></b>
			 </li>
	<?php } ?>
			<li class="page-item">
				<b><a class="page-link mx-2" style="color:blue; border-radius: 5px" href="allbrand.php?page=<?php if($get_page <= 1){echo "2";}elseif($get_page>($a-1)){echo $get_page;}else{echo ($get_page + 1);} ?>">Next</a></b>
			</li>
		</ul>
	</div>
	<div class="container-fliud padding my-4">
		<ul class="row text-center padding" style="padding: 40px; ">
			<?php
				if($result_detail_all){
					while($row_detail_all = mysqli_fetch_array($result_detail_all)){
			?>
			<li class="item col-xs-12 col-sm-6 col-md-4">
				<a href="detail.php?watch=detail&id=<?php echo $row_detail_all['IDp'] ?>">
					<p class="price"><b>$<?php echo $row_detail_all['price'] ?></b></p>
					<img class="detail-photo img-fluid" src="../admincp/inc/detail/uploads/<?php echo $row_detail_all['image'] ?>">
					<p class="pname"><b><?php echo $row_detail_all['pname'] ?></b></p>
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







