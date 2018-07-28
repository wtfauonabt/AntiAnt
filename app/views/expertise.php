<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$expertise_lang = $this->lang->line('expertise');
?>
<link href="<?php base_url();?>/src/css/expertise.css" rel="stylesheet" />
<!--<section id="profile">
    <table>
        <th>
            <td>
                <?php echo $expertise_lang['title'];?>
            </td>
        </th>
        <?php foreach($expertise_lang['data'] as $row): ?>
            <tr>
                <td>
                    <img src="<?php echo $images["row"] ?>">
                    <p><?php echo $row?></p>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>-->
<section id="expertise">
    <div class="container">
        <div class="row">
            <div class="col-12">
                
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <img class='w-100 exper_img' src='<?php base_url();?>/src/image/expertise.png'>
            </div>
            <div class="col-lg-6 col-sm-12">
                <div class="expertise-title">
                    <h1><?php echo $expertise_lang['title'];?></h1>
                </div>
                <div class="exper_list">
                <ul >
                    <?php foreach($expertise_lang['paragraph'] as $data): ?>
                        <li><?php echo $data;?></li>
                    <?php endforeach;?>
                </ul>

            </div>
        </div>
    </div>
</section>
<script src="<?php base_url();?>/src/js/expertise.js"></script>