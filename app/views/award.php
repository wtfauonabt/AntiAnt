<?php
$lang;
$images;

?>
<!--the image in title section-->
<img src="<?php echo $images[award][title]?>">
<!--title-->
<h2><?php echo $lang[award][title]?></h2>
<!--list of their awards ; 3 per row-->
<div class="container">
	<div class="row">
		<?php foreach ($lang[award][info] as $information):?>
			<div class="col-4">
				<img src="<?php echo $image["information"]?>">
				<p><?php echo $information ?></p>
			</div>
		<?php endforeach;?>
	</div>
	
</div>

