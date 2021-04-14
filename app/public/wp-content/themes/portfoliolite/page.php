<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ThemeHunk
 * @subpackage Portfoliolite
 * @since 1.0.0
 */
get_header();
$value = get_post_meta( $post->ID, 'th_sidebar_dyn', true );
?>
<div class="page-wrapper">
<div class="blog-top">
<?php  
$thumbnail_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'size' );
 ?>
 <?php if($thumbnail_src==''){?>
 <div class="blog-image" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;">	
 <?php } else{?>	
<div class="blog-image" data-center="background-position: 50% 0px;" data-top-bottom="background-position: 50% -100px;" style="background-image: url(<?php echo esc_url($thumbnail_src[0]); ?>);">
<?php } ?>
<div class="full-fs-caption">
     <div class="caption-container" style="margin: auto;">
      <h1 class="title overtext">
      <a href="#"><?php wp_title(''); ?></a></h1>
      <?php portfoliolite_breadcrumb_trail(); ?>
     </div>
</div>

</div>
</div>
<div class="clearfix"></div></br></br>
<div id="page" class="clearfix <?php echo esc_attr($value); ?>">
<div style="margin: auto; width: 70%;">
<div class="content" style="">
<div class="page-content">
<!-- if the page that we are on is the 'ID' page: -->
<!-- ID:   Page:
     10    About Us
     12    Music Library
     14    New Releases
     16    Up-Comming Events
-->



<!-- ABOUT US PAGE -->
<div style="">
<?php if(get_the_ID() == 10){
?>
<ul class="load_post standard-layout">
<?php 
get_template_part( 'template-parts/content-single');
?>

<?php } ?>



<!-- MUSIC LIBRARY PAGE -->
<?php if(get_the_ID() == 12){
?>
<ul class="load_post standard-layout">
<?php 
$MusicLibraryPosts = new WP_Query(array(
 'posts_per_page' => -1,
 'post_type' => 'artiste'
 ));

 while( $MusicLibraryPosts->have_posts() ) : $MusicLibraryPosts->the_post();
                               get_template_part( 'template-parts/content', get_post_format());
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) :
                                comments_template();
                               endif;
                               endwhile; // End of the loop.
                               wp_reset_postdata();
                            ?>

<?php }  ?>
</ul>



<!-- NEW RELEASES PAGE -->
<?php if(get_the_ID() == 14){
?>
<ul class="load_post standard-layout">
<?php 
$NewReleasesPosts = new WP_Query(array(
 'posts_per_page' => 3,
 'post_type' => 'album'
 ));

 while( $NewReleasesPosts->have_posts() ) : $NewReleasesPosts->the_post();
                               get_template_part( 'template-parts/content');
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) :
                                comments_template();
                               endif;
                               endwhile; // End of the loop.
                               wp_reset_postdata();
                            ?>

<?php }  ?>
</ul>




<!-- UP COMING EVENTS PAGE -->
<ul class="load_post standard-layout">
<?php if(get_the_ID() == 16){
?>
<?php 
$UpcommingEvents = new WP_Query(array(
 'posts_per_page' => 3,
 'post_type' => 'event'
 ));

 while( $UpcommingEvents->have_posts() ) : $UpcommingEvents->the_post();
                               get_template_part( 'template-parts/content');
                              // If comments are open or we have at least one comment, load up the comment template.
                              if ( comments_open() || get_comments_number() ) :
                                comments_template();
                               endif;
                               endwhile; // End of the loop.
                               wp_reset_postdata();
                            ?>

<?php }  ?>
</ul>
</div>




</div>
</div>   
</div> 

<?php $value = 'no-sidebar'; ?>

<?php if($value!='no-sidebar'): ?>
<div class="sidebar-wrapper">
<?php get_sidebar(); ?>
</div>
<?php endif; ?>
</div>
</div>
<div id="search-2" class="widget widget_search"><div class="portfolio-widget-content"><form role="search" method="get" id="searchform" action="http://noted.local/" style="width: 400px; margin: auto">
	<div class="form-content">
		<input type="text" placeholder="search.." name="s" id="s" value="">
		<input type="submit" value="Search">
	</div>
</form></div></div>
<?php get_footer(); 