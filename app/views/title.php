<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php base_url();?>/src/css/title.css" rel="stylesheet" />
<section id="main-title">
    <div class="main-title">
        <div class="language text-right">
            <p>
                <?php if($current_lang == 'english'):?>
                    English
                <?php else: ?>
                    <a href="<?php echo site_url('/Language/change/english'); ?>">English</a>
                <?php endif; ?>
                /
                <?php if($current_lang == 'chinese'):?>
                    中文
                <?php else: ?>
                    <a href="<?php echo site_url('/Language/change/chinese'); ?>">中文</a>
                <?php endif; ?>
            </p>
        </div>
        <div class='container'>  
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <div class="main-logo">
                            <img class="img-responsive" src="<?php echo base_url('src/image/logo.png'); ?>">
                        </div>
                    </div>
                    <div class="col-9">
                        <h1 class="main_title text-center" ><?php echo $en_title; ?></h1>
                        <h1 class="main_title text-center"><?php echo $cn_title; ?></h1>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/title.js"></script>    
