<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
    $footer_lang = $this->lang->line('footer');
    $count = 0;
?>
<link href="<?php base_url();?>/src/css/footer.css" rel="stylesheet" />
<section id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 footer_mob">
                <ul>
                    <?php foreach($nav_lang as $key => $value): ?>
						<?php if($count == 0)?>

						<li>
							<?php if($count++ == 0):?>
								|
							<?php endif; ?>
							<a href='<?php echo site_url("/Base/menu/{$key}"); ?>'>
								<?php echo $value;?>
							</a>
							|
						</li>
                    <?php endforeach;?>
                </ul>
                <p><?php echo $footer_lang['copyright']; ?></p>
            </div>
        </div>
    </div>
</section>
