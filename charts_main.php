<?php
require_once('admin/config.php');
require_once('includes/url_slug.php'); 

if(isset($_GET['change'])){ header("Location: ".$site_url."/charts/". strtolower($_GET['country']) ."/". $_GET['genre']); }

$chart_country = htmlentities($_GET['country']);
$chart_country = strtoupper($chart_country);
$chart_genre = $_GET['genre'];
$chart_genre = explode('-',$chart_genre,2);
$chart_genre_id = $chart_genre[0];
$chart_genre_title = htmlentities($chart_genre[1]);
$chart_genre_title = ucwords($chart_genre_title);

$countries = array
(
	'AI' => 'Anguilla',
	'AR' => 'Argentina',
	'AM' => 'Armenia',
	'AU' => 'Australia',
	'AT' => 'Austria',
	'BS' => 'Bahamas',
	'BH' => 'Bahrain',
	'BB' => 'Barbados',
	'BY' => 'Belarus',
	'BE' => 'Belgium',
	'BZ' => 'Belize',
	'BM' => 'Bermuda',
	'BO' => 'Bolivia',
	'BW' => 'Botswana',
	'BR' => 'Brazil',
	'BG' => 'Bulgaria',
	'BF' => 'Burkina Faso',
	'KH' => 'Cambodia',
	'CA' => 'Canada',
	'CL' => 'Chile',
	'CO' => 'Colombia',
	'CR' => 'Costa Rica',
	'HR' => 'Croatia',
	'CZ' => 'Czech Republic',
	'DK' => 'Denmark',
	'EG' => 'Egypt',
	'SV' => 'El Salvador',
	'EE' => 'Estonia',
	'FJ' => 'Fiji',
	'FI' => 'Finland',
	'FR' => 'France',
	'GM' => 'Gambia',
	'DE' => 'Germany',
	'GH' => 'Ghana',
	'GR' => 'Greece',
	'GT' => 'Guatemala',
	'HN' => 'Honduras',
	'HK' => 'Hong Kong',
	'HU' => 'Hungary',
	'IN' => 'India',
	'ID' => 'Indonesia',
	'IE' => 'Ireland',
	'IL' => 'Israel',
	'IT' => 'Italy',
	'JP' => 'Japan',
	'JO' => 'Jordan',
	'KZ' => 'Kazakhstan',
	'KR' => 'Republic of Korea',
	'KW' => 'Kuwait',
	'LV' => 'Latvia',
	'LB' => 'Lebanon',
	'LT' => 'Lithuania',
	'LU' => 'Luxembourg',
	'MY' => 'Malaysia',
	'MT' => 'Malta',
	'MX' => 'Mexico',
	'MN' => 'Mongolia',
	'MZ' => 'Mozambique',
	'NA' => 'Namibia',
	'NP' => 'Nepal',
	'NL' => 'Netherlands',
	'NZ' => 'New Zealand',
	'NI' => 'Nicaragua',
	'NE' => 'Niger',
	'NG' => 'Nigeria',
	'NO' => 'Norway',
	'OM' => 'Oman',
	'PK' => 'Pakistan',
	'PA' => 'Panama',
	'PY' => 'Paraguay',
	'PE' => 'Peru',
	'PH' => 'Philippines',
	'PL' => 'Poland',
	'PT' => 'Portugal',
	'QA' => 'Qatar',
	'RO' => 'Romania',
	'RU' => 'Russia',
	'SA' => 'Saudi Arabia',
	'SG' => 'Singapore',
	'SK' => 'Slovakia',
	'SI' => 'Slovenia',
	'ZA' => 'South Africa',
	'ES' => 'Spain',
	'LK' => 'Sri Lanka',
	'SE' => 'Sweden',
	'CH' => 'Switzerland',
	'TW' => 'Taiwan',
	'TH' => 'Thailand',
	'TR' => 'Turkey',
	'UG' => 'Uganda',
	'UA' => 'Ukraine',
	'GB' => 'United Kingdom',
	'US' => 'United States',
	'AE' => 'United Arab Emirates',
	'VE' => 'Venezuela',
	'VN' => 'Vietnam',
	'ZW' => 'Zimbabwe'
);
$country_title = $countries[$chart_country];
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Meta -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title><?php echo $chart_pre_title; ?> <?php if(isset($chart_genre_id) and !empty($chart_genre_id)){ echo $chart_genre_title; }?> <?php echo $chart_aft_title; ?> <?php echo $country_title; ?> - <?php echo $site_title; ?></title>
	<meta name="description" content="<?php echo $chart_pre_title; ?> <?php if(isset($chart_genre_id) and !empty($chart_genre_id)){ echo $chart_genre_title; }?> <?php echo $chart_aft_title; ?> <?php echo $country_title; ?> - <?php echo $site_title; ?>" />
	<meta name="robots" content="noodp"/>
	<meta property="og:title" content="<?php echo $chart_pre_title; ?> <?php if(isset($chart_genre_id) and !empty($chart_genre_id)){ echo $chart_genre_title; }?> <?php echo $chart_aft_title; ?> <?php echo $country_title; ?> - <?php echo $site_title; ?>"/>
	<meta property="og:description" content="<?php echo $chart_pre_title; ?> <?php if(isset($chart_genre_id) and !empty($chart_genre_id)){ echo $chart_genre_title; }?> <?php echo $chart_aft_title; ?> <?php echo $country_title; ?> - <?php echo $site_title; ?>"/>
	<meta property="og:type" content="article"/>
	<meta property="og:site_name" content="<?php echo $site_title; ?>"/>
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

