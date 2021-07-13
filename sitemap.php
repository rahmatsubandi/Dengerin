<?php 
require_once('admin/config.php');
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8" ?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
<url>
<loc><?php echo $site_url;?></loc>
</url>
<?php
$text = file_get_contents("includes/searchterms.txt",NULL);
$text=explode('[s]:',$text);
foreach ($text as &$value){$value=rtrim($value);}

$out=array_slice($text,-10000);
//$out=array_slice($text,NULL);
$out=array_reverse($out);
$out=array_unique($out);

$latest="";
foreach ($out as $value) {
$latest .= "<url><loc>";
$latest .= "$site_url/music/$value";
$latest .= "</loc></url>";
}
echo"$latest";
?>
</urlset>