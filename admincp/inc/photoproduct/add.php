<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$sql = "SELECT * FROM detail WHERE IDp=$_GET[id]";
	$run = mysqli_query($con,$sql);
	if($run){
		$row = mysqli_fetch_array($run);
	}

?>
<form action="" method="post" enctype="multipart/form-data">
	<table width="1000px" border="1">
		<tr>
			<td colspan="2"><div align="center">Add product photos</div></td>
		</tr>
		<tr>
			<td>ID product</td>
			<td><input type="text" name="IDp" style="width: 873px; height: 48px;" value="<?php echo $row['IDp'] ?>"></td>
		</tr>
		<tr>
			<td>How many images ?</td>
			<td><input type="text" name="numimg" value="<?php echo $_POST['numimg']; ?>" style=" width: 873px;height: 48px"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="acp_num" value="Accept" /></td>
		</tr>
	</table>
</form>

<?php
if(isset($_POST['acp_num']))
{
            $num=$_POST['numimg'];
            $IDp = $_POST['IDp'];
            echo "You chose $num file upload for the product with ID product $IDp <br />";
            echo "<form action='./inc/photoproduct/process.php?file=$num&id=$IDp' method='post' enctype='multipart/form-data'>";
            for($i=1; $i <= $num; $i++)
            {
                 echo "<input type='file' name='img[]' /><br />";
            }
            echo "<input type='submit' name='add' value='Upload' />";
            echo "</form>";
}
?>