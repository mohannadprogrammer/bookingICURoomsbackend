<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';
$user = $_SESSION['user_info'];
//

$id =  $user['id_user'];
echo $id;
$result1 = getAlluserbyID($id);
if(isset($_GET['user_id_delete'])){
    $row =  deleteuser($_GET['user_id_delete']);
}

if($user['type_user'] == 'مدير نظام'){
    $result1 = getAlluser();

}

?>

<br><br>

<div class="container">
<br><br>
<?php 
if($user['type_user'] == 'مدير نظام'){
    echo '<a href="Regstrion.php" class="button"><i class="fa fa-plus"></i>اضافة</a>';
}
?>


    <table class="data">
        <thead>
            <tr>
            <th>الرقم</th>
            <th>اسم المسخدم</th>
            <th>البريد الالكتروني</th>  
            <th>الرقم الوطني</th>
            <th>رقم التلفون</th>
            <th>العنوان</th>
            <th>نوع المستخدم</th>   
            <th>العمليات</th> 
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $result1): foreach ($result1 as $row): ?>
            <tr>
            <!-- ``, ``, ``, ``, ``, ``, `password_user`, ` -->
                <td><?= $row['id_user']?></td>
                <td><?= $row['name_user'] ?></td>
                <td><?= $row['email_user']?></td>
                <td><?= $row['nationl_num_user'] ?></td>
                <td><?= $row['phone_user']?></td>
                <td><?= $row['address_user']?></td>
                <td><?= $row['type_user'] ?></td>
                <td>
                    <a href="Regstrion.php?user_id_edit=<?= $row['id_user']?>"><i class="fa fa-edit"></i></a>
                    <a href="user.php?user_id_delete=<?= $row['id_user']?>" onclick="if(!confirm('سوف تقوم بحذف السجل')) return false;"><i class="fa fa-trash"></i></a>
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