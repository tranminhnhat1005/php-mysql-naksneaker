<form action="./inc/brand/process.php" method="post" enctype="multipart/form-data">
	<table width="100%" border="1">
		<tr>
			<td colspan="2">
				<div align="center">Add brand</div>
			</td>
		</tr>
		<tr>
			<td>Brand name</td>
			<td><input type="text" name="brandname"></td>
		</tr>
		<tr>
			<td>Sort</td>
			<td><input type="text" name="sort"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td><input type="file" name="image" style="width: 100%;"></td>
		</tr>
		<tr>
			<td colspan="2">
				<div align="center">
					<input type="submit" name="add" id="add" value="Add">
				</div>
			</td>
		</tr>
	</table>
</form>