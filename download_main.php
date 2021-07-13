<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 

$json = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$_GET["q"].'&key='.$youtube_key.'&part=snippet');
$yt_data = json_decode($json);
$yt_id = $_GET["q"];
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php echo $yt_data->items[0]->snippet->title; ?> - <?php echo $videopage_title;?> - <?php echo $site_title;?></title>
    <meta name="description" content="<?php echo htmlspecialchars($yt_data->items[0]->snippet->title); ?> - <?php echo $videopage_title;?> - <?php echo $site_title;?>">
    <meta name="robots" content="noindex, follow"/>
    <meta property="og:title" content="<?php echo htmlspecialchars($yt_data->items[0]->snippet->title); ?> - <?php echo $videopage_title;?> - <?php echo $site_title;?>" />
    <meta property="og:description" content="<?php echo htmlspecialchars($yt_data->items[0]->snippet->title); ?> - <?php echo $videopage_title;?> - <?php echo $site_title;?>" />
    <meta property="og:url" content="<?php echo $site_url;?>/download/<?php echo $yt_id; ?>/<?php echo cano($yt_data->items[0]->snippet->title); ?>" />
    <meta property="og:image" content="https://img.youtube.com/vi/<?php echo $yt_id; ?>/hqdefault.jpg" />
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="<?php echo $site_title;?>" />
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
			  <h3><?php echo '' . $yt_data->items[0]->snippet->title . ''; ?></h3>
			</div>

		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<?php if($show_vid_embed): ?>
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $yt_id; ?>?rel=0&modestbranding=1&showinfo=0" frameborder="0" allowfullscreen></iframe>
			</div>
			<br>
		<?php endif; ?>	
<?php if(isset($down_ad_728) and !empty($down_ad_728)): ?>
<div style="margin:0px 0px 20px 0px;">
<?php $down_ad_728 = str_replace('@', '"', $down_ad_728);
echo $down_ad_728; ?>
</div>
<?php endif; ?>		
		<?php if($show_down_but): ?>
			<div class="btn-group btn-group-justified">
			<div class="btn-group">
			<button type="button" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#downloads" title="<?php echo $vid_down_but; ?>"><span class="glyphicon glyphicon-download-alt" aria-hidden="true" style="margin-right: 5px;"></span> <?php echo $vid_down_but; ?></button>
			</div>
			</div>
			<br>
		<?php endif; ?>	
			<?php if($show_vid_descr): ?>
			<p><?php echo $yt_data->items[0]->snippet->description; ?></p>
			<?php endif; ?>
			<?php if($show_rel_searches): ?>
			<?php if(!empty($yt_data->items[0]->snippet->tags)): ?>
			<div class="page-header">
			<h3><?php echo $vid_recen_title; ?></h3>
			</div>
			<?php foreach ($yt_data->items[0]->snippet->tags as $items) { echo '<a class="btn btn-info btn-xs" style="margin:0px 2px 2px 0px;" href="'.$site_url.'/music/'.cano($items).'">'.$items.'</a>'; } ?>
			<?php endif; ?>
			<?php endif; ?>
		</div>

		
	</div>
</div>

<div class="modal fade" id="downloads" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $vid_down_but; ?></h4>
      </div>
      <div class="modal-body" style="max-width: 340px;margin: 0px auto;">
<?php if(isset($downmod_ad_300) and !empty($downmod_ad_300)): ?>
<div style="text-align: center;margin:0px 0px 20px 0px;">
<?php $downmod_ad_300 = str_replace('@', '"', $downmod_ad_300);
echo $downmod_ad_300; ?>
</div>
<?php endif; ?>		  
<center>
	<iframe src="https://yt2mp3s.me/api/button/mp3/<?php echo $yt_id; ?>" width="100%" height="100px" scrolling="no" style="border:none;"></iframe>
</center>
	

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<?php include 'includes/footer.php';?>
