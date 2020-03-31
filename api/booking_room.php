<?php 

require_once "../functions/database_functions.php";
$data = array();
$data['msg']='no sent post data';
$result = array();
$booking_room_id = $_POST['booking_room_id'] ;
$booking_user_id = $_POST['booking_user_id'];
if(isset($booking_room_id) && isset($booking_user_id)) {
    $row = booking_room($booking_room_id, $booking_user_id);
    if($row){
        booking_room_api($booking_room_id);
        $data['msg']='yes';
        $data['data']=$row;
        
    }else{
        $data['msg']='no';
    }
}
array_push($result,$data);
echo json_encode($result);

?>
