<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_lang = $this->lang->line('contact');
$sitemap_lang = $this->lang->line('sitemap');
?>
<link href="<?php base_url();?>/src/css/sitemap.css" rel="stylesheet" />
<section id="sitemap" class="sitemap">
	<div class="container">
		<div class="row">
			<?php foreach($sitemap_lang['header'] as $key => $header): ?>
				<div class="col-2">
					<h4>
						<?php echo $header; ?>
					</h4>
					<?php foreach($sitemap_lang['content'][$key] as $content): ?>
						<a href="">
							<p>
								<?php echo $content; ?>
							</p>
						</a>
					<?php endforeach;?>
				</div>
			<?php endforeach;?>
			<div class="col-2">
				<h4>
					<?php echo $contact_lang['title']; ?>
				</h4>
				<?php foreach($contact_lang['content'] as $key => $content): ?>
					<?php if($key == 'open_hours'): ?>
						<?php foreach($contact_lang['content'][$key] as $content): ?>
							<p><?php echo $content; ?></p>
						<?php endforeach; ?>
					<?php else: ?>
						<p><?php echo $content; ?></p>
					<?php endif; ?>
				<?php endforeach;?>
			</div>
			<div class="col-4">
				<h4 class="text-center">
					<?php echo $sitemap_lang['follow']; ?>
				</h4>
				<div class="container">
					<div class="row">
						<?php foreach($social_media_list as $social_media): ?>
							<div class="card">
								<a href="<?php echo $social_media['link'];?>">
									<?php if(isset($social_media['logo'])): ?>
										<img src="<?php base_url();?>/src/image/social_media/<?php echo $social_media['logo'];?>"/>
									<?php else: ?>
										<i class="<?php echo $social_media['icon'];?>"></i>
									<?php endif; ?>
								</a>
							</div>
						<?php endforeach;?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/sitemap.js"></script>
