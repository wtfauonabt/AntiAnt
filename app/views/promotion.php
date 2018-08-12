<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$promotion_lang = $this->lang->line('promotion');
?>
<?php if($promotion_list): ?>
	<link href="<?php base_url();?>/src/css/promotion.css" rel="stylesheet" />
	<section id="promotion" class="promotion">
		<h2><?php echo $promotion_lang['title']?></h2>
		<h3><?php echo $promotion_lang['sub_title']?></h3>
		<div class="container">
			<?php foreach($promotion_list as $promotion): ?>
				<div class="card flex-row flex-wrap">
					<div class="card-header border-0">
						<img src="<?php base_url();?>/src/image/promotion/<?php echo $promotion['picture']; ?>" alt="">
					</div>
					<div class="card-block px-2">
						<h4 class="card-title"><?php echo $promotion['subtitle']; ?></h4>
						<p class="card-text">Description</p>

					</div>
					<div class="w-100"></div>
					<div class="card-footer w-100 text-muted">
						<?php echo $promotion['date']; ?>
						<a href="#" class="btn btn-primary float-right">BUTTON</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</section>
	<script src="<?php base_url();?>/src/js/promotion.js"></script>
<?php endif; ?>

