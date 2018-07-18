<?php  
$lang
$image
?>

<!--about up page title-->
	<h2><?php echo $lang[about_us][title]?></h2>
<!--list of members ; 4 per row-->
<div class="container">
	<div class="row">
		<?php foreach ($lang[about_us][people] as $information):?>
			<div class="col-3">
				<img src="<?php echo $image["information"]?>">
				<p><?php echo $information ?></p>
			</div>
		<?php endforeach;?>
	</div>	
</div>
<div class="container">
	<div class="row">
		<div class="col-7">
			<p><?php echo $lang[about_us][company_information]?></p>
		</div>
		<div class="col-5">
			<img src="<?php echo $image["aboutus_img"]?>">
		</div>
	</div>	
</div>
