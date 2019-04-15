<section class = "page-content">
	<div class="container">
		<h4><b>ADD CHAT TITLE BASED ON PLACES/SITUATIONS</b></h4>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class = "panel panel-default">
					<form method = "post" action="<?php echo site_url('Backend/SentencesPlaces/title_insert/');?>">
						<div class = "row">
							<div class = "col-md-6">
								<label>Title Name</label>
								<input type = "text" class = "form-control" name = "title_name">
							</div>
							<div class = "col-md-6">
								<label>Select Place Option</label>
								<select class = "form-control" name = "place_id">
									<?php foreach($places_list as $row){ ?>
									<option value = "<?php echo $row['id']; ?>"><?php echo $row['place_name']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<br>
						<div class = "row">
							<div class = "col-md-12">
								<label>Add Chat</label>
								<textarea class = "form-control" name = "title_text" rows = "10"></textarea>
							</div>
						</div>
						<br>
						<button class = "btn btn-success" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

