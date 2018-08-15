<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$collaborator_lang = $this->lang->line('collaborator');
$count = 1;
$first = true;
$collaborator_per_carousel = 3;
?>
<?php if($collaborator_list): ?>
	<link href="<?php base_url();?>/src/css/collaborator.css" rel="stylesheet" />
	<section class="collaborator">
		<h2 class="text-center">
			<?php echo $collaborator_lang['title']?>
		</h2>
		<div class="container-fluid">
			<div class="carousel slide" data-ride="carousel" id="collaborator_carousel">
				<div class="row">
					<div class="col-12">
						<div class="carousel-inner">
							<?php foreach($collaborator_list['link'] as $key => $value): ?>

								<?php if($count == 1): ?>
									<div class=" collaborator_posit_fixed carousel-item <?php if($first): ?>active<?php $first = false; ?><?php endif; ?>">
								<?php endif; ?>
										<div class="card">
											<a href="<?php echo $value; ?>">
												<div class="card-body">
													<img class="card-img" src="<?php base_url();?>/src/image/collaborator/<?php echo $collaborator_list['logo'][$key]; ?>" alt="Card image">
												</div>
											</a>
										</div>
								<?php if($count == $collaborator_per_carousel): ?>
									<?php $count = 0; ?>
									</div>
								<?php endif; ?>

								<?php $count++; ?>
							<?php endforeach;?>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<ol class="carousel-indicators">
						<li data-target="#collaborator_carousel" data-slide-to="0" class="active"></li>
						<?php for($i = 1; $i <= count($collaborator_list)/$collaborator_per_carousel + 1; $i++): ?>
							<li data-target="#collaborator_carousel" data-slide-to="<?php echo $i?>"></li>
						<?php endfor; ?>
					</ol>
				</div>
			</div>
		</div>
	</section>
	<script src="<?php base_url();?>/src/js/collaborator.js"></script>
<?php endif; ?>
