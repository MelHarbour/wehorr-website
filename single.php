<?php get_header(); ?>

 
 
  
<figure>
 		<div class="header-banner">
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/page-banner-reducedheight-pattern.jpg" />
			
            	<div class="header-banner-content">
                	<div class="header-banner-content-container">
					<a title="Home" href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/images/womens-eight-logoblock-banner.png" alt="Women's Eight Head of the River Race"></a>
                	</div>
                </div>
      	</div>
</figure>
 
		<nav>
           <div id="nav" class="mobile">
                 <a href="#" class="dropdown-toggle" title="Click to view navigation"><img src="<?php bloginfo( 'template_directory' ); ?>/images/mobile-nav-icon.png" alt="Navigation"></a>
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'dropdown'  ) ); ?>
           </div>
            
            <div id="nav" class="desktop">
                 <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>  
        </nav>
        
<div id="main-wrapper">

<div class="wrapper">
     
   
    
<div id="container">
        
        
	<div class="main clearfix">	

    
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   <h1><?php the_title(); ?></h1>
   	 	<main>
            <?php if (get_the_content()): ?>
            <div class="main-content">
            <?php the_content(); ?>	
            </div> 
            <?php endif; ?>
	
        </main>

   <?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
 </div><!--container-->
 
 


<?php get_footer(); ?>