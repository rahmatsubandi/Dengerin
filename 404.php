<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>404 Not Found</title>
    <meta name="description" content="404 Not Found"/>
	<meta name="robots" content="noindex, follow"/>
    <!-- CSS and Scripts -->
	<?php include 'includes/headscripts.php'; ?>
  </head>
  <body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
			<center><h1><a href="<?php echo $site_url; ?>"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> <?php echo $site_title; ?></a></h1></center>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<!-- Search Form -->
		<form action="<?php echo $site_url;?>/search_main.php" class="input-group input-group-lg">
		<input id="you-search" name="q" type="text" class="form-control" autocomplete="off" placeholder="<?php echo $searchf_text; ?>">
		<input type="hidden" name="change" value="1">
		<span class="input-group-btn">
		<button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
		</span>
		</form>
		<!-- /Search Form -->
		</div>
	</div>
</div>

  <div class="container">
	<div class="row">
		<div class="col-md-12">

			<div class="page-header">
			  <center><h1>404<small>Sorry, Page Not Found</small></h1></center>
			</div>

		</div>
	</div>
</div>



<?php include 'includes/footer.php';?>