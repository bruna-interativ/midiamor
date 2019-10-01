<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package midiamor
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title>Business - HTML website template</title>
    <meta content="Business - HTML website template" property="og:title">
    <meta content="https://uploads-ssl.webflow.com/5c6eb5400253230156de2bd6/5cdc268dd7274d5c05c6009a_Business%20SEO.jpg" property="og:image">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="<?php bloginfo ( 'template_url' );?>/css/normalize.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo ( 'template_url' );?>/css/midiamor-style.css" rel="stylesheet" type="text/css">
    <link href="<?php bloginfo ( 'template_url' );?>/css/midiamor.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">WebFont.load({  google: {    families: ["Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
    <link href="<?php bloginfo ( 'template_url' );?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="<?php bloginfo ( 'template_url' );?>/images/webclip.png" rel="apple-touch-icon">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

<!-- <header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$midiamor_description = get_bloginfo( 'description', 'display' );
			if ( $midiamor_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $midiamor_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div>

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'midiamor' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
	</header> -->
	<div id="content" class="site-content">
