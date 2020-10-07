	<div class="left" style="height:auto; border: 0.5px solid #000;width: 100%">
		<?php
			if(isset($_GET['ac'])){
				$tam=$_GET['ac'];
			}else{
				$tam='';
			}if($tam=='add'){
				include 'add.php';
			}else($tam=='edit'){
				include 'edit.php'
			}

		?>
	</div>
	<div class="right"style="width: 100%; height:auto; border: 1px solid #000;">
		<?php
			include 'list.php';
		?>
	</div>
