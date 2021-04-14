<?php
/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package ThemeHunk
 * @subpackage Portfoliolite
 * @since 1.0.0
 */
get_header();?>
<?php if (is_single()) : 
$value = get_post_meta( $post->ID, 'th_sidebar_dyn', true );?>
<div class="clearfix"></div>
<div class="page-wrapper">
<div class="blog-top">
<div class="blog-image" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background-image: url(<?php echo esc_url(portfoliolite_page_thumb()); ?>);">
<div class="full-fs-caption">
     <div class="caption-container">
      <h1 class="title overtext">
      <a href="#"><?php the_title(); ?></a></h1>
      <?php portfoliolite_breadcrumb_trail(); ?>
     </div>
</div>
</div>
</div>
<div class="clearfix"></div>
<div id="page" class="clearfix  <?php echo esc_attr($value); ?>">
<div class="content-wrapper">
<div class="content">
<div class="blog-content">
  <?php get_template_part( 'template-parts/content', 'single-album');?>
</div>
</div>   
</div>    

<?php endif;?>  
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div> 
</div>
</div>
<?php get_footer(); 