<!doctype html>  
<!--[if IEMobile 7 ]> <html <?php language_attributes(); ?> class="no-js iem7"> <![endif]-->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 8)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
      <title><?php if (is_home () ) 
{ 
bloginfo('name'); 
} 

elseif ( is_category() )
{ 
single_cat_title(); echo ' | ' ; 
bloginfo('name'); 
}

elseif (is_single() ) 
{ 
single_post_title(); 
}

elseif (is_page() ) 
{ 
bloginfo('name'); 
echo ' | '; 
single_post_title(); 
}

else 
{ 
wp_title('',true); 
} ?></title>  
        <script type="text/javascript" src="http://use.typekit.com/wye5tiw.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		
		<!-- meta tags should be handled by SEO plugin. I recommend (http://yoast.com/wordpress/seo/) -->
		
		<!-- mobile optimized -->
		<meta name="viewport" content="width=device-width">
		
		<!-- allow pinned sites -->
		<meta name="application-name" content="<?php bloginfo('name'); ?>" />
		
		<!-- icons & favicons (for more: http://themble.com/support/adding-icons-favicons/) -->
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
		
		<!-- load all styles for IE -->
		<!--[if (lt IE 9) & (!IEMobile)]>
    		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/css/ie.css">	
		<![endif]-->
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="container">
			
			<header role="banner" class="header">
			
				<div id="inner-header" class="wrap clearfix">
				    
                    <div class="header-wrap">
                
    					<!-- to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> -->
    					<p id="logo" class="h1"><a href="<?php echo home_url(); ?>" rel="nofollow"><?php bloginfo('name'); ?></a></p>
					
    					<!-- if you'd like to use the site description you can un-comment it below -->
    					<p id="description"><?php bloginfo('description'); ?></p>
					
    					<nav role="navigation" class="nav">
    						<?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
    					</nav>
				    
                    </div>
                
				</div> <!-- end #inner-header -->
			
			</header> <!-- end header -->
