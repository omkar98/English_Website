<section class = "page-content">
	<div class="container">
		<h4><b>PLACES LIST</b></h4>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class = "panel panel-default">
					<form method = "post" enctype="multipart/form-data" action="<?php echo site_url('Backend/SentencesPlaces/insert/');?>">
						<div class = "row">
							<div class = "col-md-6">
								<label>Enter Place Name</label>
								<input type="text"  class="form-control" name="place_name" value="" placeholder="" required>
							</div>
							<div class = "col-md-3">
								<label>Add Place Image</label>
								<br>
								<input type = "file" name = "place_image" size = "20" >
							</div>
							<div class = "col-md-2">
							<br>
								<button type="submit" class="btn btn-success btn-block">Submit</button>
							</div>
						</div>
						<br>
					</form>
					<hr>
					<br><br>
						<table class="table table-striped table-bordered" style="width:100%" id = "tablesList">
							<thead>
								<tr>
									<th>Sr.No</th>
									<th>Created At</th>
									<th>Place Name</th>
									<th>Place Image</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody id = "word_data">
								<?php
							$i=1;
							foreach($places_list as $key => $val){
								$date = $val['created_at'];
							?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo date("F d Y, h:i a", strtotime($date)); ?></td>
								<td contenteditable class = "update" data-id = "<?php echo $val['id']; ?>" data-column = "english_word"><?php echo $val['place_name']; ?></td>
								<td><img src = "<?php echo base_url(); ?>uploads/images/<?php echo $val['place_image']; ?>" width = "20%"></td>
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
