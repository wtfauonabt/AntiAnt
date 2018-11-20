<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $initial_title_lang = $this->lang->line('initial_title');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

		<!-- Display icon -->
        <link rel="icon" href="<?php echo base_url('src/image/favicon.ico'); ?>" type="image/x-icon"/>
		<!-- Title Tags-->
		<?php if($current_lang == 'english'): ?>
			<title><?php echo $initial_title_lang['en_title']; ?></title>
		<?php else: ?>
			<title><?php echo $initial_title_lang['cn_title']; ?></title>
		<?php endif; ?>

		<!-- CSS -->
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
		<!-- Font Awsome -->
		<link href="<?php base_url();?>/src/css/fontawesome/css/all.css" rel="stylesheet" />
        <!-- Custom -->
        <link href="<?php base_url();?>/src/css/base.css" rel="stylesheet" />

		<!-- JavaScript -->
		<!-- JQuery (allow individual page calls) -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!-- Select2 -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<!-- Fontawsome -->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
		<!-- Popper -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<!-- Custom -->
		<script src="<?php base_url();?>/src/js/base.js"></script>
    </head>
    <?php if ($menu == "home"):  ?>
    	<?php echo "<body class='home_bg'>";?>
    <?php endif; ?>
    <?php if ($menu != "home" && $menu != "login_page"):  ?>
    	<?php echo "<body class='about_bg'>";?>
    <?php endif; ?>

		<div class="content">
			<!-- Display fixed nav bar -->
			<?php if ($menu != "login_page"): ?>
				<?php $this->load->view("top_bar"); ?>
				<?php $this->load->view("top_nav"); ?>
			<?php endif; ?>

			<!-- Display additional header if not Home Page -->
			<?php
			if($menu != "home" && $menu != "login_page" && $menu != "profile"){
				$this->load->view("path_header");
			}
			?>

			<!-- Display the main page -->
			<?php $this->load->view($menu); ?>

		</div>
		<?php if ($menu != "login_page"): ?>
			<?php $this->load->view("sitemap"); ?>
			<!-- Display footer -->
			<?php $this->load->view("footer"); ?>
		<?php endif; ?>

    </body>
</html>
