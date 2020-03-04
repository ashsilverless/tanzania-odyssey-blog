<?php
/**
 * The template for displaying all single posts
 *
 * @package aob
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
        <div class="blog-nav">
            <div class="inner">
                <div class="home">
                    <div>
                    <a href="<?php echo get_home_url(); ?>/">
                        <i class="fas fa-home"></i>
                    Blog Home
                    </a>
                </div>
                </div>
                <div class="cats">
                    <div>
                    <a href="/blog/africa-odyssey-news/">
                        <i class="fas fa-list"></i>
                        All Categories
                    </a>
                    </div>
                </div>
                <div class="this-cat">
                    <?php
                    $the_cat = get_the_category();
                    $category_name = $the_cat[0]->cat_name;
                    $category_link = get_category_link( $the_cat[0]->cat_ID );?>
                    <div>
                    <a href="<?php echo $category_link; ?>">
                        <i class="fas fa-archive"></i>
                        <span>Posted In</span>
                        <?php $current_cat_id = the_category_ID(false);
                        echo get_cat_name($current_cat_id);?>
                    </a>
                </div>
                </div>
            </div>
        </div>
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
