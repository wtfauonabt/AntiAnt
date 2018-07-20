<?php 
?>

        
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
    </div>
    <script src="<?php base_url();?>/src/js/body.js"></script>
</body>
