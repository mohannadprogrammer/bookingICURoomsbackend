<?php 
	$title = "Login";
	require "./template/header.php";
	require_once "./functions/database_functions.php";

	if(isset( $_POST['email']) && isset($_POST['pass'])) {
        $row = login($_POST['email'] ,$_POST['pass']);
        // $_SESSION['user_info'] = '';
	    $_SESSION['user_info'] =$row;
			
	if(!$row){
		echo '<p class="lead text-center text-muted">عفوا هذا المتخدم غير موجود </p>';
	}
    redirct("index.php");
    // var_dump($_SESSION['user_info']);
}
?>
<div class="action_view login">

    <div class="login_box animate">
        <form autocomplete="off" method="post" enctype="application/x-www-form-urlencoded">
            <div class="border"></div>
            <h1>تسجيل الدخول</h1>
            <img src="public/img/login-icon.png" width="120">
            <div class="input_wrapper username">
                <input required type="text" name="email" id="ucname" maxlength="50" placeholder="البريد الالكتروني">
            </div>
            <div class="input_wrapper password">
                <input required type="password" id="ucpwd" name="pass" maxlength="100" placeholder="كلمة المرور">
            </div>
            <input type="submit" name="login" value="تسجيل الدخول">
        </form>
    </div>
</div>


<?php
  if(isset($conn)) {mysqli_close($conn);}
  require_once "./template/footer.php";
?>