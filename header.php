<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
		<script>
		  WebFont.load({
		    google: {
		      families: ['Alegreya Sans', 'Alegreya']
		    }
		  });
		</script>
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,400i,500,700|Alegreya:200,200i,400,400i,700,700i" rel="stylesheet"  type="text/css">
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTSb8UQQlJFsIqMViALyJC-30pBvVl-fA" type="text/javascript"></script> 
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114982698-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-114982698-1');
		</script>
		
		<meta charset="<?php bloginfo('charset'); ?>">
		<title>
		<?php if (is_home () ) { bloginfo('name'); }
		elseif ( is_category() ) { single_cat_title(); echo ' - ' ; bloginfo('name'); }
		elseif (is_single() ) { single_post_title();}
		elseif (is_page() ) { single_post_title();}
		else { wp_title('',true); } ?>
		</title>
 
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="stick">
			<?php get_template_part('navigation'); ?>
		</header>