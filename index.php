<?php

$url = getenv("URL")."/v1/NoaaExt.json?user=".getenv("DID")."&pass=".getenv("PASSWORD")."&apiToken=".getenv("APITOKEN");

//error_log($url);

echo file_get_contents($url);

/*
$session = curl_init(); 
curl_setopt($session, CURLOPT_URL, $url);
curl_setopt($session, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($session);
curl_close($session);
echo $result;
*/
