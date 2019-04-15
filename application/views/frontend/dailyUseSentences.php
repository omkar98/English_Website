<section class="page-content daily-use-sentences">
	<div class="container-fluid">
		<h2>Spend 15 minutes daily to learn <span style = "color:#00B4DB;"><b>DAILY USE SENTENCES</b></span></h2><br>
		<div class = "panel">
			<div class = "row">
				<div class = "col-md-6">
					<div class = "box">
						<div class = "row">
							<?php foreach($sentences_list as $row){ 
	                           if($row['id']%2==1){
							?>
							<div class = "col-md-12 sentence-box">
								<h6><?php echo $row['english_sentence']; ?></h6>
								<h6 class = "hindi_lang"><?php echo $row['hindi_sentence']; ?></h6>
							</div>
							<?php } } ?>
						</div>
					</div>
				</div>
				<div class = "col-md-6">
					<div class = "box">
						<div class = "row">
							<?php foreach($sentences_list as $row){ 
	                           if($row['id']%2==0){
							?>
							<div class = "col-md-12 sentence-box">
								<h6><?php echo $row['english_sentence']; ?></h6>
								<h6 class = "hindi_lang"><?php echo $row['hindi_sentence']; ?></h6>
							</div>
							<?php } } ?>
						</div>
					</div>
				</div>
			</div>
			<!--			<?php echo $this->pagination->create_links(); ?>-->
		</div>
	</div>
</section>