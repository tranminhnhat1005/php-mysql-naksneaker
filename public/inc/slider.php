<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	$con = mysqli_connect('localhost','root','','n') or die('Connection error');
?>
	<nav>
		<div id="slides" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
			<?php
				$u = 0;
				$i = 1;
				$sql_hot="SELECT * FROM detail WHERE hot = $i ";
				$result_hot=mysqli_query($con,$sql_hot);
				if($result_hot){
					while($row_hot=mysqli_fetch_array($result_hot)){
			?>
				<div class="carousel-item <?php if($u==0){ echo "active";}else{echo "";} ?>">
    				<img class="img-fluid" style="width: 100%" src="../admincp/inc/detail/uploads/<?php echo $row_hot['imagehot'] ?>" alt="">
    				<div class="carousel-caption">
    					<h1 class="display-2"><?php echo $row_hot['pname'] ?></h1>
    					<button type="button" class="btn btn-outline btn-lg"><a class="button-get" style="text-decoration: none; color: blue;"  href="detail.php?watch=detail&id=<?php echo $row_hot['IDp'] ?>">GET IT NOW</a></button>
    				</div>
    			</div>
			<?php
					$u++;
					}
				}
			?>
			</div>
			<a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
    			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="carousel-control-next" href="#slides" role="button" data-slide="next">
   				<span class="carousel-control-next-icon" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</nav>

