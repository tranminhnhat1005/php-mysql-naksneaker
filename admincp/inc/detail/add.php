<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js"></script>
<script>tinymce.init({selector:'textarea'});</script> -->


<form action="./inc/detail/process.php" method="post" enctype="multipart/form-data">
	<table width="1000px" border="1">
		<tr>
			<td colspan="2"><div align="center">Add details product</div></td>
		</tr>
		<tr>
			<td>Product name</td>
			<td><input type="text" name="pname" style="width: 869px; height: 48px;"></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="price" style="width: 869px;"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<p style="float: left;">Image of product</p>
				<input type="file" name="image" style="width: 100%;">
				<p style="float: left;">Image of hot product</p>
				<input type="file" name="imagehot" style="width: 100%;">
			</td>
		</tr>
		<tr>
			<td>Size</td>
			<td><input type="text" name="size" style="width: 869px;"></td>
		</tr>
		<tr>
			<td>Note</td>
			<td>
				<input type="checkbox" name="notenew" value="new">New product
				<input type="checkbox" name="notehot" value="hot">Hot product
			</td>
		</tr>
		<tr>
			<td>Describe</td>
			<td><textarea name="pdes" cols="120" rows="3"></textarea></td>
		</tr>
		<?php
			$sql = "SELECT * FROM brand";
			$result = mysqli_query($con,$sql);
		?>

		<tr>
			<td>Brand</td>
			<td>
				<select name="IDbrand">
					<?php
						if($result){
							while ($row = mysqli_fetch_array($result)) {
					?>
					<option value="<?php echo $row['IDbrand'] ?>">
						<?php echo $row['brandname'] ?>
					</option>
					<?php
							}
						}
					?>

				</select>
			</td>
		</tr>
		<tr>
			<td>Sort</td>
			<td><input type="text" name="psort" style="width: 869px;"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<button  type="submit" name="add" value="add" >Add</button>
				</div>
			</td>
		</tr>
	</table>
</form>