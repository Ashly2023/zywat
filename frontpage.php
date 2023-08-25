<?php
/* Template name: frontpage */
 get_header(); ?>

<main>
        <section class="home-slider">
            <div class="hero-slider">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                           
                           
                <?php 
         $args = array(  
        'post_type' => 'Banner',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );
    $loop = new WP_Query( $args ); 
    
    while ( $loop->have_posts() ) : $loop->the_post();
    $url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID())); ?>
    <?php echo get_the_ID (); ?>


                        <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" style="background: url(<?php   echo $url; ?>);">
                                <div class="meta" data-aos="fade-up">
                                    <div data-swiper-parallax="400" class="slide-title">
                                        <h1><?php the_title();?><span></span></h1>
                                    </div>

                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="contact.html" class="hover"><?php echo pods_field_display( 'contact' );?><div class="overlay"></div></a>
                                        <a href="menu.html" class="menu hover"><?php echo pods_field_display( 'menu' );?><div class="overlay"></div></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php
                        endwhile;

wp_reset_postdata(); ?> 
                        <!-- <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" style="background: url(<?php echo CFS()->get( 'banner2' ); ?>);">
                                <div class="meta" data-aos="fade-up">
                                    <div data-swiper-parallax="400" class="slide-title">
                                        <h1>We are Serving High Quality In<span>Low Price</span></h1>
                                    </div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="contact.html" class="hover">Contact us<div class="overlay"></div></a>
                                        <a href="menu.html" class="menu hover">Our Menu<div class="overlay"></div></a>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                        <!-- <div class="swiper-slide">
                            <div class="slide-inner slide-bg-image" style="background: url(<?php echo CFS()->get( 'banner3' ); ?>);">
                                <div class="meta" data-aos="fade-up">
                                    <div data-swiper-parallax="400" class="slide-title">
                                        <h1><?php echo CFS()->get( 'weare' ); ?> <span><?php echo CFS()->get( 'lowprice' ); ?></span></h1>
                                    </div>
                                    <div data-swiper-parallax="500" class="slide-btns">
                                        <a href="contact.html" class="hover"><?php echo CFS()->get( 'contactus' ); ?><div class="overlay"></div></a>
                                        <a href="menu.html" class="menu hover"><?php echo CFS()->get( 'ourmenu' ); ?><div class="overlay"></div></a>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                    </div>

                    <div class="swiper-pagination"></div>

                </div>
            </div>
            <div class="down-arrow">
                <a href="#about">
                    <figure><img src="<?php echo get_template_directory_uri();?>/images/down-arrow.svg" alt=""></figure>
                </a>
            </div>

        </section>
        <section class="about" id="about">
            <div class="ab-left">
                <figure data-aos="fade-up" data-aos-duration="1000">
                    <img src="<?php echo CFS()->get( 'coffemug'); ?>" alt="">
                </figure>

            </div>
            <div class="ab-right">
                <h2 data-aos="fade-up" data-aos-duration="200"><?php echo CFS()->get( 'niceto' ); ?></h2>
                <h1 data-aos="fade-up" data-aos-duration="300"><?php echo CFS()->get( 'morethan' ); ?><span><?php echo CFS()->get( 'cafe' ); ?></span></h1>
                <p data-aos="fade-up" data-aos-duration="400"><?php echo CFS()->get( 'it_is_the' ); ?></p>
               
                <div class="button" data-aos="fade-up" data-aos-duration="600"><a href="about.html" class="hover"><?php echo CFS()->get( 'more_about_us' ); ?> <div class="overlay"></div></a></div>

            </div>
            <div class="shape1"><img src="<?php echo get_template_directory_uri();?>/images/cup.png" alt=""></div>
            <div class="shape3"><img src="<?php echo get_template_directory_uri();?>/images/cookbook.svg" alt=""></div>
            <div class="shape2"><img src="<?php echo get_template_directory_uri();?>/images/coffe-cup.png" alt=""></div>
            <div class="shape4"><img src="<?php echo get_template_directory_uri();?>/images/coffee-beans.svg" alt=""></div>
        </section>
                      
       

        <section class="category">
            <div class="title" data-aos="fade-up" data-aos-duration="2000">
                <figure><img src="<?php echo get_template_directory_uri();?>/images/book-icon.png" alt=""></figure>
                <h1><span>Menu</span> that <span>always</span> make you fall in <span>love</span></h1>
            </div>
            <!-- tabs -->
            <div class="sky-tabs sky-tabs-pos-top-left sky-tabs-anim-flip sky-tabs-response-to-icons" data-aos="fade-up"
                data-aos-duration="4000">

                <input type="radio" name="sky-tabs" checked id="sky-tab1" class="sky-tab-content-1">
                <label for="sky-tab1"><span><span>Cheesecake</span></span></label>

            
           
                 <input type="radio" name="sky-tabs" id="sky-tab2" class="sky-tab-content-2">
                <label for="sky-tab2"><span><span>cakes</span></span></label> 

                <input type="radio" name="sky-tabs" id="sky-tab3" class="sky-tab-content-3">
                <label for="sky-tab3"><span><span>Breakfast</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab4" class="sky-tab-content-4">
                <label for="sky-tab4"><span><span>Waffles</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab5" class="sky-tab-content-5">
                <label for="sky-tab5"><span><span>Hot Drinks</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab6" class="sky-tab-content-6">
                <label for="sky-tab6"><span><span>Shakes</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab7" class="sky-tab-content-7">
                <label for="sky-tab7"><span><span>ACAI</span></span></label>

                <input type="radio" name="sky-tabs" id="sky-tab8" class="sky-tab-content-8">
                <label for="sky-tab8"><span><span>Mojito</span></span></label>

                <label class="switcher"><span><span><a href="#"><i
                                    class="icon-reorder"></i>Tabs</a></span></span></label>



                <ul>
                    <li class="sky-tab-content-1">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Pistachio-Cheese-Cake.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Pistachio<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/baked-caramel-cheese-cake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Caramel<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Chocolate-Cheesecake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Chocolate<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Strawbeerry-Cheesecake.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Strawberry<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Lotus-Cheesecake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Lotus<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Chilled-Mango-Cheesecake.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Mango chilled <span>cheesecake</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/milk-chocolate-home.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Milk chocolate <span>san Sebastian</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Nutella-Cheesecake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Nutella <span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img
                                                    src="<?php echo get_template_directory_uri();?>/images/baked-cheesecake/Baked-Strawbeerry-Cheesecake.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Strawberry<span>Cheesecake</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-2">

                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Chocloate-Cupcake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Chocolate <span>Cupcake</span></h3>
                                                <h5>12 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/vanilla-cupcake.jpg" alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Vanilla <span>Cupcake</span></h3>
                                                <h5>12 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Brownies-cakes.jpg" alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Brownies</h3>
                                                <h5>20 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-3">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/breakfast/French-Omelette.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>French <span>Omelette</span></h3>
                                                <h5>20 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/breakfast/french-toast.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>French <span>Toast</span></h3>
                                                <h5>20 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-4">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Banana-Chocolate-Waffle.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Banana <span>Chocolate</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Fruit-Waffle.jpg" alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Fruits <span>Waffle</span></h3>
                                                <h5>20 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Strawberry-Cinnamon-Waffle.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Strawberry <span>Cinnamon</span></h3>
                                                <h5>28 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-5">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Caramel-Macchiato.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Caramel <span>Macchiato</span></h3>
                                                <h5>14 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Cappuccino.jpg" alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Cappuccino</h3>
                                                <h5>12 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-6">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Banana-Caramel-Pie.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Banana Caramel <span>Pie Milkshake</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Pistachio-Milk-Shake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Pistachio <span>Milkshake</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Vanilla-Milkshake.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Vanilla <span>Milkshake</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Peanut-Butter-Milkshake.jpg"
                                                    alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Peanut <span>Butter Milkshake</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-7">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Classic-Acai.jpg" alt=""></div>
                                            <div class="menu-des equal-height">

                                                <h3>Classic <span>Acai</span></h3>
                                                <h5>25 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>
                    <li class="sky-tab-content-8">
                        <div class="menu-list">
                            <div class="menu-list-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Passion-Fruit-Mojito.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Passion <span>Fruit Mojito</span></h3>
                                                <h5>14 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="menu-box">
                                        <a href="#">
                                            <div class="menu-image"><img src="<?php echo get_template_directory_uri();?>/images/Strawberry-Mojito.jpg" alt="">
                                            </div>
                                            <div class="menu-des equal-height">

                                                <h3>Strawberry <span>Mojito</span></h3>
                                                <h5>14 AED</h5>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <!--/ tabs -->

            <a href="menu.html" class="menu hover" data-aos="fade-up" data-aos-duration="6000">View Our Menu <div
                    class="overlay"></div></a>
        </section>
        <section class="gallery" data-aos="fade-up" data-aos-duration="2000">
            <!-- <h1>Your favorite latte</h1> -->
            <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
            <div class="category-slider owl-carousel owl-theme">
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/gallery1.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>GREEK SALAD</h3>
                                <h5>AED - 25</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/Cappuccino-12-AED.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>Cappuccino</h3>
                                <h5>AED - 12</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/Caramel-Cheesecake-28-AED.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>Caramel Cheesecake</h3>
                                <h5>AED - 28</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/Coffee-Lovers-Milkshake-25-AED.jpg" alt="">
                            </div>
                            <div class="product-des">
                                <h3>Coffee Lovers Milkshake</h3>
                                <h5>AED - 25</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/gallery1.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>GREEK SALAD</h3>
                                <h5>AED - 25</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/gallery2.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>Banana Chocolate</h3>
                                <h5>AED - 28</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/gallery3.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>ACAI</h3>
                                <h5>AED - 25</h5>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <div class="product-box">
                        <a href="javascript:void(0)">
                            <div class="product-image"><img src="<?php echo get_template_directory_uri();?>/images/gallery4.jpg" alt=""></div>
                            <div class="product-des">
                                <h3>Chilled Dark Chocolate</h3>
                                <h5>AED - 25</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="shape1"><img src="<?php echo get_template_directory_uri();?>/images/gallery-shape1.png" alt=""></div>
        </section>
    </main>
    <?php
 get_footer(); ?>