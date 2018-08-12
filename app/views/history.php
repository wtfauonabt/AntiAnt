<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$about_lang = $this->lang->line('about');
?>
<link href="<?php base_url();?>/src/css/history.css" rel="stylesheet" />
<section id="history" class="history">
<div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class='w-100 about_img' src='<?php base_url();?>/src/image/aboutUs.png'>
            </div>
            <div class="col-lg-6 col-sm-12">
                <?php foreach($about_lang['paragraph'] as $paragraph): ?>
                    <p><?php echo $paragraph; ?></p>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/history.js"></script>
