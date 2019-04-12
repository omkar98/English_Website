
<section class = "footer">
<div class = "container">
	<div class = "row">
			<h5>Copyright 2019. Developed by EnglishGuru Team</h5>
	</div>
</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" language="javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script type = "text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>

<script type = "text/javascript" language="javascript" src = "https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>

<script type = "text/javascript" src = "https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script> 

<script type = "text/javascript" src = "https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

<script type = "text/javascript" src = "https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>

<script>var base_url = '<?php echo base_url() ?>index.php/';</script>
<script type = "text/javascript" language = "javascript" src = "<?php echo base_url('js/main.js');?>"></script>
<script>
	toastr.options = {
		positionClass : "toast-top-center"
	};
	<?php if($this->session->flashdata('success')){ ?>
	toastr.success("<?php echo $this->session->flashdata('success'); ?>");
	<?php }else if($this->session->flashdata('error')){  ?>
	toastr.error("<?php echo $this->session->flashdata('error'); ?>");
	<?php }else if($this->session->flashdata('warning')){  ?>
	toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
	<?php }else if($this->session->flashdata('info')){  ?>
	toastr.info("<?php echo $this->session->flashdata('info'); ?>");
	<?php } ?>
</script>
</body>
</html>