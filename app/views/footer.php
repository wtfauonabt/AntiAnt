<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
    $footer_lang = $this->lang->line('footer');
    $count = 0;
?>
<link href="<?php base_url();?>/src/css/footer.css" rel="stylesheet" />
<section id="footer" class="footer">
	<footer>
		<p><?php echo $footer_lang['copyright']; ?></p>
	</footer>
</section>
