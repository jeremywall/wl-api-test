<?php

$url = getenv("URL")."/v1/NoaaExt.json?user=".getenv("DID")."&pass=".getenv("PASSWORD")."&apiToken=".getenv("APITOKEN");

error_log($url);

//step1
$cSession = curl_init(); 
//step2
curl_setopt($cSession,CURLOPT_URL,$url);
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
//step3
$result=curl_exec($cSession);
//step4
curl_close($cSession);
//step5
echo $result;
