<section class="page-content daily-use-words">
	<div class="container-fluid">
		<h2>Spend 5 minutes daily to learn <span style = "color:#00B4DB;"><b>DAILY USE WORDS</b></span></h2>
		<div class = "panel">
			<div class = "row">
				<div class = "col-md-6">
					<div class = "box">
						<table class = "table table-bordered">
							<tbody>
								<tr>
									<th>English Word</th>
									<th>Hindi Word</th>
								</tr>
								<?php foreach($words_list as $row){ 
	                             if($row['id']%2==1){
								?>
								<tr>
									<td><?php echo $row['english_word']; ?></td>	        
									<td class = "hindi_lang"><?php echo $row['hindi_word']; ?></td>
								</tr>    
								<?php } } ?>
							</tbody>
						</table>
					</div>
				</div>
				<div class = "col-md-6">
					<div class = "box">
						<table class = "table table-bordered">
							<tbody>
								<tr>
									<th>English Word</th>
									<th>Hindi Word</th>
								</tr>
								<?php foreach($words_list as $row){ 
	                             if($row['id']%2==0){
								?>
								<tr>
									<td><?php echo $row['english_word']; ?></td>	        
									<td class = "hindi_lang"><?php echo $row['hindi_word']; ?></td>
								</tr>    
								<?php } } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<?php echo $this->pagination->create_links(); ?>
		</div>
	</div>
</section>