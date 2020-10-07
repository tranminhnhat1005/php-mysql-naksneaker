<?php
	$sql = "SELECT * FROM brand,detail WHERE brand.IDbrand = detail.IDbrand ORDER BY detail.psort";
	$result = mysqli_query($con,$sql);
?>



<table width="1000px" border="1">
	<tr>
		<td>ID</td>
		<td>Product name</td>
		<td>Brand name</td>
		<td>Photo</td>
		<td>ID product</td>
		<td colspan="3">Manage</td>
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
		<td><img src="inc/detail/uploads/<?php echo $row['image']?>" width="200px" height="auto"></td>
		<td><?php echo $row['IDp'] ?></td>
		<td><a href="index.php?manage=photoproduct&ac=add&id=<?php echo $row['IDp'] ?>">Add</td>
		<td><a href="index.php?manage=photoproduct&ac=edit&id=<?php echo $row['IDp'] ?>">Edit</td>
		<td><a href="inc/photoproduct/process.php?id=<?php echo $row['IDp'] ?>">Delete</a></td>
	</tr>
<?php
			$i++;
		}
	}
?>
</table>