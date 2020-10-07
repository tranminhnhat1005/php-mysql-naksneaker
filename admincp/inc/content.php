<div class="content">
	<?php
		if(isset($_GET['manage'])){
			$tam=$_GET['manage'];
		}else{
			$tam='';
		}if($tam=='brand'){
			include 'brand/main.php';
		}if($tam=='detail'){
			include 'detail/main.php';
		}if($tam=='photoproduct'){
			include 'photoproduct/main.php';
		}if($tam=='transaction'){
			include 'transaction/main.php';
		}

	?>
</div>
<div class="clear"></div>