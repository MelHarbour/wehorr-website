<?php
/*
Template Name: Pennants and Trophies
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
            <div class="main-content">
            <?php the_content(); ?>	
            </div> 
            <?php endif; ?>
      </main>         

    <?php if(get_field('pennants_and_trophies')): ?>
 		
             
                <?php while(has_sub_field('pennants_and_trophies')): ?>
                <div class="pennant-container">
                    <div class="pennant-name">
						<?php the_sub_field('pennant_name'); ?>
                    </div>
                    <div class="pennant-description">
						<?php the_sub_field('pennant_description'); ?>
                    </div>
                    <div class="trophy">
                    <?php if (get_sub_field('trophy')): ?>
						<?php $image = get_sub_field('trophy'); ?>
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">
                    <?php endif; ?>
                    </div>
               </div>
           		<?php endwhile; ?>
               
          
      
    <?php endif; ?>
				
        

   <?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
 </div><!--container-->


<?php get_footer(); ?>