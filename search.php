<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package firstpress
 */

get_header();?>

<?php $filter = array();
if($s) array_push($filter, $s);?>



<div class="page-content">

    <div class="archive-heading">
        <div class="container">
            <div class="col">
                    <h1 class="heading heading__md heading__caps">
                        You searched for:
                        <?php echo implode(" & ", $filter); ?>
                    </h1>
            </div>
        </div>
    </div>

    <div class="container cols-9-3 cols-sm-12 pt5">

         <div class="col">

            <div class="container cols-sm-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        		<?php $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

        	<div class="col">

        		<div id="post-<?php the_ID(); ?>" class="posts" >

        		<div class="image" style="background-image: url(<?php echo $featuredImage['0']; ?>);"><a href="<?php the_permalink();?>"></a></div>
        		<div class="content">
        <a href="<?php the_permalink();?>">
            <h2 class="heading heading__md"><?php the_title();?></h2>
        </a>
        <p><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>">
            <div class="button button__sm">Read More</div>
        </a>
        		</div>

        		</div>

        	</div>

        <?php endwhile; else: ?>

        <div class="alert alert-info">

        	<p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>

        </div>

        <?php endif; ?>

        </div>

         </div>

        <div class="col">
            <aside>
                <h3 class="heading heading__sm heading__caps font500">
                    Explore Categories
                </h3>
                <ul class="mt1">
               <?php
                   $args = array(
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'hierarchical' => 0,
                    'hide_empty' => 1,
                    'show_count' => 1,
                    'title_li' => false
            );
                   wp_list_categories($args);?>
                </ul>
            </aside>
        </div>

    </div>

<?php get_footer();
