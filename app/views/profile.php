<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$profile_lang = $this->lang->line('profile');
?>
<link href="<?php base_url();?>/src/css/profile.css" rel="stylesheet" />
<section id="profile" class="profile">
    <div class="container">
        
                <img class=' pro_img' src='<?php base_url();?>/src/image/about_us_title.png'>
            <div class="abt_info">
                <?php foreach($profile_lang['paragraph'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
            </div>
       
</section>
<script src="<?php base_url();?>/src/js/profile.js"></script>


