<?php
session_start();
include 'config.php';
include 'class.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>SongCharts Admin</title>
    <meta name="description" content="Admin">
    <link href="../themes/sandstone.min.css" rel="stylesheet" type="text/css">
	<link href="../style.css" rel="stylesheet" type="text/css">
	<link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 

</head>

<body>
 <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand"><span class="glyphicon glyphicon-music" aria-hidden="true"></span> SongCharts</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	
      <ul class="nav navbar-nav navbar-right">
	  
		<li><a href="../admin/index.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Admin</a></li>
		<li><a href="../"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> View Site</a></li>
		<?php if(isset($_SESSION['username'])){	?>
		<li><a href="index.php?logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span> Logout</a></li>
		<?php } ?>
      </ul>
	
  </div>
  </div>
</nav>

   

    <div class="container well" style="padding:60px;">
    
  	  	<div class="well">

	  	  	<?php //if(isset($_SESSION['username'])&&$_SESSION['username']==='admin'){
if(isset($_SESSION['username'])){
			?>

<h2>Admin Panel</h2>
<hr>
<br>

	  	  			<?php if(isset($_GET['updated'])){ echo '<div class="alert alert-success"><h5><center>Settings Updated Successfully!</center></h5></div>'; }

	  	  			if(isset($_GET['file-error'])){ echo '<div class="alert alert-danger"><h5><center>Error :
	  	  			 Config.php is not writable. Please Change its file Permission to 777.</center></h5></div>'; }


	  	  			?>

<form class="form-horizontal" action="index.php" method="post" class="admin" >
<div class="form-group">
	<div class="col-lg-9">
	<input type="hidden" name="update">
	<input type="submit"  class="btn btn-primary" value="Update">
	</div>
</div>	
<br>
<legend>Login Settings</legend>
<div class="form-group">
	<label class="col-lg-3 control-label">Username</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $username; ?>" name="username">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Password</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $password; ?>" name="newpassword">
	</div>
</div>
<br>
<legend>Main Site Settings</legend>
<div class="form-group">
	<label class="col-lg-3 control-label">Website URL</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $site_url; ?>" name="site_url">
	<span class="help-block">Start with 'http://' and without 'www' and do not end with '/'</span>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Website Title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $site_title; ?>" name="site_title">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">YouTube API Key(s)</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $youtube_key; ?>" name="youtube_key">
	<input type="text" class="form-control" value="<?php echo $youtube_key_2; ?>" name="youtube_key_2">
	<input type="text" class="form-control" value="<?php echo $youtube_key_3; ?>" name="youtube_key_3">
	<input type="text" class="form-control" value="<?php echo $youtube_key_4; ?>" name="youtube_key_4">
	<input type="text" class="form-control" value="<?php echo $youtube_key_5; ?>" name="youtube_key_5">
	<input type="text" class="form-control" value="<?php echo $youtube_key_6; ?>" name="youtube_key_6">
	<input type="text" class="form-control" value="<?php echo $youtube_key_7; ?>" name="youtube_key_7">
	<input type="text" class="form-control" value="<?php echo $youtube_key_8; ?>" name="youtube_key_8">
	<input type="text" class="form-control" value="<?php echo $youtube_key_9; ?>" name="youtube_key_9">
	<input type="text" class="form-control" value="<?php echo $youtube_key_10; ?>" name="youtube_key_10">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">AddThis ID</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $addthis_id; ?>" name="addthis_id">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Contact Form Email</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $contact_email; ?>" name="contact_email">
	</div>
</div>
<div class="form-group">
      <label for="select" class="col-lg-3 control-label">Website Theme</label>
      <div class="col-lg-9">
        <select class="form-control" name="site_theme">
		<?php if(!empty($site_theme)){
				echo '<option selected="" value="'.$site_theme.'">'.$site_theme.'</option>';
			} ?>
          <option value="bootstrap">bootstrap</option>
          <option value="cerulean">cerulean</option>
          <option value="cosmo">cosmo</option>
          <option value="cyborg">cyborg</option>
          <option value="darkly">darkly</option>
		  <option value="flatly">flatly</option>
		  <option value="journal">journal</option>
		  <option value="lumen">lumen</option>
		  <option value="paper">paper</option>
		  <option value="readable">readable</option>
		  <option value="sandstone">sandstone</option>
		  <option value="simplex">simplex</option>
		  <option value="slate">slate</option>
		  <option value="solar">solar</option>
		  <option value="spacelab">spacelab</option>
		  <option value="superhero">superhero</option>
		  <option value="united">united</option>
		  <option value="yeti">yeti</option>
        </select>
       
      </div>
</div>
<div class="form-group">
      <label for="select" class="col-lg-3 control-label">Homepage Charts Country</label>
      <div class="col-lg-9">
        <select class="form-control" name="home_chart_country">
		<?php if(!empty($home_chart_country)){
				echo '<option selected="" value="'.$home_chart_country.'">'.$home_chart_country.'</option>';
			} ?>
		<option value="AI" >Anguilla</option>
      <option value="AR" >Argentina</option>
	  <option value="AM" >Armenia</option>
      <option value="AU" >Australia</option>
      <option value="AT" >Austria</option>
	  <option value="AZ" >Azerbaijan</option>
	  <option value="BS" >Bahamas</option>
	  <option value="BH" >Bahrain</option>
	  <option value="BB" >Barbados</option>
	  <option value="BY" >Belarus</option>
      <option value="BE" >Belgium</option>
	  <option value="BZ" >Belize</option>
	  <option value="BM" >Bermuda</option>
	  <option value="BO" >Bolivia</option>
	  <option value="BW" >Botswana</option>
      <option value="BR" >Brazil</option>
	  <option value="BG" >Bulgaria</option>
	  <option value="BF" >Burkina Faso</option>
	  <option value="KH" >Cambodia</option>
      <option value="CA" >Canada</option>
      <option value="CL" >Chile</option>
      <option value="CO" >Colombia</option>
      <option value="CR" >Costa Rica</option>
      <option value="HR" >Croatia</option>
      <option value="CZ" >Czech Republic</option>
      <option value="DK" >Denmark</option>
	  <option value="EG" >Egypt</option>
      <option value="SV" >El Salvador</option>
	  <option value="EE" >Estonia</option>
	  <option value="FJ" >Fiji</option>
      <option value="FI" >Finland</option>
      <option value="FR" >France</option>
	  <option value="GM" >Gambia</option>
      <option value="DE" >Germany</option>
	  <option value="GH" >Ghana</option>
      <option value="GR" >Greece</option>
      <option value="GT" >Guatemala</option>
	  <option value="HN" >Honduras</option>
      <option value="HK" >Hong Kong</option>
      <option value="HU" >Hungary</option>
      <option value="IN" >India</option>
      <option value="ID" >Indonesia</option>
      <option value="IE" >Ireland</option>
      <option value="IL" >Israel</option>
      <option value="IT" >Italy</option>
      <option value="JP" >Japan</option>
	  <option value="JO" >Jordan</option>
	  <option value="KZ" >Kazakhstan</option>
      <option value="KR" >Republic of Korea</option>
      <option value="KW" >Kuwait</option>
	  <option value="LV" >Latvia</option>
      <option value="LB" >Lebanon</option>
	  <option value="LT" >Lithuania</option>
      <option value="LU" >Luxembourg</option>
      <option value="MY" >Malaysia</option>
	  <option value="MT" >Malta</option>
      <option value="MX" >Mexico</option>
	  <option value="MN" >Mongolia</option>
	  <option value="MZ" >Mozambique</option>
	  <option value="NA" >Namibia</option>
	  <option value="NP" >Nepal</option>
      <option value="NL" >Netherlands</option>
      <option value="NZ" >New Zealand</option>
	  <option value="NI" >Nicaragua</option>
	  <option value="NE" >Niger</option>
	  <option value="NG" >Nigeria</option>
      <option value="NO" >Norway</option>
	  <option value="OM" >Oman</option>
      <option value="PK" >Pakistan</option>
      <option value="PA" >Panama</option>
	  <option value="PY" >Paraguay</option>
      <option value="PE" >Peru</option>
      <option value="PH" >Philippines</option>
      <option value="PL" >Poland</option>
      <option value="PT" >Portugal</option>
      <option value="QA" >Qatar</option>
      <option value="RO" >Romania</option>
      <option value="RU" >Russia</option>
      <option value="SA" >Saudi Arabia</option>
      <option value="SG" >Singapore</option>
      <option value="SK" >Slovakia</option>
      <option value="SI" >Slovenia</option>
      <option value="ZA" >South Africa</option>
      <option value="ES" >Spain</option>
      <option value="LK" >Sri Lanka</option>
      <option value="SE" >Sweden</option>
      <option value="CH" >Switzerland</option>
      <option value="TW" >Taiwan</option>
      <option value="TH" >Thailand</option>
      <option value="TR" >Turkey</option>
	  <option value="UG" >Uganda</option>
	  <option value="UA" >Ukraine</option>
      <option value="GB" >United Kingdom</option>
      <option value="US" >United States</option>
      <option value="AE" >United Arab Emirates</option>
      <option value="VE" >Venezuela</option>
      <option value="VN" >Vietnam</option>
	  <option value="ZW" >Zimbabwe</option>
        </select>
       
      </div>
</div>
<div class="form-group">
      <label for="select" class="col-lg-3 control-label">Homepage Charts Genre</label>
      <div class="col-lg-9">
        <select class="form-control" name="home_chart_genreid">
		<?php if(!empty($home_chart_genreid)){
$home_chart_genre_title = explode('-',$home_chart_genreid,2);
$home_chart_genre_title = str_replace('-', ' ', $home_chart_genre_title[1]);
$home_chart_genre_title = ucwords($home_chart_genre_title);
				echo '<option selected="" value="'.$home_chart_genreid.'">'.$home_chart_genre_title.'</option>';
			} ?>
      <option value="0-all-genres"  >All Genres</option>
			<option value="20-alternative"  >Alternative</option>
			<option value="29-anime"  >Anime</option>
			<option value="2-blues"  >Blues</option>
			<option value="1122-brazilian"  >Brazilian</option>
			<option value="4-children-music"  >Children Music</option>
			<option value="1232-chinese"  >Chinese</option>
			<option value="22-christian-gospel"  >Christian Gospel</option>
			<option value="5-classical"  >Classical</option>
			<option value="3-comedy"  >Comedy</option>
			<option value="6-country"  >Country</option>
			<option value="17-dance"  >Dance</option>
			<option value="50000063-disney"  >Disney</option>
			<option value="25-easy-listening"  >Easy Listening</option>
			<option value="7-electronic"  >Electronic</option>
			<option value="28-enka"  >Enka</option>
			<option value="50-fitness-workout"  >Fitness Workout</option>
			<option value="50000064-french-pop"  >French Pop</option>
			<option value="50000068-german-folk"  >German Folk</option>
			<option value="50000066-german-pop"  >German Pop</option>
			<option value="18-hip-hop-rap"  >Hip-Hop Rap</option>
			<option value="8-holiday"  >Holiday</option>
			<option value="1262-indian"  >Indian</option>
			<option value="53-instrumental"  >Instrumental</option>
			<option value="27-j-pop"  >J-Pop</option>
			<option value="11-jazz"  >Jazz</option>
			<option value="51-k-pop"  >K-Pop</option>
			<option value="52-karaoke"  >Karaoke</option>
			<option value="30-kayokyoku"  >Kayokyoku</option>
			<option value="1243-korean"  >Korean</option>
			<option value="12-latino"  >Latino</option>
			<option value="13-new-age"  >New Age</option>
			<option value="9-opera"  >Opera</option>
			<option value="14-pop"  >Pop</option>
			<option value="15-rnb-soul"  >RnB Soul</option>
			<option value="24-reggae"  >Reggae</option>
			<option value="21-rock"  >Rock</option>
			<option value="10-singer-songwriter"  >Singer Songwriter</option>
			<option value="16-soundtrack"  >Soundtrack</option>
			<option value="50000061-spoken-word"  >Spoken Word</option>
			<option value="23-vocal"  >Vocal</option>
			<option value="19-world"  >World</option>
        </select>
       
      </div>
</div>
<div class="form-group">
      <label class="col-lg-3 control-label">Search results per page</label>
      <div class="col-lg-9">
	   <?php if (10 == $nr_search_result){
				echo '<div class="radio">
          <label>
            <input name="nr_search_result" value="10" checked="" type="radio">
            10
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="nr_search_result" value="20" type="radio">
            20
          </label>
        </div>';
			} else {
				echo '<div class="radio">
          <label>
            <input name="nr_search_result" value="10" type="radio">
            10
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="nr_search_result" value="20" checked="" type="radio">
            20
          </label>
        </div>';
			} ?>
      </div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">HTTPS SSL images</label>
	<div class="col-lg-9">
	 <div class="checkbox">
          <label>
		  <?php if(!empty($use_ssl_images)){
				echo '<input type="checkbox" checked="" name="use_ssl_images"> Enable';
			} else {
				echo '<input type="checkbox" name="use_ssl_images"> Enable';
			} ?>
          </label>
        </div>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Show YouTube video on download page</label>
	<div class="col-lg-9">
	 <div class="checkbox">
          <label>
		  <?php if(!empty($show_vid_embed)){
				echo '<input type="checkbox" checked="" name="show_vid_embed"> Enable';
			} else {
				echo '<input type="checkbox" name="show_vid_embed"> Enable';
			} ?>
          </label>
        </div>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Show download mp3 button on download page</label>
	<div class="col-lg-9">
	 <div class="checkbox">
          <label>
		  <?php if(!empty($show_down_but)){
				echo '<input type="checkbox" checked="" name="show_down_but"> Enable';
			} else {
				echo '<input type="checkbox" name="show_down_but"> Enable';
			} ?>
          </label>
        </div>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Show video description on download page</label>
	<div class="col-lg-9">
	 <div class="checkbox">
          <label>
		  <?php if(!empty($show_vid_descr)){
				echo '<input type="checkbox" checked="" name="show_vid_descr"> Enable';
			} else {
				echo '<input type="checkbox" name="show_vid_descr"> Enable';
			} ?>
          </label>
        </div>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Show related searches on download page</label>
	<div class="col-lg-9">
	 <div class="checkbox">
          <label>
		  <?php if(!empty($show_rel_searches)){
				echo '<input type="checkbox" checked="" name="show_rel_searches"> Enable';
			} else {
				echo '<input type="checkbox" name="show_rel_searches"> Enable';
			} ?>
          </label>
        </div>
	</div>
</div>
<br>
<legend>SEO Meta Settings</legend>
<div class="form-group">
	<label class="col-lg-3 control-label">Homepage title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $homepage_title; ?>" name="homepage_title">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Homepage description</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $homepage_desc; ?>" name="homepage_desc">
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Search page title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $search_seo_title; ?>" name="search_seo_title">
	<span class="help-block">Comes between search term and site title</span>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Video download page title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $videopage_title; ?>" name="videopage_title">
	<span class="help-block">Comes between video title and site title</span>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Chart page title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $chart_pre_title; ?>" name="chart_pre_title">
	<span class="help-block">Comes before genre</span>
	</div>
</div>
<div class="form-group">
	<label class="col-lg-3 control-label">Chart page title</label>
	<div class="col-lg-9">
	<input type="text" class="form-control" value="<?php echo $chart_aft_title; ?>" name="chart_aft_title">
	<span class="help-block">Comes between genre and country</span>
	</div>
</div>
<br>
<legend>Google Analytics</legend>
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Header code</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="head_code"><?php echo str_replace('@', '"', $head_code); ?></textarea>
        <span class="help-block">Place here your Google Analytics script code</span>
      </div>
</div>
<br>
<legend>Advertising</legend>
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Home page ad</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="home_ad_728"><?php echo str_replace('@', '"', $home_ad_728); ?></textarea>
        <span class="help-block">Place here your homepage ad code (recommended size 728x90)</span>
      </div>
</div>	
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Chart page ad</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="chart_ad_728"><?php echo str_replace('@', '"', $chart_ad_728); ?></textarea>
        <span class="help-block">Place here your chart page ad code (recommended size 728x90)</span>
      </div>
</div>
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Search page ad</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="search_ad_728"><?php echo str_replace('@', '"', $search_ad_728); ?></textarea>
        <span class="help-block">Place here your search page ad code (recommended size 728x90)</span>
      </div>
</div>
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Download page ad</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="down_ad_728"><?php echo str_replace('@', '"', $down_ad_728); ?></textarea>
        <span class="help-block">Place here your download page ad code (recommended size 728x90)</span>
      </div>
</div>
<div class="form-group">
      <label for="textArea" class="col-lg-3 control-label">Download page modal box ad</label>
      <div class="col-lg-9">
        <textarea class="form-control" rows="3" name="downmod_ad_300"><?php echo str_replace('@', '"', $downmod_ad_300); ?></textarea>
        <span class="help-block">Place here your download page modal box ad code (recommended size 300x250)</span>
      </div>
</div>
<br>
<legend>Translation Settings</legend>
<b>Homepage</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $home_welcome_title; ?>" name="home_welcome_title">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $home_searches_title; ?>" name="home_searches_title">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $home_chart_title; ?>" name="home_chart_title">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $home_chartbut_title; ?>" name="home_chartbut_title">
	</div>
</div>
<br>
<b>Search Page</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $searchresults_title; ?>" name="searchresults_title">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_noresults_title; ?>" name="search_noresults_title">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_play_but; ?>" name="search_play_but">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_stop_but; ?>" name="search_stop_but">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_down_but; ?>" name="search_down_but">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_nav_prev; ?>" name="search_nav_prev">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $search_nav_next; ?>" name="search_nav_next">
	</div>
</div>
<br>
<b>Video Download Page</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $vid_down_but; ?>" name="vid_down_but">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $vid_recen_title; ?>" name="vid_recen_title">
	</div>
</div>
<br>
<b>Search Form Placeholder</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $searchf_text; ?>" name="searchf_text">
	</div>
</div>
<br>
<b>Genres</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $all_gtitle; ?>" name="all_gtitle">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_1; ?>" name="gtitle_1">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_2; ?>" name="gtitle_2">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_3; ?>" name="gtitle_3">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_4; ?>" name="gtitle_4">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_5; ?>" name="gtitle_5">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_6; ?>" name="gtitle_6">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_7; ?>" name="gtitle_7">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_8; ?>" name="gtitle_8">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_9; ?>" name="gtitle_9">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_10; ?>" name="gtitle_10">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_11; ?>" name="gtitle_11">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_12; ?>" name="gtitle_12">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_13; ?>" name="gtitle_13">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_14; ?>" name="gtitle_14">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_15; ?>" name="gtitle_15">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_16; ?>" name="gtitle_16">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_17; ?>" name="gtitle_17">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_18; ?>" name="gtitle_18">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_19; ?>" name="gtitle_19">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_20; ?>" name="gtitle_20">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_21; ?>" name="gtitle_21">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_22; ?>" name="gtitle_22">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_23; ?>" name="gtitle_23">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_24; ?>" name="gtitle_24">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_25; ?>" name="gtitle_25">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_26; ?>" name="gtitle_26">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_27; ?>" name="gtitle_27">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_28; ?>" name="gtitle_28">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_29; ?>" name="gtitle_29">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_30; ?>" name="gtitle_30">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_31; ?>" name="gtitle_31">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_32; ?>" name="gtitle_32">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_33; ?>" name="gtitle_33">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_34; ?>" name="gtitle_34">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_35; ?>" name="gtitle_35">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_36; ?>" name="gtitle_36">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_37; ?>" name="gtitle_37">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_38; ?>" name="gtitle_38">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_39; ?>" name="gtitle_39">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_40; ?>" name="gtitle_40">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $gtitle_41; ?>" name="gtitle_41">
	</div>
</div>
<br>
<b>Footer Links Titles</b>
<br><br>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $footnav_home; ?>" name="footnav_home">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $footnav_privacy; ?>" name="footnav_privacy">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $footnav_dmca; ?>" name="footnav_dmca">
	</div>
</div>
<div class="form-group">
	<div class="col-lg-12">
	<input type="text" class="form-control" value="<?php echo $footnav_contact; ?>" name="footnav_contact">
	</div>
</div>


<br>	
<div class="form-group">
	<div class="col-lg-9">
	<input type="hidden" name="update">
	<input type="submit"  class="btn btn-primary" value="Update">
	</div>
</div>		
	  	  		

	  	  			</form>
					

	 	<?php }else{

		  	  	if(isset($_GET['error'])){ echo '<div class="alert alert-danger"><h5><center>Wrong Username and Password combination</center></h5></div>'; }

	  	  	 ?>
<div style="width: 300px;margin: 0px auto;">
<h3>Admin Login</h3>
<br>
<form method="post" action="index.php" >
			        
<div class="form-group">
	<label class="control-label" for="focusedInput">Username</label>
	<input class="form-control" type="text" placeholder="Username" name="username">
</div>
<div class="form-group">
	<label class="control-label" for="focusedInput">Password</label>
	<input class="form-control" type="password" placeholder="Password" name="password">
</div>
<div class="form-group">
	<button type="submit" class="btn btn-primary login"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> Login</button>
</div>
					
</form>
</div>
	  	  	<?php } ?>

	  	  </div>
  </div>

  
    </div><script src="../js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>
