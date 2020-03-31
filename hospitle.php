<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';
$conn = db_connect();
$action="add";
$name="";
if(isset($_POST['add'])){
    addHospitle($_POST['Name']);
    $_POST=null;
}
if(isset($_POST['edit'])){
    editHospitle($_GET['hospitle_id_edit'] , $_POST['Name']);
    $_POST=null;
    redirct('hospitle.php');
}
if(isset($_GET['hospitle_id_delete'])){
    $row =  deleteHospitle($_GET['hospitle_id_delete']);
}
if(isset($_GET['hospitle_id_edit'])){
    $row =  getAllHospitlebyID($_GET['hospitle_id_edit']);
    $action="edit";
    $name= $row['name_hospitle'];
}
$result1 = getAllHospitle();
?>

<div class="container">
<form autocomplete="off" class="appForm clearfix" method="post" enctype="multipart/form-data">
	<fieldset>
		<legend>مستشفي جديد</legend>
		<div class="input_wrapper  border">
			<label >اسم المستشفي</label>
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
            <th>الاسم</th>
            <th>العمليات</th>  
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $result1): foreach ($result1 as $row): ?>
            <tr>
                <td><?= $row['id_hospitle']?></td>
                <td><?= $row['name_hospitle'] ?></td>
                <td>
                    <a href="hospitle.php?hospitle_id_edit=<?= $row['id_hospitle']?>"><i class="fa fa-edit"></i></a>
                    <a href="hospitle.php?hospitle_id_delete=<?= $row['id_hospitle']?>" onclick="if(!confirm('سوف تقوم بحذف السجل')) return false;"><i class="fa fa-trash"></i></a>
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