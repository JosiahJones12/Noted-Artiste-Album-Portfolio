<?php
/**
 * Template part for displaying single post
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Portfoliolite
 * @since 1.0.0
 */
?>


<div class="post" id="post-<?php the_ID(); ?>"<?php post_class('post'); ?>>
<div class="post-img-wrapper">  
</div>
<div class="blog-info-header">
<div class="blog-info-meta">



	
	<ul class="post_meta">   
		<p class="posted_on"><i class="fa fa-music"></i><span></span><?php echo " Bio"?></p>
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"></a></h2></br>
		<p> <?php the_content(); ?> </p>    
	</ul>
	


	<ul class="post_meta">
		<p class="posted_on"><i class="fa fa-music"></i><span></span><?php echo " Albums"?></p>	
	</ul>




</div>
<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"></a></h2>
</div> 
<div class="clearfix"></div>
<div class="blog-info-content"><p>




<!-- Content of the Single Artiste (their albums) go here -->	
<?php
 $ArtisteAlbums = get_field('artiste_albums');

 foreach($ArtisteAlbums as $album){ 
	echo '<hr class="section-break" style="box-shadow: 0 0 8px #90EEAF;">';
 	echo '<div class="container">';
 	echo '<div class="thunk-service-wrapper thunk-wrapper" style="margin-left: 26px; background-color: #90EEAF; text-align: center; box-shadow: 0 0 8px #90EEAF;">';
 ?>
	<div class="thunk-service-post"style="box-shadow: 0 0 8px white;"><a href="<?php echo get_the_permalink($album);?>">
 <?php echo get_the_title($album);?></br>
 <?php echo get_the_post_thumbnail($album)?>
 </a>
 </div>
 <?php
 echo '</div>';
 echo '</div>';
 echo '</br></br>';
 }
 ?>




</p>
<div class="tagcloud"><?php echo get_the_tag_list( '', __( ' ', 'portfoliolite' ) ); ?></div>
</div> 
<div class="paginate">
  <span class="post-previous"><?php previous_post_link('%link'); ?></span>
  <span class="post-next"><?php next_post_link('%link'); ?></span>
</div>
</div>