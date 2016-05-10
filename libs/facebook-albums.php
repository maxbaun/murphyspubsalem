<?php
header('Access-Control-Allow-Origin: *');
date_default_timezone_set('America/New_York');
require_once("facebook.php");
//
 $config = array();
 $config['appId'] = '409416482513248';
 $config['secret'] = 'df012044a3b3003e0814ad2f03fed7ed';
//
 $facebook = new Facebook($config);
//


try {
   $d = $facebook->api("637938886216768/albums?fields=cover_photo,link,name,id");
} catch ( Exception $e ) {
	echo "Unable to connect to Facebook API";
}



$data = $d['data'];
$albums = Array();
foreach($data as $album)
{
	$id = $album['id'];
	$name = $album['name'];
	if(!isset($album['cover_photo']))
	{
		$cover = "";
		continue;
	}
	else
	{
		// echo "cover_photo " . $album['cover_photo'] . "<br/><br/>";
		if(isset($album['cover_photo'])){
			try {
			   $coverdata = $facebook->api($album['cover_photo']);
			} catch ( Exception $e ) {
			    continue;
			}
		}

		else
			$coverdata = "";
		// debugging
		// var_dump($coverdata['images']);
		// echo '<br/><br/>';
		if(!isset($coverdata['images'][3])){
			$cover = $coverdata['images'][1]['source'];	// if the regular image is not avail, use the first one
		}
		else
			$cover = $coverdata['images'][3]['source'];
	}
	$link = $album['link'];

	$albums[] = Array("id"=>$id,"name"=>$name,"cover"=>$cover,"link"=>$link);

}

echo json_encode($albums);
?>
