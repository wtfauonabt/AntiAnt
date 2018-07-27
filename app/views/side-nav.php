<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $side_lang = $this->lang->line('side');
?>
<div class="side-nav">
    <!-- Sidebar -->
    <nav id="sidebar navbar navbar-dark ">
        <div class="login">
            <form class="login_box">
                <div class="form-group">
                    <label><?php echo $side_lang['username']; ?></label>
                    <input class="form-control" type="text" placeholder="<?php echo $side_lang['username']; ?>" aria-label="<?php echo $side_lang['username']; ?>">
                </div>
                <div class="form-group">
                    <label><?php echo $side_lang['password']; ?></label>
                    <input class="form-control" type="password" placeholder="<?php echo $side_lang['password']; ?>" aria-label="<?php echo $side_lang['password']; ?>">
                </div>
                <div class="text-center">
                    <a href=""><?php echo $side_lang['register']; ?></a>
                </div>
                <div class="submit text-center">
                    <button class=" login_btn btn btn-success" type="submit"><?php echo $side_lang['login']; ?></button>
                </div>
            </form>

        </div>
    </nav>
</div>
