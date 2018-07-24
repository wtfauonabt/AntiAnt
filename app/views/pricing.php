<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
$pricing_lang = $this->lang->line('pricing');
?>
<link href="<?php base_url();?>/src/css/pricing.css" rel="stylesheet" />
<section id="priciing" class="pricing">
	<table>
		<?php foreach($pricing_lang['header'] as $cell): ?>
			<th>
				<td>
					<?php echo $cell; ?>
				</td>
			</th>
		<?php endforeach; ?>
		<?php foreach($pricing_lang['data'] as $row): ?>
			<tr>
				<td>
					<?php echo $row ;?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</section>