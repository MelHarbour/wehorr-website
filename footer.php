</div><!--end of main div-->
</div><!--end wrapper-->
</div><!--end wrapper-container-->

<footer>
    <div id="footer" class="clearfix">
    	
          <div class="wrapper">
          <div class="fatfooter" role="complementary">
               
               <div class="main-left">
                <?php dynamic_sidebar('Footer Sidebar 1'); ?>
                <?php dynamic_sidebar('Footer Sidebar 2'); ?>
               </div> 
               <div class="main-right">
                <?php dynamic_sidebar('Footer Sidebar 3'); ?>
               </div>
                
                
                <div class="social-footer">
                <?php dynamic_sidebar('Header Sidebar'); ?>
                </div>
   
          </div><!-- #fatfooter -->     
          </div><!--end wrapper-->
         
          
         
    </div><!--end footer div-->
</footer> 

<?php wp_footer(); ?> 
 <script type='text/javascript'>
    $('.dropdown-toggle').click(function(){
  $(this).next('.dropdown').toggle();
});
</script>  
</body>
</html>