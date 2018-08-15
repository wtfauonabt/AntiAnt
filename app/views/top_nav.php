<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$nav_lang = $this->lang->line('nav');
?>
<link href="<?php base_url();?>/src/css/top_nav.css" rel="stylesheet" />
<section id="top_nav" class="top_nav">
	<nav class="navbar navbar-expand-lg ">
		<div class="logo">
			<a  href="<?php echo base_url();?>"><img src="<?php echo base_url();?>/src/image/logo.png"></a>
		</div>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
		<div class=" collapse navbar-collapse menu_v2 navbar-center" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<?php foreach($nav_lang['header'] as $key => $value): ?>
					<?php if(isset($nav_drop_link[$key])): ?>
						<li class="nav-item dropdown" tab="<?php echo $key; ?>">
							<div class="dropdown">
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<?php if($key == 'home'): ?>
										<i class="fas fa-home"></i>
									<?php endif;?>
									<?php echo $value; ?>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
									<?php foreach($nav_drop_link[$key] as $menu => $link): ?>
										<a class="dropdown-item" href="
											<?php
												if($menu == "tracking"){
													echo $link;
												} else {
													echo site_url("/Base/menu/{$link}");
												}
											?>">
											<?php echo $nav_lang[$key][$menu]; ?>
										</a>
									<?php endforeach;?>
								</div>
							</div>
						</li>
					<?php else:?>
						<li class="nav-item" tab="<?php echo $key; ?>">
							<a class="nav-link" href="<?php echo site_url("/Base/menu/{$key}"); ?>">
								<?php if($key == 'home'): ?>
									<i class="fas fa-home"></i>
								<?php endif;?>
								<?php echo $value; ?>
							</a>
						</li>
					<?php endif;?>
				<?php endforeach;?>
			</ul>
		</div>
	</nav>
</section>
<script src="<?php base_url();?>/src/js/top_nav.js"></script>
