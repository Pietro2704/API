<?php 
// http://192.168.1.4/back_end/Project/app/app.php

define("BASE_API", "http://192.168.1.4/back_end/Project/api/index.php?option=");

function api_request($option){
  $client  = curl_init(BASE_API . $option);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  return json_decode($response, true);
}

echo "<h3>APLICAÇÃO</h3>";

echo "<pre>";
print_r(api_request('hash'));

?>