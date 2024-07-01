<?php 

function response($data_response){
  header("Content-Type: application/json"); // CORS
  echo json_encode($data_response);
}

function define_response(&$data, $value){
  $data['status'] = 'SUCCESS';
  $data['data'] = $value; 
}



// data
$data['status'] = 'ERROR';
$data['data'] = null;

// request
if(isset($_GET['option'])){
  switch ($_GET['option']) {

    case 'status':
      define_response($data, 'API RUNNING OK! ...');
      break;

    case 'random':
      define_response($data, rand(0,1000));
      break;
  }
  
}

response($data);

?>