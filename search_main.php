<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 
if(isset($_GET['change'])){ header("Location: ".$site_url."/music/".cano($_GET['q'])); }
$search_term = urlencode($_GET['q']);
$save_search = cano($_GET['q']);
$search_title = str_replace("-", " ", $save_search);
$search_title = ucwords($search_title);
?>
<!DOCTYPE html>
<html>
  <head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title><?php echo $search_title; ?> - <?php echo $search_seo_title;?> - <?php echo $site_title;?></title>
    <meta name="description" content="<?php echo $search_title; ?> - <?php echo $search_seo_title;?> - <?php echo $site_title;?>"/>
	<meta name="robots" content="noodp"/>
	<link rel="canonical" href="<?php echo $site_url;?>/music/<?php echo $save_search;?>" />
	<meta property="og:title" content="<?php echo $search_title; ?> - <?php echo $search_seo_title;?> - <?php echo $site_title;?>" />
    <meta property="og:description" content="<?php echo $search_title; ?> - <?php echo $search_seo_title;?> - <?php echo $site_title;?>" />
    <meta property="og:url" content="<?php echo $site_url;?>/music/<?php echo $save_search;?>" />
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
<?php if(isset($search_ad_728) and !empty($search_ad_728)): ?>
<div style="margin:30px 0px 0px 0px;">
<?php $search_ad_728 = str_replace('@', '"', $search_ad_728);
echo $search_ad_728; ?>
</div>
<?php endif; ?>
			<div class="page-header">
			  <h2><small><?php echo $searchresults_title; ?>: </small><br><?php echo $search_title; ?></h2>
			</div>

		</div>
	</div>
</div>


<?php include 'includes/yt_search.php';?>
			
	
<?php
if (empty($_GET['page'])) {
	// Blocked keywords
	$badWordList = file_get_contents("includes/blockedkeywords.txt",NULL);
    $badWordArray = explode("\n", $badWordList);
  
	function check_forbidden($forbiddennames, $stringtocheck) 
	{
    foreach ($forbiddennames as $name) {
        if (stripos($stringtocheck, $name) !== FALSE) {
            return true;
        }
    }
	}	

	if(check_forbidden($badWordArray, $save_search)) {
    
	} else {
    $fpp = "includes/searchterms.txt";
	$searchlog = "[s]:".$save_search."\n";
	file_put_contents($fpp, $searchlog, FILE_APPEND);
	}
}



?>
<?php include 'includes/footer.php';?>