<?php
$table_data;
$table_header;
?>
<table>
	<?php foreach($table_header as $cell): ?>
		<th>
			<td>
				<?php echo $row ?>
			</td>
		</th>
	<?php endforeach; ?>
	<?php foreach($table_data as $row): ?>
		<tr>
			<td>
				<?php echo $row ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>