<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$contact_lang = $this->lang->line('contact');
$api_key = 'AIzaSyCQPjritES8o4t77VJSVSGz9keLKlklYFk';
$address = 'Hang+Wai+Industrial+Center,6+Kin+Tai+Street,Tuen+Mun,N.T.,Hong+Kong';
?>
<link href="<?php base_url();?>/src/css/contact.css" rel="stylesheet" />
<section id="contact" class="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
				<?php if($current_lang == "english"): ?>
					<!--<div id="map" class='map'>My map will go here</div>-->
                	<iframe width="100%" height="100%" rameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=<?php echo $api_key; ?>&q=<?php echo $address; ?>"></iframe>
                	<!--<img class='w-100 about_img' src='<?php base_url();?>/src/image/map.png'>-->
				<?php else: ?>
					<?php $this->load->view("baidu"); ?>
				<?php endif; ?>

            </div>
            <div class="col-lg-6 col-sm-12 contact_position">
				<div class="table-responsive">
					<table class="table">
						<tbody>
						<?php foreach($contact_lang['header'] as $key => $value): ?>
						<tr>
							<th><?php echo $value; ?></th>
							<?php if($key == 'open_hours'): ?>
								<td>
								<?php foreach($contact_lang['content'][$key] as $content): ?>
									<p><?php echo $content; ?></p>
								<?php endforeach; ?>
								</td>
							<?php else: ?>
								<td><?php echo $contact_lang['content'][$key]; ?></td>
							<?php endif; ?>
						</tr>
						<?php endforeach; ?>
						<tr>
						</tbody>
					</table>
				</div>
            </div>
        </div>
    </div>
</section>
<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
<script src="<?php base_url();?>/src/js/contact.js"></script>
