<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_lang = $this->lang->line('contact');
$sitemap_lang = $this->lang->line('sitemap');
$nav_lang = $this->lang->line('nav');
?>
<link href="<?php base_url();?>/src/css/sitemap.css" rel="stylesheet" />
<section id="sitemap" class="sitemap">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-12">
				<div class="row" style="text-align: center;">
					<?php foreach($nav_lang['header'] as $key => $header): ?>
						<?php if(isset($nav_lang[$key])): ?>
							<div class="col-lg-2 col-md-6 col-sm-6">
								<h4>
									<?php echo $header; ?>
								</h4>
								<?php foreach($nav_drop_link[$key] as $menu => $link): ?>
									<a href="
												<?php
									if($menu == "tracking"){
										echo $link;
									} else {
										echo site_url("/Base/menu/{$link}");
									}
									?>" class="sitemap-content">
										<p class="sitemap-content">
											<?php echo $nav_lang[$key][$menu]; ?>
										</p>
									</a>
								<?php endforeach;?>
							</div>
						<?php endif; ?>
					<?php endforeach;?>
					<div class="col-lg-4 col-md-6 col-sm-12">
						<h4 class="sitemap-header">
							<?php echo $contact_lang['title']; ?>
						</h4>
						<?php foreach($contact_lang['content'] as $key => $content): ?>
							<?php if($key == 'open_hours'): ?>
								<?php foreach($contact_lang['content'][$key] as $content): ?>
									<p class="sitemap-content"><?php echo $content; ?></p>
								<?php endforeach; ?>
							<?php else: ?>
								<p class="sitemap-content"><?php echo $content; ?></p>
							<?php endif; ?>
						<?php endforeach;?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-12">
				<h4 class="text-center">
					<?php echo $sitemap_lang['follow']; ?>
				</h4>
				<div class="container">
					<div class="row">
						<?php foreach($social_media_list as $source => $social_media): ?>
							<div class="card">
								<?php if($source == "wechat"): ?>
									<button type="button" class="wechat" data-toggle="modal" data-target="#wechat">
										<i class="<?php echo $social_media['icon'];?>"></i>
									</button>
								<?php else: ?>
									<a href="<?php echo $social_media['link'];?>">
										<?php if(isset($social_media['logo'])): ?>
											<img src="<?php base_url();?>/src/image/social_media/<?php echo $social_media['logo'];?>" class="logo"/>
										<?php else: ?>
											<i class="<?php echo $social_media['icon'];?>"></i>
										<?php endif; ?>
									</a>
								<?php endif; ?>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="wechat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="close-button">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="wechat-qr">
						<img src="<?php echo base_url();?>/src/image/wechat_qr.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/sitemap.js"></script>
