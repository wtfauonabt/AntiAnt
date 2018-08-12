<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$profile_lang = $this->lang->line('profile');
?>
<link href="<?php base_url();?>/src/css/profile.css" rel="stylesheet" />
<section id="profile" class="profile">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class='w-100 pro_img' src='<?php base_url();?>/src/image/profile/profile.png'>
            </div>
            <div class="col-lg-6 col-sm-12 content">
                <?php foreach($profile_lang['paragraph'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/profile.js"></script>


