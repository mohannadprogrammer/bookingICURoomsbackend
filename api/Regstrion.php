<?php 

require_once "../functions/database_functions.php";
$data = array();
$data['msg']='no sent post data';
$result = array();
if(isset($_POST['name_user']) 
&& isset($_POST['email_user']) && isset($_POST['phone_user']) && isset($_POST['address_user']) && isset($_POST['nationl_num_user']) && isset($_POST['password_user']) ) {
    $row = regstrion($_POST['name_user'],$_POST['email_user'],$_POST['phone_user'],$_POST['address_user'],$_POST['nationl_num_user'],$_POST['password_user'],'مستخدم');
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
