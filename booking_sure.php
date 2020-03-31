<?php
$title = 'Add Hospetl';
require_once './template/header.php';
require_once './functions/database_functions.php';

if(isset($_GET['id_room'])){
    close_booking_room($_GET['id_room']);
}
$result1 = getAllbooking_sure();
?>

<br><br>

<div class="container">
<br><br>

<a href="getAllbooking_sure.php" class="button" style="background:green" target  ="_blank">طباعة تقرير</a>
    <table class="data">
        <thead>
            <tr>
            <th>الرقم</th>
            <th>اسم المسخدم</th>
            <th>الرقم الوطني</th>
            <th>رقم التلفون</th>

            <th>المستشفي</th>
            <th>نوع الغرفة</th>

            <th>التاريخ</th>
            <th>السعر</th>
            <th>الحالة</th>
            <th>الغاءالحجز</th> 
            </tr>
        </thead>
        <tbody>
        <?php if(false !== $result1): foreach ($result1 as $row): ?>
            <tr>
            <!-- ``, ``, ``, ``, ``, ``, `password_user`, ` -->
                <td><?= $row['id_room']?></td>
                <td><?= $row['name_user'] ?></td>
                <td><?= $row['nationl_num_user']?></td>
                <td><?= $row['phone_user']?></td>

                <td><?= $row['name_hospitle']?></td>
                <td><?= $row['room_type_name'] ?></td>

                <td><?= $row['booking_date']?></td>
                <td><?= $row['price_room'] ?></td>
                <td><?= $row['status_room'] ?></td>
                <td>
                    <a href="booking_sure.php?id_room=<?= $row['id_room']?>"><i class="fa fa-edit"></i></a>
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