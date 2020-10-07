<div>
	<div class="left">
		<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='add'){
				include 'add.php';
			}else{
				include 'edit.php';
			}
		?>
	</div>
</div>
	<div class="right">
		<?php
			include 'list.php';
		?>
	</div>


