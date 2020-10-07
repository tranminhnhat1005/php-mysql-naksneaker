<?php
	$sql = "SELECT * FROM transaction,status WHERE status.IDs=transaction.IDs AND transaction.IDs=2 ORDER BY transaction.timemake";
	$result = mysqli_query($con,$sql);
?>

<br>
<h3>List of Delivery orders</h3>
<br>


<table width="1000px" border="1">
	<tr>
		<td>#</td>
		<td>ID</td>
		<td>User name</td>
		<td>Order detail</td>
		<td>Price</td>
		<td>Contact</td>
		<td>Time</td>
		<td>Status</td>
		<td colspan="2">Manage</td>
	</tr>

<?php
	$i = 0;
	if($result){
		while ($row = mysqli_fetch_array($result)) {

?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['IDtr']; ?></td>
		<td><?php echo $row['userName']; ?></td>
		<td><textarea rows="4"><?php echo $row['bill']; ?></textarea></td>
		<td><?php echo $row['total']; ?></td>
		<td><?php echo $row['fname'].' ',$row['lname'].'<br/>'.$row['email'].'<br/>'.$row['phone'].'<br/>'.$row['address'] ?></td>
		<td><?php echo $row['timemake'] ?></td>
		<td><?php echo $row['status']; ?></td>
		<td><a href="index.php?manage=transaction&ac=edit&id=<?php echo $row['IDtr'] ?>">Edit</a></td>
		<td><a href="inc/transaction/process.php?id=<?php echo $row['IDtr'] ?>">Delete</a></td>
	</tr>
<?php $i++; }} ?>
</table>