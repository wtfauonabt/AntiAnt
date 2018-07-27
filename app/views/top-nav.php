<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
?>
<div class="container top-nav">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler navbar-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="menu_btn nav  justify-content-center">
                    <li class="nav-item home_page_btn" tab="home">
                        <a class="nav-link <?php if($menu == 'home'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/home'); ?>"><i class="fas fa-home"></i> <?php echo $nav_lang['home']; ?></a>
                    </li>
                    <li class="nav-item" tab="profile">
                        <a class="nav-link <?php if($menu == 'profile'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/profile'); ?>"><?php echo $nav_lang['profile']; ?></a>
                    </li>
                    <li class="nav-item" tab="expertise">
                        <a class="nav-link <?php if($menu == 'expertise'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/expertise'); ?>"><?php echo $nav_lang['expertise']; ?></a>
                    </li>
                    <li class="nav-item" tab="pricing">
                        <a class="nav-link <?php if($menu == 'pricing'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/pricing'); ?>"><?php echo $nav_lang['pricing']; ?></a>
                    </li>
                    <li class="nav-item" tab="tracking">
                        <a class="nav-link <?php if($menu == 'tracking'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/tracking'); ?>"><?php echo $nav_lang['tracking']; ?></a>
                    </li>
                    <li class="nav-item" tab="about">
                        <a class="nav-link <?php if($menu == 'about'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/about'); ?>"><?php echo $nav_lang['about']; ?></a>
                    </li>
                    <li class="nav-item" tab="contact">
                        <a class="nav-link <?php if($menu == 'contact'): ?>active<?php endif;?>" href="<?php echo site_url('/Base/menu/contact'); ?>"><?php echo $nav_lang['contact']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
