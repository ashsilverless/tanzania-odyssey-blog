<?php
/**
 * The template for displaying all single posts
 *
 * @package tob
 */

get_header();
?>

<?php
    while ( have_posts() ) :
	the_post();?>

<!-- ******************* Hero Content ******************* -->

<?php $heroImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

<div class="hero" style="background-image: url(<?php echo $heroImage[0]; ?>);">
    <div class="hero__content">      
        <h1 class="heading heading__lg"><?php the_title(); ?></h1>
        <p class="heading heading__sm"><?php the_date( 'jS F Y' );?></p>
    </div>       
</div><!--hero-->

<!-- ******************* Hero Content END ******************* -->

<div class="container">
    <div class="col">

        <article>
        
            <div class="content">
                <?php the_content(); ?>
                <?php get_template_part('template-parts/itineraries');?>
            	<?php get_template_part('template-parts/related', 'articles');?>
            </div>
        
            <?php endwhile;
                wp_reset_query();?>
            
        </article>

    </div>
</div><!--c-->




<?php get_footer();
