<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ThemeHunk
 * @subpackage Portfoliolite
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html<?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    <link rel="pingback" href="<?php echo esc_url(bloginfo( 'pingback_url' )); ?>" />
<?php endif; ?>
<?php wp_head();?>  
</head>
<body style="overflow-x: hidden;" <?php body_class(); ?> >
<?php portfoliolite_body_open();?> 
<div id="loader-wrapper">
<div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<?php if (get_theme_mod('portfoliolite_header_fxd','on')=='on') { ?> 
<?php if (get_theme_mod('portfoliolite_header_hide')==''){?>
<div id="header" class="header sticky" >
<?php } else { ?>
<div id="header" class="header sticky hide" >
<?php } ?>
<?php } else { ?>
<?php if (get_theme_mod('portfoliolite_header_hide')==''){?>
<div class="header static" id="header">
<?php } else { ?>
<div class="header static hide" id="header">
<?php } ?>
<?php } ?>
<div class="container">
<header>
<a class="skip-link screen-reader-text" href="#page"><?php _e( 'Skip to content', 'portfoliolite' ); ?></a>
<?php if (get_theme_mod('portfoliolite_menu_style','on')=='on') { ?>  


<div style="display: flex; flex-direction: row; align-items: center">
<div class="logo" style="flex: 2; line-height: 18px">
<?php } elseif (get_theme_mod('portfoliolite_menu_style','split')=='split'){?>
<?php } else { ?>
<?php } ?>  
      <?php
      if(get_theme_mod('title_disable','enable')){
      if ( is_front_page() && is_home() ) : ?>
      <span class='site-ttile' style="text-shadow: 0 0 8px #90EEAF;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
      <?php else : ?>
      <span class='site-ttile' style="text-shadow: 0 0 8px #90EEAF;"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></span>
      <?php endif;
      // get the website tagline from WP admin -> Settings -> General and store it in a vraible 'description'
      
      $description = get_bloginfo( 'description', 'display' );
      if ( $description || is_customize_preview() ) : ?>
      <p style="text-align: center"><?php echo $description; ?></p>
      <?php endif;  } ?>
</div>
<div style="flex: 1; margin-left: 18px "><?php echo get_custom_logo();?></div>
</div>




<?php if (get_theme_mod('portfoliolite_menu_style','on')=='on') { ?>  
<div id="main-menu-wrapper">
<nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main portfolio-menu-hide left">
        <div class="sider-inner">
          <?php if ( is_front_page() || is_home() ) : 

                    
                    portfoliolite_nav_menu();
                   
                else: 
                
                     portfoliolite_front_nav_menu(); 
                    
                   
                endif;    
          ?>
          
        </div>
        </div>
</nav>
</div>
<?php } elseif (get_theme_mod('portfoliolite_menu_style','split')=='split'){ ?> 
 <div id="main-menu-wrapper" class="col-center split">
       <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main portfolio-menu-hide left">
        <div class="sider-inner">
          <?php if ( is_front_page() || is_home() ) : 
                    
                    portfoliolite_nav_menu();
                   
                else: 
                
                     portfoliolite_front_nav_menu(); 
                    
                   
                endif;    
          ?>
          
        </div>
        </div>
</nav>
<div class="clearfix"></div>
</div> 
<?php } else { ?> 
<div id="main-menu-wrapper" class="col-center">
                     <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main portfolio-menu-hide left">
        <div class="sider-inner">
          <?php if ( is_front_page() || is_home() ) : 
                    
                    portfoliolite_nav_menu();
                   
                else: 
                
                     portfoliolite_front_nav_menu(); 
                    
                   
                endif;    
          ?>
          
        </div>
        </div>
</nav>
<div class="clearfix"></div>
</div>
<?php } ?> 
</header>
</div>
</div>
<div class="clearfix"></div>