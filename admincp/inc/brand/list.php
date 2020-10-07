<?php
	// include '../conncet.php';
	// mysqli_select_db($con,'sneakers');
	$sql = "SELECT * FROM brand ORDER BY sort";
	$run = mysqli_query($con, $sql);

?>

<table width="100%" border="1">
	<tr>
		<td>ID</td>
		<td>Name of Brand</td>
		<td>Sort</td>
		<td colspan="2">Manage</td>
	</tr>
	<?php
	if($run){
		$i = 0;
		while ($row=mysqli_fetch_array($run)){
		?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $row['brandname']; ?></td>
			<td><?php echo $row['sort'];  ?></td>
			<td><a href="index.php?manage=brand&ac=edit&id=<?php echo $row['IDbrand'] ?>">Edit</a></td>
			<td><a href="inc/brand/process.php?id=<?php echo $row['IDbrand'] ?>">Delete</a></td>
		</tr>
		<?php
		$i++;
		}
	}else{
		echo "Query database failed !";
	}
	?>
</table>