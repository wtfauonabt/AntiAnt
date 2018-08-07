<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $title_lang = $this->lang->line('title');
?>
<link href="<?php base_url();?>/src/css/title.css" rel="stylesheet" />
<nav class="navbar navbar-light navbar-expand first_bar " >
	<!--2 buttons on the right in the top contact bar-->
	<div class=" btn_position collapse navbar-collapse justify-content-end" >
		<div class="language ">
			<p>
				<?php if($current_lang == 'simp_chinese'):?>
					<a href="<?php echo site_url("/Base/switchLanguage/english/{$menu}"); ?>"><?php echo $title_lang["english"]; ?></a>
				<?php else: ?>
					<a href='<?php echo site_url("/Base/switchLanguage/simp_chinese/{$menu}"); ?>'><?php echo $title_lang["simp_chinese"]; ?></a>
				<?php endif; ?>
			</p>
		</div>
		<div class="language ">
			<p><a href="/">Create account</a><p>
		</div>
	</div>
</nav>
<script src="<?php base_url();?>/src/js/title.js"></script>    
