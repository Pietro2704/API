<?php 

define("API_BASE", "http://192.168.1.4/back_end/Project/api/index.php?option=");

function api_request($option){
  $client  = curl_init(API_BASE . $option);
  curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($client);
  return json_decode($response, true);
}




echo "<h3>APLICAÇÃO</h3>";
for($i=0; $i<=10; $i++){
  // chamada api
  $result = api_request('random');
  
  // verify if response is ok
  if($result['status'] == 'ERROR'){
    die('Aconteceu um erro na chamada da api');
  }
  
  echo "Valor randomico:" . $result['data'] . "<br>";
}


?>