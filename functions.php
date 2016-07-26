<?php

// Register Navigation

function vitality_menu() {
	register_nav_menu( 'main-menu', __( 'Main Menu' ) );
}
add_action( 'init', 'vitality_menu' );

// Enqueue Header Scripts

function vitality_header_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );
	wp_enqueue_style( 'fontawesome-css', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css' );
	wp_enqueue_style( 'font-roboto', '//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' );
	wp_enqueue_style( 'font-raleway', '//fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900' );
	wp_enqueue_style( 'font-montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,700' );
	wp_enqueue_style( 'font-cardo', 'http://fonts.googleapis.com/css?family=Cardo:400,400italic,700' );
	wp_enqueue_style( 'font-sanchez', 'http://fonts.googleapis.com/css?family=Sanchez:400italic,400' );
	wp_enqueue_style( 'owl-carousel-css', get_template_directory_uri() . '/assets/css/plugins/owl-carousel/owl.carousel.css' );
	wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/assets/css/plugins/owl-carousel/owl.theme.css' );
	wp_enqueue_style( 'owl-carousel-transitions', get_template_directory_uri() . '/assets/css/plugins/owl-carousel/owl.transitions.css' );
	wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/plugins/magnific-popup.css' );
	wp_enqueue_style( 'backgroundcss', get_template_directory_uri() . '/assets/css/plugins/background.css' );
	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/assets/css/plugins/animate.css' );
	wp_enqueue_style( 'vitality-red', get_template_directory_uri() . '/assets/css/vitality-red.css' );
}
add_action( 'wp_enqueue_scripts', 'vitality_header_scripts' );

// Enqueue Footer Scripts

function vitality_footer_scripts() {
	wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js' );
	wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/assets/js/plugins/jquery.easing.min.js' );
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/assets/js/plugins/classie.js' );
	wp_enqueue_script( 'cbp-animated-header', get_template_directory_uri() . '/assets/js/plugins/cbpAnimatedHeader.js' );
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/plugins/owl-carousel/owl.carousel.js' );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/plugins/jquery.magnific-popup/jquery.magnific-popup.min.js' );
	wp_enqueue_script( 'corejs', get_template_directory_uri() . '/assets/js/plugins/background/core.js' );
	wp_enqueue_script( 'transitionjs', get_template_directory_uri() . '/assets/js/plugins/background/transition.js' );
	wp_enqueue_script( 'backgroundjs', get_template_directory_uri() . '/assets/js/plugins/background/background.js' );
	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/plugins/jquery.mixitup.js' );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/plugins/wow/wow.min.js' );
	wp_enqueue_script( 'contactjs', get_template_directory_uri() . '/assets/js/contact_me.js' );
	wp_enqueue_script( 'bootstrap-validation', get_template_directory_uri() . '/assets/js/plugins/jqBootstrapValidation.js' );
	wp_enqueue_script( 'vitalityjs', get_template_directory_uri() . '/assets/js/vitality.js' );
}
add_action( 'wp_footer', 'vitality_footer_scripts' );

?>