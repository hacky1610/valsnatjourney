<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HamzahShop
 */



 
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<link rel="profile" href="http://gmpg.org/xfn/11">-->
<link rel="icon" type="image/png" sizes="32x32" href="/wp-content/icons/favicon-32x32.png">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script
  src="https://code.jquery.com/ui/1.9.1/jquery-ui.js"
  integrity="sha256-tXuytmakTtXe6NCDgoePBXiKe1gB+VA3xRvyBs/sq94="
  crossorigin="anonymous"></script>
<script src="https://vals-natural-journey.de/wp-content/themes/hamzahshop/assets/js/bootstrap-notify.js"></script>
<script src="https://vals-natural-journey.de/wp-content/themes/hamzahshop/assets/js/vnj.js"></script>



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <header>
        <div class="header-top">
            <div class="container">
                <div class="header-container">
                   <?php get_template_part( 'template-parts/parts/top-bar'); ?>
                </div>    
            </div>
        </div>
      
                 
                
          <?php get_template_part( 'template-parts/parts/header'); ?>
          
        <?php get_template_part( 'template-parts/parts/nav'); ?>
    </header>
	<?php if ( is_front_page() ) : ?>          
        <?php dynamic_sidebar( 'slider' ); ?>
    <?php endif; 

	
	?>     
	<script>
var MemberSpace = window.MemberSpace || {subdomain: "bullfrogicosahedrone7e3squarespace"};
(function(d){
  var s = d.createElement("script");
  s.src = "https://cdn.memberspace.com/scripts/widgets.js";
  var e = d.getElementsByTagName("script")[0];
  e.parentNode.insertBefore(s,e);
}(document));
</script>