<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

<?php if(is_front_page()){?>
	
<audio autoplay loop>
<source src="http://localhost/partist/wp-content/uploads/2015/10/Brian-King-Joseph-Sexy-Love-Ne-Yo-VIOLIN-REMIX.mp3">
</audio>

<?php }?>


	<header id="masthead" class="site-header" role="banner">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="site-navigation-inner col-sm-12">
						<div class="navbar-header">
							<button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<head>
    <script type="text/javascript">
      function changeImg(){
        document.getElementById("imgId").src = (document.getElementById("imgId").src.indexOf("http://localhost/partist/wp-content/uploads/2015/10/cropped-cropped-paintlogo11.png") == -1)?"http://localhost/partist/wp-content/uploads/2015/10/cropped-cropped-paintlogo11.png":"http://localhost/partist/wp-content/uploads/2015/10/cropped-paintlogo21.png"; 
      }
      window.onload = function(){
        var xTimer = window.setInterval("changeImg()",1700);
      }
    </script>
  </head>
  <body>
    <img id="imgId" src="http://localhost/partist/wp-content/uploads/2015/10/cropped-cropped-paintlogo11.png" />
  </body>

						</div>
						<?php sparkling_header_menu(); // main navigation ?>
					</div>
				</div>
			</div>
		</nav><!-- .site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

		<div class="top-section">
			<?php sparkling_featured_slider(); ?>
			<?php sparkling_call_for_action(); ?>
		</div>

		<div class="container main-content-area">
			<div class="row">
				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
				
				
