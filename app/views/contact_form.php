<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_form_lang = $this->lang->line('contact_form');
?>
<link href="<?php base_url();?>/src/css/contact_form.css" rel="stylesheet"/>
<section id="contact_form" class="contact_form">
	<h2><?php echo $contact_form_lang['title']?></h2>
	<div >
		<form method="post" action="<?php site_url("/Base/contactForm/{$menu}#contact_form");?>" role="form">
			<div class="wrap-input3">
				<input class="input3" type="text" name="name" placeholder="<?php echo $contact_form_lang['name']?>">
			
				<input class="input3" type="number" name="phone" placeholder="<?php echo $contact_form_lang['phone']?>">
			
				<input class="input3" type="email" name="email" placeholder="<?php echo $contact_form_lang['email']?>">
			</div>
			<div class="wrap-input3 textarea">
				<textarea class="input3" name="message" placeholder="<?php echo $contact_form_lang['message']?>"></textarea>
			</div>
			<input class="btn btn-primary sub_btn" type="submit" value="<?php echo $contact_form_lang['submit']?>">

		</form>
	</div>
	<hr>
</section>
<script src="<?php base_url();?>/src/js/contact_form.js"></script>
