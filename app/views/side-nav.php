<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $nav_lang = $this->lang->line('nav');
?>
<div class="side-nav">
    <!-- Sidebar -->
    <nav id="sidebar navbar navbar-dark ">

        <div class="login chat-box" >
            <input type="checkbox"/>
        <label data-expanded="" data-collapsed="Login Here"></label>
            <form class="login_box chat-box-content" >
                <div class="form-group form_group_mob" >
                    <label><?php echo $nav_lang['username']; ?></label>
                    <input class="form-control form_control_mob" type="text" placeholder="<?php echo $nav_lang['username']; ?>" aria-label="<?php echo $nav_lang['username']; ?>">
                </div>
                <div class="form-group form_group_mob">
                    <label><?php echo $nav_lang['password']; ?></label>
                    <input class="form-control form_control_mob" type="password" placeholder="<?php echo $nav_lang['password']; ?>" aria-label="<?php echo $nav_lang['password']; ?>">
                </div>
                <div class="text-center register">
                    <a href=""><?php echo $nav_lang['register']; ?></a>
                </div>
                <div class="submit text-center">
                    <button class=" login_btn btn btn-success" type="submit"><?php echo $nav_lang['login']; ?></button>
                </div>
            </form>

        </div>
    </nav>
</div>