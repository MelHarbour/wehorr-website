<?php
	$content_text_color = get_option('content_text_color');
	$content_link_color = get_option('content_link_color');
	$content_bg_color = get_option('content_bg_color');
	$nav_bg_color1 = get_option('nav_bg_color1');
	$nav_bg_color2 = get_option('nav_bg_color2');
?>

<style type="text/css">


/* Main color */
	body { color:  <?php echo $content_text_color; ?>; background-color: <?php echo $content_bg_color; ?>; }
	
	a { color:  <?php echo $content_link_color; ?>; }
	
	#nav.desktop, #nav.desktop ul li { background-color:  <?php echo $nav_bg_color1; ?>; }
	
	#nav.desktop ul li ul{background-color: <?php echo $nav_bg_color2; ?>;}
	#nav ul li:hover{background-color:<?php echo $nav_bg_color2; ?>;}
	
	#nav li.current-menu-item { background-color: <?php echo $nav_bg_color2; ?>; }
	#nav li.current_page_item  { background-color: <?php echo $nav_bg_color2; ?>; }

	#footer{
	border-top: 1px solid <?php echo $nav_bg_color2; ?>;
	border-bottom: 1px solid <?php echo $nav_bg_color2; ?>;}
	
	.footwidgets h2{color:<?php echo $nav_bg_color1; ?>; }
	
	h1, h2, h3, h4, h5, h6 {color:<?php echo $nav_bg_color2; ?>; }

.hairline-topbottom{
	border-bottom:1px solid <?php echo $nav_bg_color2; ?>;
	border-top:1px solid <?php echo $nav_bg_color2; ?>;
}

.wpcf7-form input[type="submit"]{background-color:<?php echo $content_link_color; ?>;}







</style>