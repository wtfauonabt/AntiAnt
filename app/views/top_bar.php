<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$top_bar_lang = $this->lang->line('top_bar');
?>
<link href="<?php base_url();?>/src/css/top_bar.css" rel="stylesheet"/>
<section id="top_bar" class="top_bar">
	<nav class="navbar navbar-light navbar-expand" >
		<!--2 buttons on the right in the top contact bar-->
		<div class=" btn_position collapse navbar-collapse justify-content-end">
			<div class="language">
				<p>
					<?php if($current_lang == 'simp_chinese'): ?>
						<a href="<?php echo site_url("/Base/switchLanguage/english/{$menu}"); ?>">
							<?php echo $top_bar_lang["english"]; ?>
						</a>
					<?php else: ?>
						<a href='<?php echo site_url("/Base/switchLanguage/simp_chinese/{$menu}"); ?>'>
							<?php echo $top_bar_lang["simp_chinese"]; ?>
						</a>
					<?php endif; ?>
				</p>
			</div>
			<div class="login">
				<p>
					<a href="<?php echo site_url("/Base/user/login"); ?>">
						<?php echo $top_bar_lang["login"]; ?>
					</a>
				<p>
			</div>
		</div>
	</nav>
</section>
<script src="<?php base_url();?>/src/js/top_bar.js"></script>
