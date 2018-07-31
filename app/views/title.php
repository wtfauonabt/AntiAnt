<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $title_lang = $this->lang->line('title');
?>
<link href="<?php base_url();?>/src/css/title.css" rel="stylesheet" />
<section id="main-title">
    <div class="main-title">
        <div class="language text-right">
            <p>
                <?php if($current_lang == 'simp_chinese'):?>
                    <?php echo $title_lang["simp_chinese"]; ?>
                <?php else: ?>
                    <a href='<?php echo site_url("/Base/switchLanguage/simp_chinese/{$menu}"); ?>'><?php echo $title_lang["simp_chinese"]; ?></a>
                <?php endif; ?>
                /
                <?php if($current_lang == 'english'):?>
                    <?php echo $title_lang["english"]; ?>
                <?php else: ?>
                    <a href="<?php echo site_url("/Base/switchLanguage/english/{$menu}"); ?>"><?php echo $title_lang["english"]; ?></a>
                <?php endif; ?>
            </p>
        </div>
        <div class='container'>  
            <div class="container">
                <div class="row">
					<!--
                    <div class="col-3">
                        <div class="main-logo ">
                            <img class="img-responsive" src="<?php echo base_url('src/image/logo.png'); ?>">
                        </div>
                    </div>

                    <div class="col-9 comp_name">
                        <h1 class="main_title text-center"><?php echo $title_lang['en_title']; ?></h1>
                        <h1 class="main_title text-center"><?php echo $title_lang['cn_title']; ?></h1>
                        <p class="text-center"><?php echo $title_lang['slogan']; ?></p>
                    </div>
                    -->
					<div class="col-12">
						<div class="main-title_w_logo">
							<img class="img-responsive" src="<?php echo base_url('src/image/title_w_logo.png'); ?>">
						</div>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/title.js"></script>    
