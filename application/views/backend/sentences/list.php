<section class = "page-content">
	<div class="container">
		<h4><b>DAILY USE SENTENCES</b></h4>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class = "panel panel-default">
					<form method="post" action="<?php echo site_url('Backend/Sentences/add/');?>">
						<div class = "row">
							<div class = "col-md-4">
								<label>Enter English Sentence</label>
								<input type="text"  class="form-control" name="english_sentence" value="" placeholder="" required>
							</div>
							<div class = "col-md-4">
								<label>Enter Hindi Sentence</label>
								<input type="text"  class="form-control" name="hindi_sentence" value="" placeholder="" required>
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
									<th>English Sentence</th>
									<th>Hindi Sentence</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody id = "sentence_data">
								<?php
							$i=1;
							foreach($sentences_list as $key => $val){
								$date = $val['created_at'];
							?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo date("F d Y, h:i a", strtotime($date)); ?></td>
								<td contenteditable class = "update" data-id = "<?php echo $val['id']; ?>" data-column = "english_sentence"><?php echo $val['english_sentence']; ?></td>
								<td contenteditable class = "update" data-id = "<?php echo $val['id']; ?>" data-column = "hindi_sentence"><?php echo $val['hindi_sentence']; ?></td>
								<td><a href = "<?=base_url();?>index.php/Backend/Sentences/delete/<?php echo $val['id']; ?>" class = "delete" style = "color:orangered;border-bottom:dashed;">Delete</a></td>
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
