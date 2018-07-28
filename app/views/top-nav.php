<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
?>
<div class="container top-nav">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-button navbar-default toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="menu_btn nav  justify-content-center">
					<?php foreach($nav_lang as $key => $value): ?>
						<li class="nav-item" tab="<?php echo $key; ?>">
							<a class="nav-link <?php if($menu == $key): ?>active<?php endif;?>" href='<?php echo site_url("/Base/menu/{$key}"); ?>'>
								<?php if($key == 'home'): ?><i class="fas fa-home"></i><?php endif;?> <?php echo $value; ?>
							</a>
						</li>
					<?php endforeach;?>
                </ul>
            </div>
        </div>
    </nav>
</div>
