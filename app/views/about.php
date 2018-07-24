<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$about_lang = $this->lang->line('about');
?>
<link href="<?php base_url();?>/src/css/about.css" rel="stylesheet" />
<section id="profile">
   <!--about us page title-->   
   <!-- <h2><?php echo $about_lang['title'];?></h2>-->
    <!--list of members ; 4 per row-->
   <!-- <div class="container">
        <div class="row">
            <?php foreach ($about_lang['people'] as $information):?>
                <div class="col-3">
                    <img src="<?php echo $image["information"]?>">
                    <p><?php echo $information ?></p>
                </div>
            <?php endforeach;?>
        </div>	
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7">
                <p><?php echo $about_lang['company_information']?></p>
            </div>
            <div class="col-5">
                <img src="<?php echo $image["aboutus_img"]?>">
            </div>
        </div>	
</div> -->

<div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <img class='w-100 about_img' src='<?php base_url();?>/src/image/aboutUs.png'>
            </div>
            <div class="col-6">
                <div class="about-title">
                    <h1><?php echo $about_lang['title']?></h1>
                </div>
                <p><?php echo $about_lang['paragraph']?></p>

            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/about.js"></script>