<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$nav = $this->lang->line('nav');
?>
<link href="<?php base_url();?>/src/css/path_header.css" rel="stylesheet"/>
<section id="path_header" class="path_header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h5>
					<a class="font-weight-bold" href="<?php base_url();?>">
						<?php echo $nav['header']['home']; ?>
					</a>/
					<?php echo $nav['header'][$header]; ?>
				</h5>
			</div>
			<div class="col-12">
				<h2>
					<?php echo $nav[$header][$menu]; ?>
				</h2>
			</div>
		</div>
	</div>
</section>
<script src="<?php base_url();?>/src/js/path_header.js"></script>
