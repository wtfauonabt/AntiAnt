<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$collaborator_lang = $this->lang->line('collaborator');
$count = 1;

?>
<?php if($collaborator_list): ?>
	<link href="<?php base_url();?>/src/css/collaborator.css" rel="stylesheet" />
	<section class="collaborator">
		<h2 class="text-center">
			<?php echo $collaborator_lang['title']?>
		</h2>
		<div class="container-fluid collab">
						<div class="carousel slide" data-ride="carousel" id="collaborator_carousel">
				<div class="row"><?php foreach($collaborator_list['link'] as $key => $value): ?>
					<div class="col-2">
						<div class="carousel-inner">
							
										<div class="card">
											<a href="<?php echo $value; ?>">
												
													<img class="card_img" src="<?php base_url();?>/src/image/collaborator/<?php echo $collaborator_list['logo'][$key]; ?>" alt="Card image">
												
											</a>
										</div>
								
									</div>
								
								</div>
								<?php $count++; ?>
							<?php endforeach;?>
						
					</div>
				</div>
			</div>
			
		</div>
	</section>
	<script src="<?php base_url();?>/src/js/collaborator.js"></script>
<?php endif; ?>
