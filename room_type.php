
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
    $row =  deleteroom_type($_GET['room_type_id_delete']);
}
if(isset($_GET['room_type_id_edit'])){
    $row =  getAllroom_typebyID($_GET['room_type_id_edit']);
    $action="edit";
    $name= $row['room_type_name'];
}
$result1 = getAllroom_type();
?>

<div class="container">
<form autocomplete="off" class="appForm clearfix" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>نوع غرفة </legend>
		<div class="input_wrapper  border">
			<label >اسم نوع الغرفة</label>
			<input required type="text" name="Name" id="Name" maxlength="50" value="<?= $name?>">
		</div>

	<input class="no_float" type="submit" name="<?= $action?>" value="حفظ">
</fieldset>
</form>
</div>
<br><br><br><br>
<div class="container">
    <table class="data">
        <thead>
            <tr>
            <th>الرقم</th>
            <th>نوع الغرفة</th>
            <th>العمليات</th>  
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $result1): foreach ($result1 as $row): ?>
            <tr>
                <td><?= $row['room_type_id']?></td>
                <td><?= $row['room_type_name'] ?></td>
                <td>
                    <a href="room_type.php?room_type_id_edit=<?= $row['room_type_id']?>"><i class="fa fa-edit"></i></a>
                    <a href="room_type.php?room_type_id_delete=<?= $row['room_type_id']?>" onclick="if(!confirm('سوف تقوم بحذف السجل')) return false;"><i class="fa fa-trash"></i></a>
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