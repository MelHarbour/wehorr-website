<?php
/*
Template Name: Main and Additional Content Sidebar
*/

?>

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
 
		
        
<div id="main-wrapper">

<div class="wrapper">
     
   
    
<div id="container">
        
        
	<div class="main clearfix">	

    
   <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   	 <main>
            <div class="main-content-column">
            <?php the_content(); ?>	
            </div> 
                
            <aside>
            <?php if(get_field('additional_content')): ?> 
            <div class="sidebar">
                <?php the_field('additional_content'); ?>
            </div><!--end sidebar-->
            <?php endif; ?>
        	</aside>    
                
				
        </main>

   <?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
 </div><!--container-->
 
 


<?php get_footer(); ?>