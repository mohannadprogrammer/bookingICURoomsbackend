<?php 

require_once "../functions/database_functions.php";
$result = array();
$rows = getAllroomArray();
foreach($rows as $row){
    array_push($result,$row);
}

echo json_encode($result);


?>
