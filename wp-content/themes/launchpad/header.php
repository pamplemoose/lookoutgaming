<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>LookoutGaming</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/foundation.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/stylesheets/app.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile.css">
  <script src="<?php bloginfo('template_url'); ?>/javascripts/modernizr.foundation.js"></script>

  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<div id="navMenu" class="show-on-touch">

</div>

<div id="wrapper">

	<div id="pageHeader">

		<div class="row">

			<div class="twelve columns">
			
				<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/lookoutgaming_logo.png" alt="LookoutGaming Logo" class="logo"></a>
				
				<div id="homeStrapline" class="hide-for-small">We're a stealth-mode startup making gaming <em>meaningful.</em></div>
						            		            
		        </div>
		  
			</div>
		
		</div>	
		
	</div>
