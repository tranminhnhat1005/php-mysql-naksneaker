<?php
	$sql = "SELECT * FROM brand,detail WHERE brand.IDbrand = detail.IDbrand ORDER BY detail.psort";
	$result = mysqli_query($con,$sql);
?>



<table width="1000px" border="1">
	<tr>
		<td>ID</td>
		<td>Product name</td>
		<td>Brand</td>
		<td>Price</td>
		<td>Photo</td>
		<td>Photo Hot</td>
		<td>New</td>
		<td>Hot</td>
		<td>Sort</td>
		<td>Size</td>
		<td colspan="2">Manage</td>
	</tr>
<?php
	$i=0;
	if($result){
		while ($row = mysqli_fetch_array($result)) {

?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['pname']; ?></td>
		<td><?php echo $row['brandname']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><img src="inc/detail/uploads/<?php echo $row['image']?>" width="200px" height="auto"></td>
		<td><img src="inc/detail/uploads/<?php echo $row['imagehot']?>" width="200px" height="auto"></td>
		<td><?php echo $row['new'] ?></td>
		<td><?php echo $row['hot'] ?></td>
		<td><?php echo $row['psort']; ?></td>
		<td><?php echo $row['size'] ?></td>
		<td><a href="index.php?manage=detail&ac=edit&id=<?php echo $row['IDp'] ?>">Edit</td>
		<td><a href="inc/detail/process.php?id=<?php echo $row['IDp'] ?>">Delete</a></td>
	</tr>
<?php
			$i++;
		}
	}
?>
</table>