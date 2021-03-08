<?php

// Get the targets breach records
$target = "xxxx";

$binaryedge_apikey="b1556663-7936-4c75-a540-9cb341cc67a0";

$api_url = "https://api.binaryedge.io/v2/query/dataleaks/info";
$ch = curl_init( $api_url );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('X-Key:'.$binaryedge_apikey.''));
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
$json = curl_exec($ch);
curl_close($ch);
$output = json_decode($json);

print_r($output);