<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-md-12">
<?php if(isset($chart_ad_728) and !empty($chart_ad_728)): ?>
<div style="margin:30px 0px 0px 0px;">
<?php $chart_ad_728 = str_replace('@', '"', $chart_ad_728);
echo $chart_ad_728; ?>
</div>
<?php endif; ?>		
<div class="page-header">
<h3><?php echo $chart_pre_title; ?> <?php if(isset($chart_genre_id) and !empty($chart_genre_id)){ echo $chart_genre_title; }?> <?php echo $chart_aft_title; ?> <?php echo $country_title;?></h3>
</div>		
<?php
/* cano genre */	
function canogenre($g){
	$g = str_replace(" ", "-", $g);
	$g = strtolower($g);
	return $g;
}
/* make country selected */	
function selected($value) {
	global $chart_country;
	$key = $chart_country;
	if($value==$key) echo 'selected';
}
/* make genre selected */		
function genre_selected($value) {
	global $chart_genre_id;
	$key = $chart_genre_id;
	if($value==$key) echo 'selected';
}	
?> 
<div class="well">
<div class="row">
  <form action="<?php echo $site_url;?>/charts_main.php" class="">
<div class="col-md-5">
	<select name="country" class="selectpicker" data-style="btn-info">
      <option value="AI" <?php selected('AI')?>		>Anguilla</option>
      <option value="AR" <?php selected('AR')?>		>Argentina</option>
	  <option value="AM" <?php selected('AM')?>		>Armenia</option>
      <option value="AU" <?php selected('AU')?>		>Australia</option>
      <option value="AT" <?php selected('AT')?>		>Austria</option>
	  <option value="AZ" <?php selected('AZ')?>		>Azerbaijan</option>
	  <option value="BS" <?php selected('BS')?>		>Bahamas</option>
	  <option value="BH" <?php selected('BH')?>		>Bahrain</option>
	  <option value="BB" <?php selected('BB')?>		>Barbados</option>
	  <option value="BY" <?php selected('BY')?>		>Belarus</option>
      <option value="BE" <?php selected('BE')?>		>Belgium</option>
	  <option value="BZ" <?php selected('BZ')?>		>Belize</option>
	  <option value="BM" <?php selected('BM')?>		>Bermuda</option>
	  <option value="BO" <?php selected('BO')?>     >Bolivia</option>
	  <option value="BW" <?php selected('BW')?>     >Botswana</option>
      <option value="BR" <?php selected('BR')?>		>Brazil</option>
	  <option value="BG" <?php selected('BG')?>		>Bulgaria</option>
	  <option value="BF" <?php selected('BF')?>		>Burkina Faso</option>
	  <option value="KH" <?php selected('KH')?>		>Cambodia</option>
      <option value="CA" <?php selected('CA')?>		>Canada</option>
      <option value="CL" <?php selected('CL')?>		>Chile</option>
      <option value="CO" <?php selected('CO')?>		>Colombia</option>
      <option value="CR" <?php selected('CR')?>		>Costa Rica</option>
      <option value="HR" <?php selected('HR')?>		>Croatia</option>
      <option value="CZ" <?php selected('CZ')?>		>Czech Republic</option>
      <option value="DK" <?php selected('DK')?>		>Denmark</option>
	  <option value="EG" <?php selected('EG')?>		>Egypt</option>
      <option value="SV" <?php selected('SV')?>		>El Salvador</option>
	  <option value="EE" <?php selected('EE')?>		>Estonia</option>
	  <option value="FJ" <?php selected('FJ')?>		>Fiji</option>
      <option value="FI" <?php selected('FI')?>		>Finland</option>
      <option value="FR" <?php selected('FR')?>		>France</option>
	  <option value="GM" <?php selected('GM')?>		>Gambia</option>
      <option value="DE" <?php selected('DE')?>		>Germany</option>
	  <option value="GH" <?php selected('GH')?>		>Ghana</option>
      <option value="GR" <?php selected('GR')?>		>Greece</option>
      <option value="GT" <?php selected('GT')?>		>Guatemala</option>
	  <option value="HN" <?php selected('HN')?>		>Honduras</option>
      <option value="HK" <?php selected('HK')?>		>Hong Kong</option>
      <option value="HU" <?php selected('HU')?>		>Hungary</option>
      <option value="IN" <?php selected('IN')?>		>India</option>
      <option value="ID" <?php selected('ID')?>		>Indonesia</option>
      <option value="IE" <?php selected('IE')?>		>Ireland</option>
      <option value="IL" <?php selected('IL')?>		>Israel</option>
      <option value="IT" <?php selected('IT')?>		>Italy</option>
      <option value="JP" <?php selected('JP')?>		>Japan</option>
	  <option value="JO" <?php selected('JO')?>		>Jordan</option>
	  <option value="KZ" <?php selected('KZ')?>		>Kazakhstan</option>
      <option value="KR" <?php selected('KR')?>		>Republic of Korea</option>
      <option value="KW" <?php selected('KW')?>		>Kuwait</option>
	  <option value="LV" <?php selected('LV')?>		>Latvia</option>
      <option value="LB" <?php selected('LB')?>		>Lebanon</option>
	  <option value="LT" <?php selected('LT')?>		>Lithuania</option>
      <option value="LU" <?php selected('LU')?>		>Luxembourg</option>
      <option value="MY" <?php selected('MY')?>		>Malaysia</option>
	  <option value="MT" <?php selected('MT')?>		>Malta</option>
      <option value="MX" <?php selected('MX')?>		>Mexico</option>
	  <option value="MN" <?php selected('MN')?>		>Mongolia</option>
	  <option value="MZ" <?php selected('MZ')?>		>Mozambique</option>
	  <option value="NA" <?php selected('NA')?>		>Namibia</option>
	  <option value="NP" <?php selected('NP')?>		>Nepal</option>
      <option value="NL" <?php selected('NL')?>		>Netherlands</option>
      <option value="NZ" <?php selected('NZ')?>		>New Zealand</option>
	  <option value="NI" <?php selected('NI')?>		>Nicaragua</option>
	  <option value="NE" <?php selected('NE')?>		>Niger</option>
	  <option value="NG" <?php selected('NG')?>		>Nigeria</option>
      <option value="NO" <?php selected('NO')?>		>Norway</option>
	  <option value="OM" <?php selected('OM')?>		>Oman</option>
      <option value="PK" <?php selected('PK')?>		>Pakistan</option>
      <option value="PA" <?php selected('PA')?>		>Panama</option>
	  <option value="PY" <?php selected('PY')?>		>Paraguay</option>
      <option value="PE" <?php selected('PE')?>		>Peru</option>
      <option value="PH" <?php selected('PH')?>		>Philippines</option>
      <option value="PL" <?php selected('PL')?>		>Poland</option>
      <option value="PT" <?php selected('PT')?>		>Portugal</option>
      <option value="QA" <?php selected('QA')?>		>Qatar</option>
      <option value="RO" <?php selected('RO')?>		>Romania</option>
      <option value="RU" <?php selected('RU')?>		>Russia</option>
      <option value="SA" <?php selected('SA')?>		>Saudi Arabia</option>
      <option value="SG" <?php selected('SG')?>		>Singapore</option>
      <option value="SK" <?php selected('SK')?>		>Slovakia</option>
      <option value="SI" <?php selected('SI')?>		>Slovenia</option>
      <option value="ZA" <?php selected('ZA')?>		>South Africa</option>
      <option value="ES" <?php selected('ES')?>		>Spain</option>
      <option value="LK" <?php selected('LK')?>		>Sri Lanka</option>
      <option value="SE" <?php selected('SE')?>		>Sweden</option>
      <option value="CH" <?php selected('CH')?>		>Switzerland</option>
      <option value="TW" <?php selected('TW')?>		>Taiwan</option>
      <option value="TH" <?php selected('TH')?>		>Thailand</option>
      <option value="TR" <?php selected('TR')?>		>Turkey</option>
	  <option value="UG" <?php selected('UG')?>		>Uganda</option>
	  <option value="UA" <?php selected('UA')?>		>Ukraine</option>
      <option value="GB" <?php selected('GB')?>		>United Kingdom</option>
      <option value="US" <?php selected('US')?>		>United States</option>
      <option value="AE" <?php selected('AE')?>		>United Arab Emirates</option>
      <option value="VE" <?php selected('VE')?>		>Venezuela</option>
      <option value="VN" <?php selected('VN')?>		>Vietnam</option>
	  <option value="ZW" <?php selected('ZW')?>		>Zimbabwe</option>
    </select>
