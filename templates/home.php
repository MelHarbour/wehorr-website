<?php
/*
Template Name: Homepage
*/

?>

<?php get_header(); ?>

	<figure>
    <?php if(get_field('slider')): ?>
 		<div class="theme-default">
      
             <div id="slider" class="nivoSlider">
             
                <?php while(has_sub_field('slider')): ?>
           		<?php $image = get_sub_field('slider_image'); ?>
                <img src="<?php echo $image['url']; ?>" title="#caption<?php echo $image['id']; ?>"  >
           		<?php endwhile; ?>
               
            </div><!--end slider-->
            
        </div><!--end theme default--> 
     
                <?php while(has_sub_field('slider')): ?>
                <?php $image = get_sub_field('slider_image'); ?>
                <div id="caption<?php echo $image['id']; ?>" class="nivo-html-caption">
                <div class="captioncontent-container heading-<?php the_sub_field('caption_underline_colour'); ?>"><?php the_sub_field('slider_content'); ?></div>
                </div>
                <?php endwhile; ?>
               
    <?php endif; ?>
    </figure> 

    
   


		
        
<div id="main-wrapper">

<div class="wrapper">
     
   
    
<div id="container">
        
        
	<div class="main clearfix">	
    
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<main>
            <div class="clearfix">
                   
                   <div class="main-left">
                    <?php if(get_field('box_1_title')): ?>
                        <div class="homepage-box homepage-box1">
                           <h2><a href="<?php the_field('box_1_link'); ?>" title="<?php the_field('box_1_title'); ?>"><?php the_field('box_1_title'); ?><span>click here for more &raquo;</span></a></h2>
                           <?php $image = get_field('box_1_image'); ?>
    		 				<a class="overlay" href="<?php the_field('box_1_link'); ?>"  title="<?php the_field('box_1_title'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                      
                        </div> 
        			<?php endif; ?>   
                 	
                    
                   <?php if(get_field('box_3_title')): ?>
                        <div class="homepage-box homepage-box-last homepage-box3">
                           <h2><a href="<?php the_field('box_3_link'); ?>" title="<?php the_field('box_3_title'); ?>"><?php the_field('box_3_title'); ?><span>click here for more &raquo;</span></a></h2>
                           <?php $image = get_field('box_3_image'); ?>
    		 				<a class="overlay" href="<?php the_field('box_3_link_video'); ?>" title="<?php the_field('box_3_title'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                        </div> 
        			<?php endif; ?>
                    </div>
                    
                    
                   <div class="main-right">
                   <?php if(get_field('box_2_title')): ?>
                        <div class="homepage-box homepage-box2">
                           <h2><a href="<?php the_field('box_2_link'); ?>" title="<?php the_field('box_2_title'); ?>"><?php the_field('box_2_title'); ?><span>click here for more &raquo;</span></a></h2>
                           <?php $image = get_field('box_2_image'); ?>
    		 				<a class="overlay" href="<?php the_field('box_2_link'); ?>" title="<?php the_field('box_2_title'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                        </div> 
        			<?php endif; ?>
                   
                    
                    <?php if(get_field('box_4_title')): ?>
                        <div class="homepage-box homepage-box-last homepage-box4">
                           <h2><a href="<?php the_field('box_4_link'); ?>" title="<?php the_field('box_4_title'); ?>"><?php the_field('box_4_title'); ?><span>click here for more &raquo;</span></a></h2>
                           <?php $image = get_field('box_4_image'); ?>
    		 				<a class="overlay" href="<?php the_field('box_4_link'); ?>" title="<?php the_field('box_4_title'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></a>
                        </div> 
        			<?php endif; ?>
                    </div>
            </div><!--end main content-->
            
            <div class="main-content clearfix hairline-topbottom">
                    <?php the_content(); ?>
            </div><!--end main content-->
            
            <div class="main-content clearfix no-padding-bottom">
                    <div class="main-left">
                    <?php if(get_field('homepage_sponsors')): ?>
                        <div class="homepage-sponsors">
                        <h2><a href="<?php the_field('homepage_sponsor_title_link'); ?>" title="<?php the_field('homepage_sponsor_title'); ?>"><?php the_field('homepage_sponsor_title'); ?><span>click here for more &raquo;</span></a></h2>
                            <?php while(has_sub_field('homepage_sponsors')): ?>
                            <!--<div class="clearfix">  --> 
                                <div class="homepage-sponsor-image">
                                    <?php $image = get_sub_field('homepage_sponsor_image'); ?>
                                    <a href="<?php the_sub_field('homepage_sponsor_link'); ?>" target="blank" title="Visit <?php the_sub_field('homepage_sponsor_link'); ?>"><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" ></a>
                                </div>
                                <!--<div class="homepage-sponsor-text">
                                    <?//php the_sub_field('homepage_sponsor_text'); ?>
                                </div>-->
                             <!--</div>-->
                             <?php endwhile; ?>
                        </div>     
                    <?php endif; ?>
                    </div>
                    
                    <div class="main-right">
                    <?php if(get_field('ebb_tide_flag_warning')): ?>
                    <div class="no-para">
                        <?php the_field('ebb_tide_flag_warning'); ?>
                    </div>
                    <?php endif; ?>
                    </div>
            </div><!--end main content-->
        </main>
        
        
          
     	<?php endwhile; else: ?><p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?> 
       
</div><!-- end container div-->
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/scripts/jquery.nivo.slider.pack.js"></script>
    <script type="text/javascript">

     jQuery(document).ready(function($) {

          $('#slider').nivoSlider({
           effect: 'fade', // slider effects 'fold, fade, sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft, slideInRight, slideInLeft'
        animSpeed: 500,                 // transition speed
        pauseTime: 3000,                // how long each slide will show
        directionNav: true,             // Next & Prev navigation
        controlNav: false,               // 1,2,3... navigation
        pauseOnHover: true,             // stop animation while hovering
        manualAdvance: false,           // force manual transitions
         prevText: 'Prev',               // Prev directionNav text
        nextText: 'Next',               // Next directionNav text
        randomStart: false,             // start on a random slide   
           
beforeChange: function(){$('#slider .nivo-caption').css("opacity","0")},
afterChange: function(){$('#slider .nivo-caption').css("opacity","1")}
       });

});
</script>
<?php get_footer(); ?>