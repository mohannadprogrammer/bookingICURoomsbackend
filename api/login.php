<?php 

require_once "../functions/database_functions.php";
$data = array();
$data['msg']='no sent post data';
$result = array();
if(isset( $_POST['email']) && isset($_POST['pass'])) {
    $row = login($_POST['email'] ,$_POST['pass']);
    if($row){
        $data['msg']='yes';
        $data['data']=$row;
        
    }else{
        $data['msg']='no';
    }
}
array_push($result,$data);
echo json_encode($result);

?>
