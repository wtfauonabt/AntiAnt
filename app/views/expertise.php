<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$expertise_lang = $this->lang->line('expertise');
?>
<link href="<?php base_url();?>/src/css/expertise.css" rel="stylesheet" />
<section id="profile">
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
</section>
<script src="<?php base_url();?>/src/js/expertise.js"></script>