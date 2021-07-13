<div class="container">
	<div class="row">
		<div class="col-md-12">
<?php
function ApiParse($Url){

  if(function_exists('curl_version')){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_URL,$Url);
    $result=curl_exec($ch);
    curl_close($ch);

  }
  else {

   $result = file_get_contents($Url);

  }

  $data = json_decode($result, true);

  if(isset($data['items']) && count($data['items']) > 0 ){
    return $data;
  } else {
  
    return false;
  }
}
function FormatDuration($duration){
	$FormatTime = new DateTime('@0');
	$FormatTime->add(new DateInterval($duration));
	// return $FormatTime->format('H:i:s');
	if ($FormatTime->format('H') > 0) {
	return $FormatTime->format('H:i:s');
	}
	else {
	return $FormatTime->format('i:s');
	}
}
if (isset($_GET['page'])) { 
$ptoken = $_GET['page'];
$pagetoken = str_replace('/', '', $ptoken);
} 
else { 
$pagetoken = "";
}

/* https://developers.google.com/youtube/v3/docs/search/list */
$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key.'&pageToken='.$pagetoken.'';
$response = ApiParse($data_url);
// echo $response['items'][0]['id']['videoId'];
// echo '<pre>'; print_r( $response ); echo '</pre>';
// yt key 2
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_2))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_2.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 3
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_3))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_3.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 4
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_4))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_4.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 5
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_5))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_5.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 6
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_6))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_6.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 7
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_7))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_7.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 8
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_8))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_8.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 9
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_9))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_9.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}
// yt key 10
if (isset($response['error']['errors'][0]['reason']) && ($response['error']['errors'][0]['reason'] == 'quotaExceeded') && (isset($youtube_key_10))) {
	$data_url = 'https://www.googleapis.com/youtube/v3/search?part=snippet&maxResults='.$nr_search_result.'&safeSearch=strict&type=video&q='.$search_term.'&key='.$youtube_key_10.'&pageToken='.$pagetoken.'';
	$response = ApiParse($data_url);
}

if (empty($response)) { 
echo $search_noresults_title;
}
else { 
// if response is not empty do this:
if (isset($response['nextPageToken'])) { 
$n_token = $response['nextPageToken'];
} 
else { 
$n_token = "";
}
if (isset($response['prevPageToken'])) { 
$prev_token = $response['prevPageToken'];
} 
else { 
$prev_token = "";
}
//foreach ($response['items'] as $key => $ytid): 
//	if($key > 0):
//	echo ",";
//	endif;
//	echo $ytid['id']['videoId'];
//endforeach;
$tmp = '';
foreach($response['items'] as $key => $v) {
	if($key > 0){
	$tmp .= ",";
	}
    $tmp .= $v['id']['videoId'];
}
//echo $tmp;
/* https://developers.google.com/youtube/v3/docs/videos/list#try-it */
$stats_data_url = 'https://www.googleapis.com/youtube/v3/videos?part=contentDetails,statistics&id='.$tmp.'&key='.$youtube_key.'';
$stats_response = ApiParse($stats_data_url);
//echo '<pre>'; print_r( $stats_response ); echo '</pre>';

$count = 0; 
foreach ($response['items'] as $video) {
?>
<div class="panel panel-default">
  <div class="panel-body">
<div id="item-<?php echo $video['id']['videoId'];?>">
						<ul class="media-list">
						  <li class="media">
						    <div class="media-left">
						      <a href="<?php echo $site_url;?>/download/<?php echo $video['id']['videoId'];?>/<?php echo cano($video['snippet']['title']);?>">
						        <img class="media-object" width="120px" height="90px" title="<?php echo htmlspecialchars( $video['snippet']['title'] ); ?>" src="<?php echo $video['snippet']['thumbnails']['default']['url'];?>" alt="">
						      </a>
						    </div>
						    <div class="media-body">
						      <h4 class="media-heading"><a href="<?php echo $site_url;?>/download/<?php echo $video['id']['videoId'];?>/<?php echo cano($video['snippet']['title']);?>" title="<?php echo htmlspecialchars( $video['snippet']['title'] ); ?>"><?php echo htmlspecialchars( $video['snippet']['title'] ); ?></a></h4>
						      <div class="well" style="padding: 10px;margin-bottom: 0px;">
							  <span class="glyphicon glyphicon-calendar" aria-hidden="true" style="margin-right: 5px;"></span> <?php echo substr($video['snippet']['publishedAt'],0,10); ?>
						 <?php 
						// echo $count;
						echo '<span class="glyphicon glyphicon-time" aria-hidden="true" style="margin-left: 10px;margin-right: 5px;"></span>' . FormatDuration($stats_response['items'][$count]['contentDetails']['duration']);
						if (isset($stats_response['items'][$count]['statistics']['viewCount'])) { 
						echo '<span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="margin-left: 10px;margin-right: 5px;"></span>' . number_format($stats_response['items'][$count]['statistics']['viewCount']);
						}
						?>     	
						    </div>
							</div>
							<div class="media-right">
									<a href="javascript:;" data-id="<?php echo $video['id']['videoId'];?>" data-title="<?php echo htmlspecialchars( $video['snippet']['title'] ); ?>" data-source="youtube" id="ic<?php echo $video['id']['videoId'];?>" class="btn-play"><button type="button" class="btn btn-success btn-md" style="width: 100%;"><span class="glyphicon glyphicon-play" aria-hidden="true"></span> <?php echo $search_play_but; ?></button></a>
									<a href="javascript:;" data-id="<?php echo $video['id']['videoId'];?>" class="btn-stop" style="display: none;"><button type="button" class="btn btn-warning btn-md" style="width: 100%;"><span class="glyphicon glyphicon-stop" aria-hidden="true"></span> <?php echo $search_stop_but; ?></button></a>
									<a href="<?php echo $site_url;?>/download/<?php echo $video['id']['videoId'];?>/<?php echo cano($video['snippet']['title']);?>"><button type="button" class="btn btn-primary btn-md" style="margin-top: 10px;width: 100%;"><span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> <?php echo $search_down_but; ?></button></a>
						    </div>
						  </li>
						</ul>
<div id="player-<?php echo $video['id']['videoId'];?>" class="player clearfix"></div>
</div>
</div>
</div>

<?php 
 $count++; 
}
}
?>

		</div>
	</div>
</div>
<nav>
  <ul class="pager">
    <?php if(isset($prev_token) and !empty($prev_token)): ?>
    <li><a rel="nofollow" href="<?php echo $site_url;?>/music/<?php echo $search_term;?>/<?php echo $prev_token;?>"><?php echo $search_nav_prev;?></a></li>
	<?php endif; ?>
	<?php if(isset($n_token) and !empty($n_token)): ?>
    <li><a rel="nofollow" href="<?php echo $site_url;?>/music/<?php echo $search_term;?>/<?php echo $n_token;?>"><?php echo $search_nav_next;?></a></li>
	<?php endif; ?>
  </ul>
</nav>