<?php
/*
Template Name: Main content with Table and Sidebar
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
                
            <?php if(get_field('main_content_column')): ?>
            <div class="main-content-column">
			<?php the_field('main_content_column'); ?>
            
             <?php if(get_field('5_column_table')): ?>
             <div class="table-container-wrapper clearfix">
 				<?php while(has_sub_field('5_column_table')): ?>
                <div class="table-container">
                    <div class="table-container-col">
						<?php the_sub_field('5_col_table_col1'); ?>
                    </div>
                    <div class="table-container-col">
						<?php the_sub_field('5_col_table_col2'); ?>
                    </div>
                    <div class="table-container-col">
						<?php the_sub_field('5_col_table_col3'); ?>
                    </div>
                    <div class="table-container-col">
						<?php the_sub_field('5_col_table_col4'); ?>
                    </div>
                    <div class="table-container-col table-container-col-last">
						<?php the_sub_field('5_col_table_col5'); ?>
                    </div>
               	</div>
           		<?php endwhile; ?>
                </div>
             <?php endif; ?>
             
			 <?php the_field('main_content_column_2'); ?>
            </div>
            <?php endif; ?>
                
            <aside> 
            <div class="sidebar">
                <?php the_field('additional_content'); ?>
            </div><!--end sidebar-->
        	</aside>    
                
				
        </main>       

				
        

   <?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
 </div><!--container-->


<?php get_footer(); ?>