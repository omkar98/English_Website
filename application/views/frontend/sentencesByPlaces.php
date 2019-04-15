<section class="page-content sentences-based-situations">
	<div class="container-fluid">
		<h2>English Conversations based on <span style = "color:#00B4DB;"><b>PLACES</b></span> and <span style = "color:#00B4DB;"><b>SITUATIONS</b></span></h2><br>
		<div class = "panel">
			<div class = "row">
				<?php 	$i = 1;
				foreach($places_list as $row){ 
					$place_name = str_replace(' ', '-', $row['place_name']);
				?>
				<div class = "col-6 col-md-3">
					<div class = "box">
						<h6 class = "title"> <a href = "<?php echo site_url('conversations-based-situations/');?><?php echo $place_name .'/'.$row['id'] ;?>"><?php echo $row['place_name']; ?></a></h6>
						<hr>
						<img src = "<?php echo base_url(); ?>uploads/images/<?php echo $row['place_image']; ?>">
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>