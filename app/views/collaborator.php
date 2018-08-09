<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$collaborator_lang = $this->lang->line('collaborator');
?>
<link href="<?php base_url();?>/src/css/collaborator.css" rel="stylesheet" />
<section class="colaborator">
	<h2><?php echo $collaborator_lang['title']?></h2>
	<div class="container">
		<div class="row">
			<?php foreach($collaborator_list['link'] as $key => $value): ?>
				<div class="col-3">
					<div class="card text-center">
						<a href="<?php echo $value; ?>">
							<div class="card-body">
								<img class="card-img" src="<?php base_url();?>/src/image/collaborator/<?php echo $collaborator_list['logo'][$key]; ?>" alt="Card image">
								<img class="card-text"></img>
							</div>
						</a>
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/collaborator.js"></script>
