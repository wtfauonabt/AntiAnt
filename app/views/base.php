<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" href="<?php echo base_url('src/image/favicon.ico'); ?>" type="image/x-icon"/>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <!-- Select2 -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <!-- Custom -->
        <link href="<?php base_url();?>/src/css/base.css" rel="stylesheet" />
    </head>
    
    <body>
        <link href="<?php base_url();?>/src/css/body.css" rel="stylesheet" />
        <div class="background-logo text-center">
            <img class="img-responsive" src="<?php echo base_url('src/image/logo.png'); ?>">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <?php $this->load->view("title"); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-2">
                    <?php $this->load->view("side-nav"); ?>
                </div>
                <div class="col-10">
                    <?php $this->load->view("top-nav"); ?>
                    <?php $this->load->view($menu); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <?php $this->load->view("footer"); ?>
                </div>
            </div>
        </div>
        
        <!-- JQuery -->
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
    </body>
</html>