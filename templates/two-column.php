<?php
/*
Template Name: Two Column
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
            
                   <?php if (get_the_content()): ?>
            		<div class="main-content main-content-box-top">
            		<?php the_content(); ?>	
            		</div> 
            		<?php endif; ?>
                   
                   
                    <div class="main-left">
                        <?php the_field('left_column'); ?>
                    </div>
                    
                    <div class="main-right">
                        <?php the_field('right_column'); ?>
                    </div>
            
            
            		<?php if (get_field('content_bottom')): ?>
            		<div class="main-content main-content-box-bottom">
            		<?php the_field('content_bottom'); ?>
            		</div> 
            		<?php endif; ?>
        </main>
        
       
     	<?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
    </div>
    

   


<?php get_footer(); ?>