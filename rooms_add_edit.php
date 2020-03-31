
<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';
$conn = db_connect();
$hospatile = getAllHospitle();
$rooms_tybe = getAllroom_type();
$action="add";
$info_rome= "";
$price_room="";
if(isset($_POST['add'])){
    addrooms($_POST['info_rome'],$_POST['price_room'],$_POST['hospitle_room'],$_POST['tybe_room'],'فارغة');
    redirct('rooms.php');
}
if(isset($_POST['edit'])){
    editrooms($_GET['rooms_id_edit'],$_POST['info_rome'],$_POST['price_room'],$_POST['hospitle_room'],$_POST['tybe_room']);
    redirct('rooms.php');
}
if(isset($_GET['rooms_id_edit'])){
    $row =  getAllroomsbyID($_GET['rooms_id_edit']);
    $action="edit";
    $info_rome= $row['info_rome'];
    $price_room= $row['price_room'];
}
$result1 = getAllrooms();
?>
<br><br><br><br>
<div class="container">
<form autocomplete="off" class="appForm clearfix" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>نوع غرفة </legend>
		<div class="input_wrapper n100 border">
			<label > وصف الغرفة </label>
			<input required type="textare" name="info_rome" id="Name"  value="<?= $info_rome?>">
		</div>
		<div class="input_wrapper n30 border">
			<label > سعر الغرفة </label>
			<input required type="tex" name="price_room" id="Name" maxlength="50" value="<?= $price_room?>">
		</div>
        <div class="input_wrapper_other padding n30 select">
            <select  required name="hospitle_room">
                <option value="">المستشفي</option>
				<?php 
                    while ($row = mysqli_fetch_assoc($hospatile)) {
                        echo '<option value= '.$row['id_hospitle'].'>'.$row['name_hospitle'].'</option>';
                    }
                ?>
            </select>
        </div>
        <div class="input_wrapper_other padding n30 select">
            <select  required name="tybe_room">
                <option value="">نوع الغرفة</option>
				<?php 
                    while ($row = mysqli_fetch_assoc($rooms_tybe)) {
                        echo '<option value= '.$row['room_type_id'].'>'.$row['room_type_name'].'</option>';
                    }
                ?>
            </select>
        </div>

	<input class="no_float" type="submit" name="<?= $action?>" value="حفظ">
</fieldset>
</form>
</div>
<?php
// if (isset($conn)) {
//     mysqli_close($conn);
// }
require_once './template/footer.php';
?>