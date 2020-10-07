<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$id=$_GET['id'];
	$sql_photo = "SELECT * FROM detail,detailphoto WHERE detail.IDp=detailphoto.IDp AND detailphoto.IDp=$_GET[id] ";
	$run_photo = mysqli_query($con,$sql_photo);
	if($run_photo){
?>

	<table width="1000px" border="1">
		<tr>
			<td colspan="5"><div align="center">Edit product photos</div></td>
		</tr>
		<tr>
			<td>ID product</td>
			<td colspan="4"><input type="text" name="IDp" style="width: 906px; height: 48px;" value="<?php echo $id ?>"></td>
		</tr>
	</table>
		<?php
			while ($row_photo = mysqli_fetch_array($run_photo)){
		?>
		<form action="./inc/photoproduct/process.php?id=<?php echo $row_photo['IDphoto'] ?>" method="post" enctype="multipart/form-data">
			<table width="1000px" border="1">
				<tr>
					<td style="width: 190px">Name : <?php echo $row_photo['photoname'] ?></td>
					<td style="width: auto; height: 48px;"><img src="inc/photoproduct/<?php echo $row_photo['photosrc'] ?>"  width="300px" height="auto"></td>
					<td>
						<p>Upload new photo</p>
						<input type="file" name="newphoto" style="width: 100%">
					</td>
					<td>
						<button type="submit" name="upload" value="upload">Upload</button>
					</td>
					<td>
						<button href="/inc/photoproduct/process.php?id=<?php echo $row_photo['IDphoto'] ?>">Delete</button>
					</td>
				</tr>
			</table>
		</form>
		<?php
				}
			}
		?>


