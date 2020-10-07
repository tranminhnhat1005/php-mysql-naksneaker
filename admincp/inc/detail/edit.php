
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$sql = "SELECT * FROM detail WHERE IDp=$_GET[id]";
	$run = mysqli_query($con,$sql);
	if($run){
		$row = mysqli_fetch_array($run);
	}
?>


<form action="./inc/detail/process.php?id=<?php echo $row['IDp'] ?>" method="post" enctype="multipart/form-data">
	<table width="1000px" border="1">
		<tr>
			<td colspan="2"><div align="center">Edit details product</div></td>
		</tr>
		<tr>
			<td>Product name</td>
			<td><input type="text" name="pname" style="width: 869px; height: 48px;" value="<?php echo $row['pname'] ?>"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" style="width: 869px;" value="<?php echo $row['price'] ?>"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<p style="float: left;">Image of product</p>
				<input type="file" name="image" style="width: 100%;">
				<img src="inc/detail/uploads/<?php echo $row['image'] ?>"  width="300px" height="auto">
				<p style="float: left;">Image of hot product</p>
				<input type="file" name="imagehot" style="width: 100%;">
				<img src="inc/detail/uploads/<?php echo $row['imagehot'] ?>"  width="300px" height="auto">
			</td>
		</tr>
		<tr>
			<td>Size</td>
			<td><input type="text" name="size" style="width: 869px;" value="<?php echo $row['size'] ?>"></td>
		</tr>
		<tr>
			<td>Note</td>
			<td>
				<?php if($row['new'] == 1){ ?>
				<input type="checkbox" name="notenew" value="new" checked>New product
				<?php }else{ ?>
				<input type="checkbox" name="notenew" value="new">New product
				<?php } ?>

				<?php if($row['hot'] == 1){ ?>
				<input type="checkbox" name="notehot" value="hot" checked>Hot product
				<?php }else{ ?>
				<input type="checkbox" name="notehot" value="hot">Hot product
				<?php } ?>
			</td>
		</tr>
		<tr>
			<td>Describe</td>
			<td>
				<textarea name="pdes" style="width: 869px" value="<?php echo $row['pdes'] ?>"><?php echo $row['pdes'] ?>
				</textarea>
			</td>
		</tr>
		<?php
			$sql_brand = "SELECT * FROM brand";
			$result_brand = mysqli_query($con,$sql_brand);
		?>

		<tr>
			<td>Brand</td>
			<td>
				<select name="IDbrand">
					<?php
						if($result_brand){
							while ($row_brand = mysqli_fetch_array($result_brand)){
								if($row['IDbrand']==$row_brand['IDbrand']){
					?>
					<option selected="selected" style="width: 100%;" value="<?php echo $row_brand['IDbrand'] ?>">
						<?php echo $row_brand['brandname'] ?>
					</option>
					<?php
							}else{
					?>
					<option style="width: 100%;" value="<?php echo $row_brand['IDbrand'] ?>">
						<?php echo $row_brand['brandname'] ?>
					</option>
			<?php
					}
				}
			}
			?>

				</select>
			</td>
		</tr>
		<tr>
			<td>Sort</td>
			<td><input type="text" name="psort" style="width: 869px;" value="<?php echo $row['psort'] ?>"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<button  type="submit" name="edit" value="edit" >Edit</button>
				</div>
			</td>
		</tr>
	</table>
</form>