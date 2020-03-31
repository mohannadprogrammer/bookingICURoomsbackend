
<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';
$conn = db_connect();
$action="add";
$name="";
if(isset($_POST['add'])){
    addroom_type($_POST['Name']);
}
if(isset($_POST['edit'])){
    editroom_type($_GET['room_type_id_edit'] , $_POST['Name']);
    redirct('room_type.php');
}
if(isset($_GET['room_type_id_delete'])){
    $row =  deleterooms($_GET['room_type_id_delete']);
}
if(isset($_GET['room_type_id_edit'])){
    $row =  getAllroom_typebyID($_GET['room_type_id_edit']);
    $action="edit";
    $name= $row['room_type_name'];
}
$result1 = getAllrooms();
?>

<div class="container">
<br><br>

<a href="rooms_add_edit.php" class="button"><i class="fa fa-plus"></i>اضافة</a><br><br><br>
<a href="getAllbooking_sure.php" class="button" style="background:green" target="_blank">طباعة تقرير</a>

</div>
<br><br><br><br>
<div class="container">
    <table class="data">
        <thead>
            <tr>
            <th>الرقم</th>
            <th>وصف الغرفة</th>
            <th>سعر اليوم</th>  
            <th>نوع الغرفة</th>
            <th> المستشفي</th>
            <th>حالة الغرفة</th> 
            <th>العمليات</th> 
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $result1): foreach ($result1 as $row): ?>
            <tr>
        <!-- //`id_room`, `info_rome`, `price_room`, `hospitle_room`, `tybe_room`, `status_room` -->
                <td><?= $row['id_room']?></td>
                <td><?= $row['info_rome'] ?></td>
                <td><?= $row['price_room']?></td>
                <td><?= $row['room_type_name'] ?></td>
                <td><?= $row['name_hospitle']?></td>
                <td><?= $row['status_room'] ?></td>
                <td>
                    <a href="rooms_add_edit.php?rooms_id_edit=<?= $row['id_room']?>"><i class="fa fa-edit"></i></a>
                    <a href="rooms.php?room_type_id_delete=<?= $row['id_room']?>" onclick="if(!confirm('سوف تقوم بحذف السجل')) return false;"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>





<?php
// if (isset($conn)) {
//     mysqli_close($conn);
// }
require_once './template/footer.php';
?>