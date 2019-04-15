<section class = "page-content">
	<div class="container">
		<h4><b>TITLES LIST</b></h4>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class = "panel panel-default">
				
				<button class = "btn btn-default btn"><a href = "<?php echo site_url('titles/add'); ?>">Add Title</a></button>

					<hr>
					
						<table class="table table-striped table-bordered" style="width:100%" id = "tablesList">
							<thead>
								<tr>
									<th>Sr.No</th>
									<th>Created At</th>
									<th>Title Name</th>
									<th>Action </th>
								</tr>
							</thead>
							<tbody>
								<?php
							$i=1;
							foreach($titles_list as $key => $val){
								$date = $val['created_at'];
							?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><?php echo date("F d Y, h:i a", strtotime($date)); ?></td>
								<td><?php echo $val['title_name']; ?></td>
<!--								<td><?php echo htmlspecialchars_decode(stripslashes($val['title_text'])); ?></td>-->
								<td><a href = "<?=base_url();?>index.php/Backend/SentencesPlaces/title_delete/<?php echo $val['id']; ?>" class = "delete" style = "color:orangered;border-bottom:dashed;">Delete</a></td>
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
