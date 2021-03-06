<?php
/*
** Handset Detection - sites.php - http://www.handsetdetection.com
** Examples of all the sites methods
*/

ini_set('display_errors', 1);
ini_set('max_execution_time', 1200);
ini_set('memory_limit', "512M");
error_reporting(E_ALL);

require_once('hd3.php');
$hd3 = new HD3();

//echo '<pre>';print_r($hd3->config);echo '</pre>';

echo "<h1>Simple Detection - Using your web browser standard headers (expect NotFound)</h1><p>";
// This is the most simple detection call - http headers are picked up automatically.
// You're probably using a normal browser so expect this to reply with NOTFOUND
if ($hd3->siteDetect()) {
	$tmp = $hd3->getReply();
	print_r($tmp);
} else {
	print $hd3->getError();	
}
echo "</p>";  


// If your site has access to download our device specs database only.
// Note  - Increase default timeout
echo "</p><h1>Archive Information</h1><p>";
$hd3->setTimeout(500);
if ($hd3->siteFetchArchive()) {
	$data = $hd3->getRawReply();
	echo "Downloaded ".strlen($data)." bytes";
} else {
	print $hd3->getError();
}
$hd3->setTimeout(500);
echo "</p>"; 

?>