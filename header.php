<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the site content.
 *
 * @package WordPress
 * @subpackage Vitality
 * @since Vitality 1.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="page-top" <?php body_class(); ?>>
    <!-- Navigation -->
    <!-- Note: navbar-default and navbar-inverse are both supported with this theme. -->

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-expanded">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <img src="<?php echo( get_template_directory_uri() . '/assets/img/creative/logo.png' ); ?>" class="img-responsive" alt="">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php
    			wp_nav_menu(
    				array(
    					'container'		 	=> 'div',
    					'container_class'	=> 'collapse navbar-collapse',
    					'menu_class' 		=> 'nav navbar-nav navbar-right'
    				)
    			);
    		?>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <header style="background-image: url('<?php echo(get_template_directory_uri() . '/assets/img/creative/bg-header.jpg') ?>');">
        <div class="intro-content">
            <img src="<?php echo(get_template_directory_uri() . '/assets/img/creative/profile.png') ?>" class="img-responsive img-centered" alt="">
            <div class="brand-name">John Smith</div>
            <hr class="colored">
            <div class="brand-name-subtext">An Online Portfolio For Creatives</div>
        </div>
        <div class="scroll-down">
            <a class="btn page-scroll" href="#about"><i class="fa fa-angle-down fa-fw"></i></a>
        </div>
    </header>
    <div id="content" class="site-content">