</div>
<div class="col-md-5">	
	<select name="genre" class="selectpicker" data-style="btn-info">
			<option value="0-<?php echo canogenre($all_gtitle);?>" <?php genre_selected('1122')?> ><?php echo $all_gtitle;?></option>
			<option value="20-<?php echo canogenre($gtitle_1);?>" <?php genre_selected('20')?> ><?php echo $gtitle_1;?></option>
			<option value="29-<?php echo canogenre($gtitle_2);?>" <?php genre_selected('29')?> ><?php echo $gtitle_2;?></option>
			<option value="2-<?php echo canogenre($gtitle_3);?>" <?php genre_selected('2')?> ><?php echo $gtitle_3;?></option>
			<option value="1122-<?php echo canogenre($gtitle_4);?>" <?php genre_selected('1122')?> ><?php echo $gtitle_4;?></option>
			<option value="4-<?php echo canogenre($gtitle_5);?>" <?php genre_selected('4')?> ><?php echo $gtitle_5;?></option>
			<option value="1232-<?php echo canogenre($gtitle_6);?>" <?php genre_selected('1232')?> ><?php echo $gtitle_6;?></option>
			<option value="22-<?php echo canogenre($gtitle_7);?>" <?php genre_selected('22')?> ><?php echo $gtitle_7;?></option>
			<option value="5-<?php echo canogenre($gtitle_8);?>" <?php genre_selected('5')?> ><?php echo $gtitle_8;?></option>
			<option value="3-<?php echo canogenre($gtitle_9);?>" <?php genre_selected('3')?> ><?php echo $gtitle_9;?></option>
			<option value="6-<?php echo canogenre($gtitle_10);?>" <?genre_selected('6')?> ><?php echo $gtitle_10;?></option>
			<option value="17-<?php echo canogenre($gtitle_11);?>" <?genre_selected('17')?> ><?php echo $gtitle_11;?></option>
			<option value="50000063-<?php echo canogenre($gtitle_12);?>" <?php genre_selected('50000063')?> ><?php echo $gtitle_12;?></option>
			<option value="25-<?php echo canogenre($gtitle_13);?>" <?php genre_selected('25')?> ><?php echo $gtitle_13;?></option>
			<option value="7-<?php echo canogenre($gtitle_14);?>" <?php genre_selected('7')?> ><?php echo $gtitle_14;?></option>
			<option value="28-<?php echo canogenre($gtitle_15);?>" <?php genre_selected('28')?> ><?php echo $gtitle_15;?></option>
			<option value="50-<?php echo canogenre($gtitle_16);?>" <?php genre_selected('50')?> ><?php echo $gtitle_16;?></option>
			<option value="50000064-<?php echo canogenre($gtitle_17);?>" <?php genre_selected('50000064')?> ><?php echo $gtitle_17;?></option>
			<option value="50000068-<?php echo canogenre($gtitle_18);?>" <?php genre_selected('50000068')?> ><?php echo $gtitle_18;?></option>
			<option value="50000066-<?php echo canogenre($gtitle_19);?>" <?php genre_selected('50000066')?> ><?php echo $gtitle_19;?></option>
			<option value="18-<?php echo canogenre($gtitle_20);?>" <?php genre_selected('18')?> ><?php echo $gtitle_20;?></option>
			<option value="8-<?php echo canogenre($gtitle_21);?>" <?php genre_selected('8')?> ><?php echo $gtitle_21;?></option>
			<option value="1262-<?php echo canogenre($gtitle_22);?>" <?php genre_selected('1262')?> ><?php echo $gtitle_22;?></option>
			<option value="53-<?php echo canogenre($gtitle_23);?>" <?php genre_selected('53')?> ><?php echo $gtitle_23;?></option>
			<option value="27-<?php echo canogenre($gtitle_24);?>" <?php genre_selected('27')?> ><?php echo $gtitle_24;?></option>
			<option value="11-<?php echo canogenre($gtitle_25);?>" <?php genre_selected('11')?> ><?php echo $gtitle_25;?></option>
			<option value="51-<?php echo canogenre($gtitle_26);?>" <?php genre_selected('51')?> ><?php echo $gtitle_26;?></option>
			<option value="52-<?php echo canogenre($gtitle_27);?>" <?php genre_selected('52')?> ><?php echo $gtitle_27;?></option>
			<option value="30-<?php echo canogenre($gtitle_28);?>" <?php genre_selected('30')?> ><?php echo $gtitle_28;?></option>
			<option value="1243-<?php echo canogenre($gtitle_29);?>" <?php genre_selected('1243')?> ><?php echo $gtitle_29;?></option>
			<option value="12-<?php echo canogenre($gtitle_30);?>" <?php genre_selected('12')?> ><?php echo $gtitle_30;?></option>
			<option value="13-<?php echo canogenre($gtitle_31);?>" <?php genre_selected('13')?> ><?php echo $gtitle_31;?></option>
			<option value="9-<?php echo canogenre($gtitle_32);?>" <?php genre_selected('9')?> ><?php echo $gtitle_32;?></option>
			<option value="14-<?php echo canogenre($gtitle_33);?>" <?php genre_selected('14')?> ><?php echo $gtitle_33;?></option>
			<option value="15-<?php echo canogenre($gtitle_34);?>" <?php genre_selected('15')?> ><?php echo $gtitle_34;?></option>
			<option value="24-<?php echo canogenre($gtitle_35);?>" <?php genre_selected('24')?> ><?php echo $gtitle_35;?></option>
			<option value="21-<?php echo canogenre($gtitle_36);?>" <?php genre_selected('21')?> ><?php echo $gtitle_36;?></option>
			<option value="10-<?php echo canogenre($gtitle_37);?>" <?php genre_selected('10')?> ><?php echo $gtitle_37;?></option>
			<option value="16-<?php echo canogenre($gtitle_38);?>" <?php genre_selected('16')?> ><?php echo $gtitle_38;?></option>
			<option value="50000061-<?php echo canogenre($gtitle_39);?>" <?php genre_selected('50000061')?> ><?php echo $gtitle_39;?></option>
			<option value="23-<?php echo canogenre($gtitle_40);?>" <?php genre_selected('23')?> ><?php echo $gtitle_40;?></option>
			<option value="19-<?php echo canogenre($gtitle_41);?>" <?php genre_selected('19')?> ><?php echo $gtitle_41;?></option>
    </select>
