<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$sql = "SELECT * FROM transaction WHERE IDtr=$_GET[id]";
	$run = mysqli_query($con,$sql);
	if($run){
		$row = mysqli_fetch_array($run);
	}
?>
<br>
<h3>Edit detail of orders</h3>
<br>
<form action="./inc/transaction/process.php?id=<?php echo $row['IDtr'] ?>" method="post" enctype="multipart/form-data">
	<table width="1000px" border="1">
		<tr>
			<td>User name</td>
			<td><input type="text" name="userName" style="width: 869px; height: 48px;" value="<?php echo $row['userName'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text" name="total" style="width: 869px;" value="<?php echo $row['total'] ?>"></td>
		</tr>
		<tr>
			<td>Order detail</td>
			<td><textarea rows="4" style="width: 869px;" name="bill"><?php echo $row['bill'] ?></textarea></td>
		</tr>
		<tr>
			<td>First name</td>
			<td>
				<input type="text" name="fname" style="width: 869px;" value="<?php echo $row['fname'] ?>">
			</td>
		</tr>
		<tr>
			<td>Last name</td>
			<td>
				<input type="text" name="lname" style="width: 869px;" value="<?php echo $row['lname'] ?>">
			</td>
		</tr>
		<tr>
			<td>Email</td>
			<td>
				<input type="text" name="email" style="width: 869px;" value="<?php echo $row['email'] ?>">
			</td>
		</tr>
		<tr>
			<td>Phone number</td>
			<td>
				<input type="text" name="phone" style="width: 869px;" value="<?php echo $row['phone'] ?>">
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<input type="text" name="address" style="width: 869px;" value="<?php echo $row['address'] ?>">
			</td>
		</tr>
		<tr>
			<td>Time</td>
			<td><input type="text" name="timemake" style="width: 869px;" value="<?php echo $row['timemake'] ?>" readonly></td>
		</tr>
<?php
	$sql_s = "SELECT * FROM status";
	$result_s = mysqli_query($con,$sql_s);
?>
		<tr >
			<td>Status</td>
			<td>
				<select style="width: 300px; height: 50px" name="IDs">
					<?php if($result_s){
						while ($row_s = mysqli_fetch_array($result_s)) {
							if ($row['IDs']==$row_s['IDs']) {
					?>
					<option  value="<?php echo $row_s['IDs'] ?>" selected="selected">
						<?php echo $row_s['status']; ?>
					</option>
					<?php }else{ ?>
					<option value="<?php echo $row_s['IDs'] ?>">
						<?php echo $row_s['status']; ?>
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
			<td colspan="2">
				<div align="center">
					<button  type="submit" name="submit" value="submit" >
					Edit order
					</button>
				</div>
			</td>
		</tr>
	</table>
</form>