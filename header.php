<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php global $page, $paged; wp_title( '|', true, 'right' );
	// Add the blog name.
	bloginfo( 'name' );
	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );	
	if ( $site_description && ( is_home() || is_front_page() ) )
        echo " | $site_description";?>
     </title>
     <meta name="Keywords" content="river race,womens rowing,rowing,eights head,boats,sport,river racing">
	 <meta name="description" content="Welcome to the Women's Eights Head of the River Race website. Here you will find all you need to know about the race, draw and results">   
     <link href="<?php bloginfo( 'template_directory' ); ?>/nivo-slider.css" rel="stylesheet" media="all" type="text/css" /> 
     <link href="<?php bloginfo( 'template_directory' ); ?>/style.css" rel="stylesheet" media="all" type="text/css" />
     <link rel='stylesheet' type='text/css'  media='all' href='<?php bloginfo( 'template_directory' ); ?>/media.css'>
     <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
     <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
     <?php if ( get_theme_mod( 'favicon_logo' ) ) : ?>
     <link rel="shortcut icon" href="<?php echo esc_url( get_theme_mod( 'favicon_logo' ) ); ?>" />
     <?php endif; ?>
     <!--color controls-->
     <!--[if lt IE 9]>
	 <style type="text/css">.wrapper{width:100%;}.nivo-caption{width: 92%;top:10%;}.theme-default{width:100%;}.theme-default .nivo-directionNav a {top: 40%;}#nav ul{width:92%;}</style>
	 <![endif]-->
     <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="xv60AJpnAKWScOZaS28uY_hKrJpJNZB7DuXgDYXARkA" />
   </head>
   <body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-51815918-1', 'auto');
  ga('send', 'pageview');

</script>
  
<header>
        <nav>
           <div id="nav" class="mobile">
                 <a href="#" class="dropdown-toggle" title="Click to view navigation"><img src="<?php bloginfo( 'template_directory' ); ?>/images/mobile-nav-icon.png" alt="Navigation"></a>
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'dropdown'  ) ); ?>
           </div>
            
            <div id="nav" class="desktop">
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>  
        </nav>
       
</header>
       


        
