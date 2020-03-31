<?php

function db_connect()
{
    $conn = mysqli_connect('localhost', 'root', '', 'hospital');
    mysqli_set_charset($conn, 'utf8');
    // mysqli_set_charset("UTF8", $conn);
    if (!$conn) {
        echo "Can't connect database ".mysqli_connect_error($conn);
        exit;
    }

    return $conn;
}

function getAllHospitle()
{
    $conn = db_connect();
    $query = "SELECT * FROM `hospitle`";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services price failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllHospitlebyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `hospitle` where id_hospitle = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function deleteHospitle($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `hospitle` where id_hospitle = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addHospitle($name)
{
    $conn = db_connect();
    $query = "INSERT INTO `hospitle`( `name_hospitle`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editHospitle($id , $name)
{
    $conn = db_connect();
    $query = "UPDATE `hospitle` SET `name_hospitle`='$name' WHERE `id_hospitle`=".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
/////////////////////////////////////////////////////////////////////////
function getAllroom_type()
{
    $conn = db_connect();
    $query = "SELECT * FROM `room_type`";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllroom_typebyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `room_type` where room_type_id = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function deleteroom_type($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `room_type` where room_type_id = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addroom_type($name)
{
    $conn = db_connect();
    $query = "INSERT INTO `room_type`( `room_type_name`) VALUES ('$name')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editroom_type($id , $name)
{
    $conn = db_connect();
    $query = "UPDATE `room_type` SET `room_type_name`='$name' WHERE `room_type_id`=".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}






/////////////////////////////////////////////////////////////////////////
function getAllrooms()
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms`  , `room_type` ,`hospitle` WHERE status_room = 'فارغة' and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}
function getAllroomArray()
{
    $conn = db_connect();
    $query = "SELECT rooms.id_room , rooms.info_rome,rooms.price_room ,hospitle.name_hospitle ,room_type.room_type_name FROM `rooms`  , `room_type` ,`hospitle` WHERE status_room = 'فارغة' and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}
function getAllroomArrayID($id)
{
    $conn = db_connect();
    $query = "SELECT rooms.id_room , rooms.info_rome,rooms.price_room ,hospitle.name_hospitle ,room_type.room_type_name FROM `rooms`  , `room_type` ,`hospitle` WHERE status_room = 'فارغة' and rooms.id_room=$id and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}


function getAllroomsbyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms` where id_room = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}
function deleterooms($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `rooms` where id_room = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function addrooms($info_rome,$price_room,$hospitle_room,$tybe_room,$status_room)
{
    $conn = db_connect();
    $query = "INSERT INTO `rooms`( `info_rome`, `price_room`, `hospitle_room`, `tybe_room`, `status_room`) VALUES ('$info_rome',$price_room,$hospitle_room,$tybe_room,'$status_room')";
    var_dump($query);
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}
function editrooms($id_room,$info_rome,$price_room,$hospitle_room,$tybe_room)
{
    $conn = db_connect();
    $query = "UPDATE `rooms` SET `info_rome`='$info_rome' ,`price_room`=$price_room,`hospitle_room`=$hospitle_room  WHERE `id_room`=".$id_room;
    var_dump($query);
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}


/////////////////////////////////////////////////////////////////
function getAlluser()
{
    $conn = db_connect();
    $query = "SELECT * FROM `user` ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAlluserbyID($id)
{
    $conn = db_connect();
    $query = "SELECT * FROM `user` WHERE id_user = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return $result;
}



function login($email ,$password)
{
    $conn = db_connect();
    $query = "SELECT * FROM `user` WHERE email_user = '$email'  and password_user ='$password' ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return mysqli_fetch_assoc($result);
}

function regstrion( $name_user, $email_user, $phone_user, $address_user, $nationl_num_user, $password_user, $type_user)
{
    $conn = db_connect();
    $query = "INSERT INTO `user`(`name_user`, `email_user`, `phone_user`, `address_user`, `nationl_num_user`, `password_user`,
     `type_user`) VALUES ('$name_user', '$email_user', '$phone_user', '$address_user', '$nationl_num_user', '$password_user', '$type_user')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return login($email_user ,$password_user);
}


function deleteuser($id)
{
    $conn = db_connect();
    $query = "DELETE FROM `user` where id_user = ".$id;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}


function booking_room( $booking_room_id, $booking_user_id)
{
    $conn = db_connect();
    $query = "INSERT INTO `booking`( `booking_user_id`, `booking_room_id`) 
    VALUES ($booking_user_id,$booking_room_id)
";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return $result;
}

function getAllbooking()
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms`  , `room_type` ,`hospitle` ,`booking`,`user` WHERE status_room = 'حجز' and booking.booking_user_id = user.id_user and booking.booking_room_id = rooms.id_room and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle ;
    ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
// var_dump($row);
    return $result;
}

function getAllbooking_sure()
{
    $conn = db_connect();
    $query = "SELECT * FROM `rooms`  , `room_type` ,`hospitle` ,`booking`,`user` WHERE status_room = 'حجز مؤكد' and booking.booking_user_id = user.id_user and booking.booking_room_id = rooms.id_room and room_type.room_type_id = rooms.tybe_room and rooms.hospitle_room = hospitle.id_hospitle ;
    ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    // $row = mysqli_fetch_array($result);
    return $result;
}



function sure_booking_room($id_room){
    $conn = db_connect();
    $query = "UPDATE `rooms` SET status_room = 'حجز مؤكد'  WHERE `id_room`=".$id_room;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;

}
function booking_room_api($id_room){
    $conn = db_connect();
    $query = "UPDATE `rooms` SET status_room = 'حجز'  WHERE `id_room`=".$id_room;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}

function close_booking_room($id_room){
    $conn = db_connect();
    $query = "UPDATE `rooms` SET status_room = 'فارغة'  WHERE `id_room`=".$id_room;
    $result = mysqli_query($conn, $query);
    if (!$result) {
        echo 'get services  failed! '.mysqli_error($conn);
        exit;
    }
    return true;
}



 function redirct ($url){
    header("location:$url");
}























