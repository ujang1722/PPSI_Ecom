<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?=base_url(). 'assets/login/images/icons/favicon.ico'?>"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/bootstrap/css/bootstrap.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/fonts/iconic/css/material-design-iconic-font.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/animate/animate.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/css-hamburgers/hamburgers.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/animsition/css/animsition.min.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/select2/select2.min.css'?>">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/daterangepicker/daterangepicker.css'?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/css/util.css'?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url(). 'assets/login/css/main.css'?>">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('<?=base_url().'assets/frontend/images/login.jpg'?>');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="<?=base_url().'admin/login'?>">
				<h1 align="center"><a href="<?=base_url()?>"><img src="<?=base_url().'assets/images/logo.png'?>" style="max-width: 150px"></a></h1>

				<span class="login100-form-title p-b-37">
					Sign In
				</span>

				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="user_name" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="user_pwd" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Sign In
					</button>
				</div>
				<div class="flex-c p-b-112">

				</div>


				<div class="text-center">
					<a href="<?=base_url().'register'?>" class="txt2 hov1">
						Sign Up
					</a>
				</div>
			</form>

			
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/jquery/jquery-3.2.1.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/animsition/js/animsition.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/bootstrap/js/popper.js'?>"></script>
	<script src="<?=base_url(). 'assets/login/bootstrap/js/bootstrap.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/select2/select2.min.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/daterangepicker/moment.min.js'?>"></script>
	<script src="<?=base_url(). 'assets/login/daterangepicker/daterangepicker.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/countdowntime/countdowntime.js'?>"></script>
<!--===============================================================================================-->
	<script src="<?=base_url(). 'assets/login/js/main.js'?>"></script>

</body>
</html>