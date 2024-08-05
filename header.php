<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
    <nav class="navbar navbar-custom navbar-expand-lg">
    <div class="container">
        <!-- Left-aligned links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo esc_url(home_url('/supports')); ?>">Supports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">USD</a>
            </li>
        </ul>

        <!-- Center-aligned links -->
        <ul class="navbar-nav navbar-center">
            <li class="nav-item">
                <a class="nav-link" href="#">Save up to 50% on your first order during special Summer Sales!</a>
            </li>
        </ul>

        <!-- Right-aligned links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-youtube"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa-brands fa-square-x-twitter"></i></a>
            </li>
        </ul>
    </div>
</nav>






<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Offcanvas for mobile view -->
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>

        <!-- Left-aligned links -->
        <div class="d-none d-lg-flex flex-grow-1 justify-content-start">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url(home_url('/shop')); ?>">Shop <i class="fa-solid fa-cart-shopping"></i></a>
                </li>
            </ul>
        </div>

        <!-- Center logo -->
       <a href="<?php echo esc_url(home_url('/')); ?>">
       <?php if (has_custom_logo()) : ?>
                <?php 
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                    $logo_width = get_theme_mod('logo_width', 100); // Default width is 100px
                ?>
                <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php bloginfo('name'); ?>" style="width: <?php echo esc_attr($logo_width); ?>px;">
            <?php else : ?>
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/Bally_logo_PNG2.png'); ?>" alt="Logo" style="width: 100px">
            <?php endif; ?>
       </a>
        

        <!-- Right-aligned links -->
        <div class="d-none d-lg-flex flex-grow-1 justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shop</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="#">Register / Login</a>
                </li>
            </ul>
        </div>

        <!-- Offcanvas for mobile view -->
        <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex mt-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </div>
</nav>