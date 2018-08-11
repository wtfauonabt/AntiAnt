<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$collaborator_lang = $this->lang->line('collaborator');
?>
<link href="<?php base_url();?>/src/css/collaborator.css" rel="stylesheet" />
<section class="collaborator">
	<h2 class="text-center">
		<?php echo $collaborator_lang['title']?>
	</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 scrollable">
				<div class="col-auto">
					<?php foreach($collaborator_list['link'] as $key => $value): ?>
						<div class="card">
							<a href="<?php echo $value; ?>">
								<div class="card-body">
									<img class="card-img" src="<?php base_url();?>/src/image/collaborator/<?php echo $collaborator_list['logo'][$key]; ?>" alt="Card image">
								</div>
							</a>
						</div>

					<?php endforeach;?>
				</div>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/collaborator.js"></script>
