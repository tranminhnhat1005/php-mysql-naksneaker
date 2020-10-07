<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	include '../lib/connect.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Website Content Management</title>
	<link rel="stylesheet" href="../css/report.css" type="text/css">
	<link rel="shortcut icon" type="image/png" href="../../images/favicon.png"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container-fluid">
		<h2 class="text-center panner my-4">Sales revenue each month</h2>
		<div class="row padding">
			<div class=" col-xs-12 col-sm-6 col-md-3 col-bg-3">
				<form action="" method="post" accept-charset="utf-8">
					<div class="form-group">
						<label for="inputmonth">Select month</label>
						<input type="number" class="form-control" id="inputmonth"  placeholder="Month" min="1" max="12" name="month">
					</div>
					<div class="form-group">
						<label for="inputyear">Select year</label>
						<input type="number" class="form-control" id="inputyear"  placeholder="Year" min="2018" max="2019" name="year">
					</div>
					<button type="submit" name="submit" class="btn btn-default">
					Search
					</button>
				</form>
			</div>
<?php
if (isset($_POST['submit'])) {
	$month = $_POST['month'];
	$year = $_POST['year'];
	if(!$year){
		if($month){
			$sql = "SELECT * FROM transaction WHERE MONTH(timemake)=$month AND YEAR(timemake)=2019 AND IDs=4";
		}else{
			echo '<script language="javascript">alert("Select month !"); window.location="report.php";</script>';
		}
	}else{
		$sql = "SELECT * FROM transaction WHERE MONTH(timemake)=$month AND YEAR(timemake)=$year AND IDs=4";
	}
	$result=mysqli_query($con,$sql);


?>
			<div class=" col-xs-12 col-sm-6 col-md-9 col-bg-9">
				<span>List of orders in
<?php
	$month_name = date("F", mktime(0, 0, 0, $month, 10));
	echo $month_name."\n";
?></span>
				<table class="table table-bordered ">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">ID order</th>
							<th scope="col">User</th>
							<th scope="col">Detail</th>
							<th scope="col">Cost</th>
						</tr>
					</thead>
					<tbody>
<?php
	if($result){
		$i=1;
		$total=0;
		while($row=mysqli_fetch_array($result)){
?>
						<tr>
					      	<th scope="row"><?php echo $i; ?></th>
					      	<td><?php echo $row['IDtr']; ?></td>
					     	<td><?php echo $row['userName']; ?></td>
					      	<td><?php echo $row['bill']; ?></td>
					      	<td><?php echo $row['total']; ?></td>
    					</tr>
<?php
			$i++;
			$total+=$row['total'];
		}
	}

?>

					</tbody>
				</table>
				<h3 style="float: left;">We have <?php echo $i-1; ?> done orders</h3>
				<h3 style="float: right;">Total: $<?php echo $total; ?></h3>
			</div>

<?php
}else{
?>
	<h2>Select month</h2>
<?php
}
?>
			<div class="col-md-12">
				<button class="btn btn-default"><a href="../index.php">Back to homepage</a></button>
			</div>
		</div>
	</div>
</body>