 <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $contact_lang = $this->lang->line('contact');
?>
<link href="<?php base_url();?>/src/css/login.css" rel="stylesheet" />
 <section class="login-page" id="login_page">
	<img src="<?php echo base_url();?>/src/image/logo.png">
	<form class=" animate input_box" method="post" action="<?php echo site_url("/UserController/handle/login");?>">
		<div class="container ">
		<label for="uname"><b><?php echo $contact_lang['username']?></b></label>
		<input type="text" placeholder="Enter Username" name="user_name" required>

		<label for="psw"><b><?php echo $contact_lang['password']?></b></label>
		<input type="password" placeholder="Enter Password" name="password" required>

		<button type="submit">Login</button>
		<label>
		<input type="checkbox" checked="checked" name="remember"> Remember me
		</label>
		</div>

		<div class="container">
		<span class="psw">Forgot <a href="#">password?</a></span>
		</div>
 
	</form>
 </section>
 <script></script>
