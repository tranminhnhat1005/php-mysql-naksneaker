



<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li>
			<a href="#">Brand</a>
			<ul class="sub-menu">
				<li><a href="index.php?manage=brand&ac=add">Add</a></li>
				<li><a href="index.php?manage=brand&ac=edit">Edit</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Product</a>
			<ul class="sub-menu">
				<li><a href="index.php?manage=detail&ac=add">Add</a></li>
				<li><a href="index.php?manage=detail&ac=edit">Edit</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Photo product</a>
			<ul class="sub-menu">
				<li><a href="index.php?manage=photoproduct&ac=add">Add</a></li>
			</ul>
		</li>
		<li>
			<a href="#">Transaction</a>
			<ul class="sub-menu">
				<li><a href="index.php?manage=transaction&ac=checkbill">New order</a></li>
				<li><a href="index.php?manage=transaction&ac=processing">Processing order</a></li>
				<li><a href="index.php?manage=transaction&ac=shipped">Shipped order</a></li>
				<li><a href="index.php?manage=transaction&ac=canceled">Canceled order</a></li>
				<li><a href="index.php?manage=transaction&ac=done">Done order</a></li>
			</ul>
		</li>
		<li>
			<a href="./inc/report.php">Report</a>
		</li>
		<li>
			<a href="#">Account</a>
			<ul class="sub-menu">
				<li><a href="lib/changepw.php">Admin: <?php echo $_SESSION['adminName'] ?></a></li>
				<li><a href="lib/logout.php">Logout</a></li>
			</ul>
		</li>
	</ul>
</div>
























