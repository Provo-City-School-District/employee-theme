<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-34304269-4"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-34304269-4');
	</script>

    <meta charset="utf-8" />
    <title><?php if (is_home() ) {?>News | <?php } ?><?php if (is_page() ) {the_title();?> | <?php } ?><?php if ( is_single() ) {the_title(); ?> | <?php } ?><?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//www.google.ca/jsapi" type="text/javascript"></script><!-- Google Custom Search API -->
   		<!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600" rel="stylesheet">
    	<!--end Fonts -->
	<link rel="stylesheet" type="text/css" href="https://globalassets.provo.edu/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="https://globalassets.provo.edu/slick/slick-theme.css"/>

	<meta name="theme-color" content="#ffffff ">
	<?php
	if (has_post_thumbnail()) {
	?>
	<meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
	<?php
	} else {
	?>
	<meta property="og:image" content="https://provo.edu/wp-content/uploads/2018/03/provo-school-district-logo.jpg" />
	<?php
	}
	?>
	<?php wp_head(); ?>
	<link href="https://customer.cludo.com/css/templates/v1.1/essentials/cludo-search.min.css" type="text/css" rel="stylesheet">
   </head>
  <body <?php body_class(); ?>>
	<header id="mainHeader">
		<p id="siteTitle"><?php bloginfo('name'); ?></p>
		<a href="<?php echo home_url(); ?>"><img src="https://globalassets.provo.edu/image/logos/pcsd-logo-website-header-x2.png" alt="Provo City School District Logo" class="districtLogo" /></a>

		<ul class="sociallinks">
			<li>
				<a href="https://www.instagram.com/provocityschooldistrict/">
					<img src="https://globalassets.provo.edu/image/icons/employee-instagram-social-network-logo-of-photo-camera.svg" alt="Link to Instagram" />
				</a>
			</li>
			<li>
				<a href="https://twitter.com/ProvoSchoolDist">
					<img src="https://globalassets.provo.edu/image/icons/employee-twitter-logo-on-black-background.svg" alt="Link to Twitter" />
				</a>
			</li>
			<li>
				<a href="https://www.facebook.com/provoschooldistrict/">
					<img src="https://globalassets.provo.edu/image/icons/employee-facebook-app-logo.svg" alt="Link to Facebook" />
				</a>
			</li>
		</ul>
		<form id="cludo-search-form" action="/" method="get" autocomplete="off"><!-- Search Form -->
			<label for="s" class="visuallyhidden" id="websitesearch">Website Search: </label>
			<input class="search-input" aria-labelledby="websitesearch" id="s" name="s" type="text" value="" placeholder="Search this website..." />
			<input class="search-submit search-icon" type="submit" value="Search" />
		</form> <!-- end Search Form -->

		<ul class="contactinfo" itemscope itemtype="https://schema.org/PostalAddress"><!-- Contact Information -->
			<li>Provo City School District</li>
			<li><span itemprop="streetAddress">280 West 940 North</span></li>
			<li><span itemprop="addressLocality">Provo</span>, <span itemprop="addressRegion">Utah</span> <span itemprop="postalCode">84604</span></li>
			<li><span itemprop="telephone">(801) 374-4800</span></li>
			<!-- <li><span itemprop="faxNumber">Fax: (801) 374-4808</span></li> -->
		</ul><!-- End Contact Information -->
	</header><!-- end mainHeader -->
