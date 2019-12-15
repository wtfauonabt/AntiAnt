<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	$login_lang = $this->lang->line('login');
?>
<link href="<?php base_url();?>/src/css/login.css" rel="stylesheet" />
<section class="login-page" id="login_page">
 	<div class="limiter">
		<div class="container-login100" style="background-color: blue">
			<div class="wrap-login100">
				<span class="login100-form-logo">
					<img src="<?php echo base_url();?>/src/image/logo.png">
				</span>
				<form class=" animate input_box" method="post" action="<?php echo site_url("/account/handle/login");?>">
					<div class="container ">
						<div class="wrap-input100 validate-input" >
							<label class="input100" for="uname" >
								<b><?php echo $login_lang['username']?></b>
							</label>
							<input class="input100" type="text" name="user_name" value="" required>
						</div>
						<div class="wrap-input100 validate-input" >
							<label class="input100" for="psw">
								<b><?php echo $login_lang['password']?></b>
							</label>
							<input class="input100" type="password"  name="password" required>
						</div>
						<div class="">
							<input id="remember" type="checkbox" checked="checked" name="remember" value="1">
							<label for="remember">
								<span style="color: #fff">
									<?php echo $login_lang['remember']?>
								</span>
							</label>
						</div>
						<div class="container-login100-form-btn">
							<button class="login100-form-btn"type="submit" id="login" name="login"><?php echo $login_lang['login']?></button>
						</div>
					</div>
				</form>
				<div class="text-center p-t-90">
						<span class="psw">
							<a class="txt1" href="#"><?php echo $login_lang['forgot']?></a>
						</span>
				</div>
			</div>
		</div>
	</div>
 </section>

 <script></script>
