<?php
session_start();
// if (!isset($_SESSION['lang'])) {
//     $_SESSION['lang'] = 'ar';
// }
// $lang ='ar';
// require '/index' . $lang . '.php';

?>
<!doctype html>
<html class="no-js" lang="ar">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hospitle</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="public/img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="public/img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="public/img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="public/img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="public/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="public/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="public/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="public/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="public/img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="public/img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="public/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/img/favicon-16x16.png">
    <link rel="manifest" href="public/img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link type="text/css" rel="stylesheet" href="public/css/normalize.css" />
    <link type="text/css" rel="stylesheet" href="public/css/fawsome.min.css" />
    <link type="text/css" rel="stylesheet" href="public/css/googleicons.css" />
    <?php echo "<link type='text/css' rel='stylesheet' href='public/css/mainar.css' />"; ?>
        <script src="public/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body><div class="wrapper"><header class="main">
    <a href="javascript:;" data-menu-status="false" class="menu_switch "><i class="fa fa-bars"></i></a>
    <h1>الرئسية</h1>
    <div class="user_menu_container">
        <a href="javascript:;" class="language_switch user">
            <span>Welcome <?php if (isset($_SESSION['user_info']['name_user'])){echo $_SESSION['user_info']['name_user'];}?></span>
            <i class="material-icons">keyboard_arrow_down</i>
        </a>
        <ul class="user_menu">
            <li><a href="login.php"><i class="fa fa-key"></i>تسجيل دخول</a></li>
            <li><a href="admin_signout.php"><i class="fa fa-sign-out"></i>تسجيل خرج</a></li>
        </ul>
    </div>
    <!-- <a href="/messages" class="language_switch"><i class="fa fa-envelope"></i></a>
    <a href="javascript:;" class="language_switch notifications"><i class="fa fa-bell"></i></a> -->
</header><nav class="main_navigation ">
    <!-- -->
    <ul class="app_navigation">

        
      
        <?php if(isset($_SESSION['user_info']['type_user'])): ?>
        
            <?php if($_SESSION['user_info']['type_user']=='مدير نظام'): ?>
                <li class=""><a href="booking.php"><i class="fa fa-dashboard"></i> الحجوزات</a></li>
                <li class=""><a href="hospitle.php"><i class="fa fa-dashboard"></i> المستشفيات</a></li>
                <li class=""><a href="room_type.php"><i class="fa fa-dashboard"></i>  انواع غرف العناية</a></li>
                <li class=""><a href="rooms.php"><i class="fa fa-dashboard"></i>غرف العناية</a></li>
                <li class=""><a href="user.php"><i class="fa fa-dashboard"></i>المستخدمين</a></li>
                <li class=""><a href="booking_sure.php"><i class="fa fa-dashboard"></i>الحجوزات المؤكدة</a></li>
            <?php  endif; ?>
            <?php if($_SESSION['user_info']['type_user']=='موظف استقبال'): ?>
                <li class=""><a href="booking.php"><i class="fa fa-dashboard"></i> الحجوزات</a></li>

                <li class=""><a href="booking_sure.php"><i class="fa fa-dashboard"></i>الحجوزات المؤكدة</a></li>
            <?php  endif; ?>
            <?php if($_SESSION['user_info']['type_user']=='مستخدم'): ?>
                <li class=""><a href="user.php"><i class="fa fa-dashboard"></i>المستخدمين</a></li>
            <?php  endif; ?>
        <?php  endif; ?>
       
        </ul>
</nav>
<div class="action_view ">