</div>
<div class="col-md-2">
<input type="hidden" name="change" value="1">
	<button style="width: 100%;" type="submit" class="btn btn-primary searchbut"><?php echo $home_chartbut_title;?></button>
</div>	
  </form>
  </div>
</div>
<table class="table table table-striped">
    <tbody>  
<?php
if(isset($chart_genre_id) and !empty($chart_genre_id)){
$string = file_get_contents('http://itunes.apple.com/'.$chart_country.'/rss/topsongs/limit=100/genre='.$chart_genre_id.'/xml');
}
else {
$string = file_get_contents('http://itunes.apple.com/'.$chart_country.'/rss/topsongs/limit=100/xml');
}
// Remove the colon ":" in the <xxx:yyy> to be <xxxyyy>
$string = preg_replace("/(<\/?)(\w+):([^>]*>)/", "$1$2$3", $string);
$xml = simplexml_load_string($string);
// Output
$rssresults = '';
$count = 1;
$max = 101;

foreach ($xml->entry as $val) {
    if ($count < $max) {
	// edit foreach
	$musicid = $val->id;
	$musicid = str_replace("/id/","xxx",$musicid);
	$musicid=explode('/id',$musicid);
	$musicid=explode('?',$musicid[1]);
	if($use_ssl_images){
	$sslimage = preg_replace('/http/ms', "https", $val->imimage[0]);
	$cover = preg_replace('/.mzstatic/ms', "-ssl.mzstatic", $sslimage);
	} else {
	$cover = $val->imimage[0];
	}
	$rssresults .= '<tr>
        <td style="width:70px"><span class="badge">'.$count.'</span></td>
        <td style="width:80px"><img src="'.$cover.'" alt="'.$val->title.'" /></td>
        <td><a href="'.$site_url.'/music/'.cano($val->title).'" ><b>'.$val->imname.'</b></a><div class="muted"><a href="'.$site_url.'/music/'.cano($val->imartist).'" >'.$val->imartist.'</a></div></td>
		</tr>';
		
    }
    $count++;
}
echo $rssresults;
?>			
 </tbody>
  </table>

</div>

	</div>
</div>
<!-- end Main Content -->
<?php include 'includes/footer.php';?>