<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$expertise_lang = $this->lang->line('expertise');
?>
<link href="<?php base_url();?>/src/css/expertise.css" rel="stylesheet" />
<section id="expertise" class="expertise">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class='w-100 exper_img' src='<?php base_url();?>/src/image/expertise.png'>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="exper_list">
                <ul >
                    <?php foreach($expertise_lang['paragraph'] as $data): ?>
                        <li> <?php echo $data;?></li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/expertise.js"></script>
