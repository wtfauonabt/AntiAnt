<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link href="<?php base_url();?>/src/css/home.css" rel="stylesheet" />

<section  id="home">
    <div class="card">
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
    </div>
</section>
<script src="<?php base_url();?>/src/js/home.js"></script>