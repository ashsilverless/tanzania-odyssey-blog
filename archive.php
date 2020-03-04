<?php
/**
 *
 * @package aob
 */

get_header();?>

<div class="archive-heading">
    <div class="container">
        <div class="col">
                <h1 class="heading heading__md heading__caps">
                    <?php printf( __( '%s', 'aob' ), '<span>' . single_cat_title( '', false ) . '</span>' );?>
                </h1>
        </div>
    </div>
</div>

 <div class="container cols-3-9 cols-sm-12">

<div class="col">
    <aside>
        <h3 class="heading heading__sm heading__caps font500">Categories</h3>
        <ul class="mt1">
            <li class="home">
                <a href="<?php echo get_home_url(); ?>">
                <i class="fas fa-home"></i>
                    Blog Home
                </a>
            </li>
        </ul>
        <ul>
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

<div class="col">

<div class="page-content">

<div class="container cols-4 cols-md-6">

<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

		 <?php
				$categories = get_the_category();
				$comma      = ', ';
				$output     = '';
				$post_id = get_the_ID();
                $category_object = get_the_category($post_id);
                $category_name = $category_object[0]->name;
                $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>

    <div class="col">

		<article class="post" style="background-image: url(<?php echo $featuredImage['0']; ?>);">
        		<a href="<?php the_permalink() ?>">
        		    <p class="post-meta"><?php the_time( 'jS F Y' ); ?></p>
        		    <h2 class="heading heading__sm heading__brand-font heading__caps"><?php the_title() ?></h2>
        		</a>
		</article>

    </div>

    <?php endwhile;
    else :
    echo '<p>There are no posts!</p>';
    endif;?>

</div>

</div><!--content-->

</div>

</div>







<?php get_footer();?>
