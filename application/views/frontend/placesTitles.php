<section class="page-content sentences-titles">
	<div class="container-fluid">
	<?php $place_name = str_replace('-', ' ', $title); ?>
		<h2>Conversations based on <span style = "color:#00B4DB;"><b><?php echo $place_name; ?></b></span></h2><br>
		<div class = "panel">
			<div class = "row">
			<?php foreach($places_titles_list as $row) { ?>
			<div class = "col-md-6">
				<div class = "box">
					<h4><?php echo $row['title_name']; ?></h4><hr>
					<table class = "table table-bordered">
						<p><?php echo htmlspecialchars_decode(stripslashes($row['title_text'])); ?></p>
					</table>
					
				</div>
			</div>
			<?php } ?>
			</div>
		</div>
	</div>
</section>