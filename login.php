<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
<HEAD>
<TITLE>Login</TITLE>
<link href="css/phppot-style.css" type="text/css"
	rel="stylesheet" />

	<link href="css/style.css?version=1" rel="stylesheet" type="text/css">
<link href="css/user-registration.css" type="text/css"
	rel="stylesheet" />
<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
	body{
		background-color: #F7F7F7;
    color: #2D2D2D;
    text-align: center;
    }

.form-label{
color:black !important;
}
#login-btn{
	color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
	margin-bottom: 20px;
}
</style>
<!--Style end-->
</HEAD>
<body style = "background-color:#F7F7F7">
<div class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php include('include/nav-header.php');  ?>
</div>
</div>


	<div class="phppot-container">
	<img src="images/CC.png" style="margin-top:30px;">
		<div class="sign-up-container">


			<div class="login-signup">
				<a href="user-registration.php" style="color:black;">Don't have an account? Create Account</a>
			</div>
			<div class="signup-align">
				<form name="login" action="" method="post"
					onsubmit="return loginValidation()">
					<div class="signup-heading"  style="color:black;">Sign In</div>
				<?php if(!empty($loginResult)){?>
				<div class="error-msg"><?php echo $loginResult;?></div>
				<?php }?>
				<div class="row">

                 


						<div class="inline-block">
							<div class="form-label">
								Username<span class="required error" id="username-info"></span>
							</div>
							<input class="input-box-330" type="text" name="username"
								id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							<div class="form-label">
								Password<span class="required error" id="login-password-info"></span>
							</div>
							<input class="input-box-330" type="password"
								name="login-password" id="login-password">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now">
					</div>
				</form>
			</div>
		</div>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
<div  class="col-lg-12 col-md-12 col-sm-12">
<div>
<?php include('include/footer.php');  ?>
  <div>
</div>

</body>
</HTML>
