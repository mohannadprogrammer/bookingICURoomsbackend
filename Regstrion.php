<?php
$title = "Regstrion";
require "./template/header.php";
require_once "./functions/database_functions.php";
$action="login";
if(isset($_POST['login']) ){
	$_SESSION['user_info'] = '';
	$_SESSION['user_info'] = regstrion( $_POST['name_user'], $_POST['email_user'], $_POST['phone_user'], $_POST['address_user'], $_POST['nationl_num_user'], $_POST['password_user'], $_POST['type_user']);
}
$name_user="";
$email_user="";
$phone_user="";
$address_user="";
$nationl_num_user="";
$password_user="";
if(isset($_GET['user_id_edit'])){
	$user = mysqli_fetch_assoc(getAlluserbyID($_GET['user_id_edit']));
	$name_user=$user['name_user'];
	$email_user=$user['email_user'];
	$phone_user=$user['phone_user'];
	$address_user=$user['address_user'];
	$nationl_num_user=$user['nationl_num_user'];
	$password_user=$user['password_user'];
	$action="edit";
	
}
if(isset($_POST['edit']) ){
	$_SESSION['user_info'] = '';
	$_SESSION['user_info'] = regstrion( $_POST['name_user'], $_POST['email_user'], $_POST['phone_user'], $_POST['address_user'], $_POST['nationl_num_user'], $_POST['password_user'], $_POST['type_user']);
}
?>
<div class="action_view login" style="margin: 0 auto 0 auto; padding:0">
    <div class="login_box animate" style="margin: 0 auto 0 auto; padding:0">
        <form autocomplete="off" method="post" enctype="application/x-www-form-urlencoded">
			<img src="public/img/login-icon.png" width="120">
			<center>
				<div class="input_wrapper username">
					<select  required name="type_user">
						<option value="">نوع المستخدم</option>
						<option value= 'مدير نظام'>مدير نظام</option>
						<option value= 'موظف استقبال'>موظف استقبال</option>
						<option value= 'مستخدم'>مستخدم</option>
					</select>
				</div>
			</center>
			<br>
            <div class="input_wrapper username">
                <input required type="text" name="name_user" value="<?= $name_user?>" id="ucname" maxlength="50" placeholder="اسم المستخدم">
			</div>
            <div class="input_wrapper username">
                <input required type="text" name="address_user" value="<?= $address_user?>" id="ucname" maxlength="50" placeholder="العنوان">
			</div>
			<div class="input_wrapper username">
                <input required type="text" name="nationl_num_user" value="<?= $nationl_num_user?>" id="ucname" maxlength="50" placeholder="الرقم الوطني">
            </div>
            <div class="input_wrapper username">
                <input required type="text" name="email_user" value="<?= $email_user?>" id="ucname" maxlength="50" placeholder="البريد الالكتروني">
            </div>
            <div class="input_wrapper username">
                <input required type="text" name="phone_user" value="<?= $phone_user?>" id="ucname" maxlength="50" placeholder="رقم التلفون">
            </div>
			
            <div class="input_wrapper password">
                <input required type="password" onkeyup='check();' value="<?= $password_user?>" id="password" name="password_user" maxlength="100" placeholder="كلمة المرور">
            </div>
             <div class="input_wrapper password">
                <input required type="password" onkeyup='check();' value="<?= $password_user?>" id="confirm_password" name="password_user" maxlength="100" placeholder="تاكيد كلمة المررور">
            </div>
              <div class="input_wrapper password" id="message">
                
			</div>
			<div class="input_wrapper_other password">
            
        </div>
            <input type="submit" name="<?= $action?>" value="تسجيل ">
        </form>
    </div>
</div>





<script>
var check = function() {
	if (document.getElementById('password').value ==
	  document.getElementById('confirm_password').value) {
	  document.getElementById('message').style.color = 'green';
	  document.getElementById('message').innerHTML = 'كلمة السر متطابقة';
	} else {
	  document.getElementById('message').style.color = 'red';
	  document.getElementById('message').innerHTML = 'كلمة السر غير متتطابقة';
	}
  }
</script>



<?php
	if(isset($conn)) {mysqli_close($conn);}
	require_once "./template/footer.php";
?>