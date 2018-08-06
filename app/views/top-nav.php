<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
?>
<nav class="navbar navbar-expand-lg ">
    <div class="logo">
         <a class="navbar-brand " href="#"><img src="../src/image/logo.png"></a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
     </button>

  <div class="collapse navbar-collapse menu_v2" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
					<?php foreach($nav_lang as $key => $value): ?>
						<li class="nav-item active" tab="<?php echo $key; ?>">
							<a class="nav-link <?php if($menu == $key): ?>active<?php endif;?>" href='<?php echo site_url("/Base/menu/{$key}"); ?>'>
								<?php if($key == 'home'): ?><i class="fas fa-home"></i><?php endif;?> <?php echo $value; ?>
                                <i class="fas fa-caret-down"></i>
							</a>

						</li>
					<?php endforeach;?>
                </ul>
            </div>
    </nav>

