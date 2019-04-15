<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
		<link href="<?php echo base_url('css/admin.css');?>" rel="stylesheet">
		<link href = "https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
		<link href = "https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css" rel = "stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
			</head>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">English Guru</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('daily-use-sentences/list');?>">Daily use Sentences</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('daily-words/list');?>">Daily use Words</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('places/list');?>">Places List</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?php echo site_url('titles/list');?>">Titles List</a>
				</li>
			</ul>
		</div>
	</nav><!--End Navigation Bar-->
	<body>
