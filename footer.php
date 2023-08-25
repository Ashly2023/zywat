<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
	

<footer>
        <div class="foot-top">
            <div class="foot-left" data-aos="fade-up" data-aos-duration="2000">
                <figure><img src="<?php echo get_template_directory_uri();?>/images/footer-logo.svg" alt=""></figure>
                <p>The first of its kind in the UAE,Somewhere you can go on an adventure among thousands of pages of
                    different books while having sips of your favorite drinks. Finest quality for the lowest cost ever.
                </p>
            </div>
            <div class="foot-right" data-aos="fade-up" data-aos-duration="3000">
                <div class="footer-nav">
                    <div class="box">
                        <h4>Navigation</h4>
                        <ul>

                            <li><a href="menu.html">Menu</a></li>
                            <li><a href="about.html">About us</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h4>Our Menu</h4>
                        <ul>
                            <li><a href="menu.html#cakes">Cakes</a></li>
                            <li><a href="menu.html#breakfast">Breakfast</a></li>
                            <li><a href="menu.html#sandwiches">Sandwiches</a></li>
                            <li><a href="menu.html#hot-drinks">Hot Drinks</a></li>
                        </ul>
                    </div>
                    <div class="box">
                        <h4>Contact Us</h4>
                        <ul>
                            <li>Ahl Al - Azem St, Al Maamoura, <span>Abu Dhabi, Building number 11.</span></li>
                            <li>Phone :<a href="tel:+97122461311">+971 22461311</a></li>
                        </ul>
                    </div>



                </div>
                <div class="opening-time">
                    <h4>OPENING HOURS</h4>
                    <ul>
                        <li>Monday - Friday <br> 8 am to 12 am</li>
                        <li>Saturday <br> 8 am to 12 am</li>
                        <li>Sunday <br> 8 am to 12 am</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="left">
                <p><img src="<?php echo get_template_directory_uri();?>/images/copyright.png" alt="">2023 Zawyat Almaa’refah. All Right Reserved. Designed by <a
                        href="https://www.pentame.com/" target="_blank" rel="nofollow"
                        title="Pentagon Information Technology">Pentagon Information Technology</a></p>
            </div>
            <div class="right">
                <ul>
                    <li><a href="#">Terms of Service</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
        </div>

    </footer>

    
    <!-- <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src='js/owl.carousel.js'></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main-slider.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/theme-script.js"></script> -->
    <?php wp_footer(); ?>
</body>

</html>