<?php 

require_once "../functions/database_functions.php";
$result = array();
$rows = getAllroomArrayID(2);
foreach($rows as $row){
    array_push($result,$row);
}
echo json_encode($result);

//test
// $row = login('1','1');
// if($row){
// $data['msg']='yes';
// $data['data']=$row;

// }else{
// $data['msg']='no';
// }

// array_push($result,$data);
// echo json_encode($result);
?>
