<?php 

echo "<h3>APLICAÇÃO</h3>";

define("API_BASE", "http://192.168.1.4/back_end/Project/api/index.php?option=");
// API_BASE . 'status';

$result = api_request('status');
echo "<pre>";
print_r($result);


function api_request($option){
  $client  = curl_init(API_BASE . $option);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  return json_decode($response, true);
}

?>