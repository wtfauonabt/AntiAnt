<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$title_lang = $this->lang->line('title');
?>
<link href="<?php base_url();?>/src/css/title.css" rel="stylesheet" />
<section class="title" id="title">
	<!-- <img src="<?php base_url();?>/src/image/home/back.jpg"> -->
	<div class="centered">
		<div class="slogan">
			<h2>
				<?php echo $title_lang['slogan_1'] ;?>
				<i class="fas fa-heart"></i>
				<?php echo $title_lang['slogan_2'] ;?>
			</h2>
		</div>
		<div class="tracking">
			<a href="<?php echo $track_link; ?>">
				<button type="button"><?php echo $title_lang['track'] ;?></button>
			</a>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/title.js"></script>
