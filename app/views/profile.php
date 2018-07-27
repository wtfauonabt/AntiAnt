<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$profile_lang = $this->lang->line('profile');
?>
<link href="<?php base_url();?>/src/css/profile.css" rel="stylesheet" />
<section id="profile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class='w-100 pro_img' src='<?php base_url();?>/src/image/profile/profile.png'>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="profile-title">
                    <h1><?php echo $profile_lang['title']?></h1>
                </div>
                <p><?php echo $profile_lang['paragraph']?></p>

            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/profile.js"></script>


