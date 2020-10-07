<div class="content">
	<div>
		<?php
			if(isset($_GET['watch'])){
				$tam=$_GET['watch'];
			}else{
				$tam='';
			}if($tam=='brand'){
				include 'brand.php';
			}elseif($tam=='detail'){
				include 'detail.php';
			}elseif($tam=='cart'){
				include 'cart.php';
			}elseif(isset($_POST['searchbtn'])){
				include 'search.php';
			}
		?>
	</div>
</div>