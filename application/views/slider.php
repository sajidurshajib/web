
<div class="slider">
    <div class="owl-carousel owl-theme">
        <div class="item"  style="background-image:url('<?php echo base_url();?>/assets/img/2bg.jpg')">
            <div class="container">
                <div class="slide-contant col-md-10">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita rem ratione nemo delectus quae omnis. Minus perspiciatis qui odit maiores! Expedita rem ratione nemo delectus quae omnis. Minus perspiciatis qui odit maiores</p>
                    <a href="" class="slider-btn">Read more</a>
                </div>
            </div>
        </div>
        <div class="item"  style="background-image:url('<?php echo base_url();?>/assets/img/1bg.jpg')">
            <div class="container">
                <div class="slide-contant col-md-10">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita rem ratione nemo delectus quae omnis. Minus perspiciatis qui odit maiores! Expedita rem ratione nemo delectus quae omnis. Minus perspiciatis qui odit maiores</p>
                    <a href="" class="slider-btn">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>assets/owl/owl.carousel.min.js"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
    items:1,
    loop:true,
    nav:true,
    dots:false,
    navText: ['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
})
</script>    
