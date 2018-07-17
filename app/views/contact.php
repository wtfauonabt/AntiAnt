<?php

$lang
$address_img_path

?>


	<!--Contact page title-->
	<h2><?php echo $lang[contact_form][title]?></h2>

	<!--form-->
	<form action="/action_page.php">
		<!--personla information--> 
	  	<?php foreach (<?php echo $lang[contact_form][information]?> as $infom):?>

	  		<label for="info"><?php echo $infom ?></label>
	    	<input type="text" id="fname" name="<?php echo $infom?>" placeholder="">

	    <?php endforeach; ?>
	    <!--msg detail-->	
	    <label for="msg"><?php echo $lang[contact_form][msg]?></label>
	    <textarea id="msg"  placeholder="" ></textarea>
	    <input type="submit" value="<?php echo $lang[contact_form][submit] ?>">

  	</form>
  	<!--map and company contact information-->
  	<div class="container">
  		<div class="row">
  			<div class="col-6">
  				<!--map-->
 				<img src="<?php echo $address_img_path?>">
 			</div>
 			<div class="col-6">
 				<!--contact information-->
 				<p><?php echo $lang[contact_inf][address] ?></p>
 				<p><?php echo $lang[contact_inf][number] ?></p>
 				<p><?php echo $lang[contact_inf][email] ?></p>
 			</div>
 		</div>
 	</div>

