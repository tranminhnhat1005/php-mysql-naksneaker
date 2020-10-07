<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$sql = "SELECT * FROM brand WHERE IDbrand=$_GET[id]";
	$run = mysqli_query($con,$sql);
	if($run){
		$row = mysqli_fetch_array($run);
	}
?>




<form action="./inc/brand/process.php?id=<?php echo $row['IDbrand'] ?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2">
				<div align="center">Edit brand</div>
			</td>
		</tr>
		<tr>
			<td>Brand name</td>
			<td><input type="text" name="brandname" value="<?php echo $row['brandname'] ?>"></td>
		</tr>
		<tr>
			<td>Sort</td>
			<td><input type="text" name="sort" value="<?php echo $row['sort'] ?>"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<input type="file" name="image" style="width: 100%;">
				<img style="width: 100%;" src="inc/brand/uploads/<?php echo $row['image'] ?>"  width="300px" height="auto">
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="edit" id="edit" value="Edit">
				</div>
			</td>
		</tr>
	</table>
</form>