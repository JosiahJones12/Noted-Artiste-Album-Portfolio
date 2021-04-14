<?php
/**
 * Template part for displaying posts
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package  Portfoliolite
 * @since 1.0.0
 */
?>
<!-- Start the Loop. -->
<li class="post"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-img-wrapper">
<div style="">
<?php if ((function_exists('has_post_thumbnail')) && (has_post_thumbnail())) { ?>
<a  href="<?php echo esc_url(get_permalink()); ?>">
     <div style="margin: auto; display: inline-block;">
          <?php the_post_thumbnail('post_thumbnail_loop'); ?>
     </div>
</a>
<?php } ?>
</div>  
</div>
<div class="blog-info-header" style="box-shadow: 0 0 8px #90EEAF;">
<div class="blog-info-meta ">
            <ul class="post_meta" style="margin: auto">

            <?php global $wp;
            if(home_url($wp->request) == 'http://noted.local/new-releases'){ 
            ?>
                 <li class="posted_on"><i class="fa fa-calendar-o"></i><span></span><?php echo "Released: ". get_field('release_date'); ?></li>
            <?php }?> 


 


            <?php global $wp;
            if(home_url($wp->request) == 'http://noted.local/music-library'){ 
            ?>
                 <li class="posted_on"><i class="fa fa-music"></i><?php $key_name = get_post_custom_values($key = 'genre'); echo "Genre: ". $key_name[0]; ?></li> 
            <?php }?>





            <?php global $wp;
            ?>
            <?php if(home_url($wp->request) == 'http://noted.local/up-comming-events'){ 
            ?>
            <!-- this piece of code finds the artiste attatched to an event and stores it in a variable for later use -->
            <?php
               $Hosts = get_field('event_host');
               foreach($Hosts as $host){ 
               $HostName = get_the_title($host); 
               }
            ?>
               <!-- end of code segment -->


                    <li class="posted_on"><i class="fa fa-music"></i><?php echo "Hosted By -- ".$HostName ?></li> 
               <?php }?>

            </ul>
</div>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
</div> 
<div class="clearfix"></div>
<div class="blog-info-content"><p><?php the_excerpt(); ?></p>
<a href="<?php the_permalink(); ?>"><button class="load-more"><?php _e('Read more','portfoliolite');?></button></a>
</div> 
</li>

<!--End post-->