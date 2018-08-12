<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$home_lang = $this->lang->line('home');
$title_lang = $this->lang->line('title');
$promote_lang = $this->lang->line('promote');
?>
<link href="<?php base_url();?>/src/css/home.css" rel="stylesheet" />
<section id="home" class="home">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?php $this->load->view("title"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php $this->load->view("promotion"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php $this->load->view("contact_form"); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<?php $this->load->view("collaborator"); ?>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/home.js"></script>
