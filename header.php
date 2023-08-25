
<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zawyat al maarefah - Home</title>
    <link rel="icon" href=<img src="<?php echo get_template_directory_uri();?> /images/favicon.png" type="text/image">

    <!-- css files -->

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/tab.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="scss/theme-style.css">
    <link rel="stylesheet" href="style.css"> -->
    <?php wp_head(); ?>
</head>


<body>

    <div class="load-complete"><iframe src="<?php echo get_template_directory_uri();?>/images/loader.html"></iframe></div>
    <header>
        <div class="head-logo">
            <a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/head-logo.svg" alt="" class="traperent-logo"></a>
        </div>
        <div class="head-menu">
            <div class="top-outer">
                <div class="social-icons">
                    <ul>
    <li><a href="https://www.facebook.com/golden.palace.restaurant.and.cafe/" target="_blank"><img src="<?php echo get_template_directory_uri();?>images/facebook.png" alt=""></a></li>
                        <li><a href="https://www.instagram.com/goldenpalace_restaurantandcafe/" target="_blank"><img src="<?php echo get_template_directory_uri();?> /images/instagram.png" alt=""></a></li>
                        <li><a href="https://twitter.com/GoldenpalaceC" target="_blank"><img src="<?php echo get_template_directory_uri();?> /images/twitter.png" alt=""></a></li>
                        <li><a href="https://www.tiktok.com/@zam.coffeshop" target="_blank"><img src="<?php echo get_template_directory_uri();?> /images/tiktok.png" alt=""></a></li>
                    </ul>
                </div>
                
                <div class="lang">
                    <a class="active" href="index.html">English</a>
                    <span>|</span>
                    <a href="ar/index.html">عربي</a>
                </div>
            </div>
           
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="menu.html">Our Menu</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li class="hover"><a href="contact.html">Contact Us<div class="overlay"></div></a></li>
            </ul>
            <div class="burger"> <span></span> </div>
        </div>
    </header>