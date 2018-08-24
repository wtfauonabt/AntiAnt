<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php base_url();?>/src/css/email_enquiry.css" rel="stylesheet" />
<section id="email" class="email">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php $this->load->view("contact_form"); ?>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/email_enquiry.js"></script>
