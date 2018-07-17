<?php
$lang
$images
?>

<table>
	<th>
		<td>
			<?php echo $lang[expertise][title];?>
		</td>
	</th>
	<?php foreach($lang[expertise][data] as $row): ?>
		<tr>
			<td>
				<img src="<?php echo $images["row"] ?>">
				<p><?php echo $row?></p>
			</td>
		</tr>
	<?php endforeach; ?>
</table>