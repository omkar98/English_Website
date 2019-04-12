<section class = "page-content">
	<div class="container">
		<h4><b>DAILY USE WORDS</b></h4>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class = "panel panel-default">
					<form method="post" action="<?php echo site_url('Backend/Words/add/');?>">
						<div class = "row">
							<div class = "col-md-4">
								<label>Enter English Word</label>
								<input type="text"  class="form-control" name="english_word" value="" placeholder="" required>
							</div>
							<div class = "col-md-4">
								<label>Enter Hindi Word</label>
								<input type="text"  class="form-control" name="hindi_word" value="" placeholder="" required>
							</div>
							<div class = "col-md-4">
								<br><button class="btn btn-primary" type="submit">Add New</button>
							</div>
						</div>
					</form>
					<br><br>
						<table class="table table-striped table-bordered" style="width:100%" id = "tablesList">
							<thead>
								<tr>
									<th>Sr.No</th>
									<th>Created At</th>
									<th>English Word</th>
									<th>Hindi Word</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody id = "word_data">
								<?php
							$i=1;
							foreach($words_list as $key => $val){
								$date = $val['created_at'];
							?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo date("F d Y, h:i a", strtotime($date)); ?></td>
								<td contenteditable class = "update" data-id = "<?php echo $val['id']; ?>" data-column = "english_word"><?php echo $val['english_word']; ?></td>
								<td contenteditable class = "update" data-id = "<?php echo $val['id']; ?>" data-column = "hindi_word"><?php echo $val['hindi_word']; ?></td>
								<td><a href = "<?=base_url();?>index.php/Backend/Words/delete/<?php echo $val['id']; ?>" class = "delete" style = "color:orangered;border-bottom:dashed;">Delete</a></td>
							</tr>
							<?php 
							}
						?>
							</tbody>
						</table>
				</div>
			</div>
		</div>
	</div>
</section>
