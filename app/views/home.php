<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
$home_lang = $this->lang->line('home');
$title_lang = $this->lang->line('title');
$promote_lang = $this->lang->line('promote');
?>
<link href="<?php base_url();?>/src/css/home.css" rel="stylesheet" />

<section  class="home_v2" id="home">
    <img src="<?php base_url();?>/src/image/tracking_bg.jpg">
    <!--<div class="card">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 h-50" src="<?php base_url();?>/src/image/home/carousel_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-50" src="<?php base_url();?>/src/image/home/carousel_2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 h-10" src="<?php base_url();?>/src/image/home/carousel_3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
          </div>
    </div>-->
     <form>
                   <div class="form-group home" >
                       <label><?php echo $home_lang['title']; ?></label>
                       <input class="form-control" type="text" placeholder="<?php echo $home_lang['tracknum']; ?>" aria-label="<?php echo $home_lang['tracknum']; ?>">
                   </div>

                </form>
</section>


<!--contact-->


<section class="h_contact">
    <h2><?php echo $title_lang['slogan']?></h2>
    <div >
                    <form class="contact3-form validate-form form_size" >
                        <div class="wrap-input3 validate-input emp_alert" data-validate="Name is required">
                            <input id="name" class="input3" type="text" name="name" placeholder="YOUR NAME">
                            <span class="focus-input3"></span><p id="emp1"></p>
                        </div>

                        <div  class="wrap-input3 validate-input emp_alert" data-validate = "Valid email is required">
                            <input  id="email" class="input3" type="text" name="email" placeholder="EMAIL ADDRESS">
                            <span class="focus-input3"></span><p id="emp2"></p>
                        </div>

                        <div class="wrap-input3 validate-input emp_alert" data-validate = "Message is required">
                            <textarea id="message" class="input3" name="message" placeholder="MESSAGE"></textarea>
                            <span class="focus-input3"></span><p id="emp3"></p>
                        </div>

                        <div class="container-contact3-form-btn emp_alert">
                            <button type="button" onclick="inputEmptyFunction()" class="contact3-form-btn">
                                <?php echo $home_lang['send']?>
                            </button>
                        </div>
                    </form>
                </div>
</section>

<!--promote-->

<section class="promote">
    <h2><?php echo $home_lang['pro_title']?></h2>
    <h3><?php echo $home_lang['pro_inf']?></h3>
    <div class="container">
        <div class="row">
            <?php foreach($promote_lang as $key => $value): ?>
                <div class="col-6">
                    <?php if($key == 'subtitle'): ?>
                        <p><?php echo $value; ?></p>
                    <?php endif;?>
                    <?php if($key == 'date'): ?>
                        <p><?php echo $value; ?></p>
                    <?php endif;?>
                </div>
            <?php endforeach;?>
        </div>

    </div>
</section>
<script src="<?php base_url();?>/src/js/home.js"></script>


<div class="col-12">
	<?php $this->load->view("collaborator"); ?>
</div>
