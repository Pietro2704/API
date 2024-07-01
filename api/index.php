<?php 

// data
$data = [];

function response($data_response){
  header("Content-Type: application/json"); // CORS
  echo json_encode($data_response);
}

// request
if(isset($_GET['option'])){
  switch ($_GET['option']) {
    case 'status':
      $data['status'] = 'SUCCESS';
      $data['msg'] = 'API RUNNING OK';
      break;

    default:
      $data['status'] = 'ERROR';
      break;
  }
  
}else{
  $data['status'] = 'ERROR';
}

response($data);

?>