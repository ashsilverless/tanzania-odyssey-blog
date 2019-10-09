<?php
/**
 *
 * @package tob
 */
get_header();?>

    <?php 
        $first_grid_query = new WP_Query(
        array(
            'posts_per_page'=>1
        )
        );
        while ($first_grid_query->have_posts()) : $first_grid_query->the_post();
            $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
$featimage = $imageid['0'];
        endwhile; 
    wp_reset_postdata(); 
    ?>  

<div class="hero" style="background-image: url(<?php echo $featimage; ?>);">
    
    <div class="container cols-8-4">
    
    
    <div class="col align-vert-b pb3">
        <div class="main">
    <?php 
        $first_grid_query = new WP_Query(
        array(
            'posts_per_page'=>1
        )
        );
        while ($first_grid_query->have_posts()) : $first_grid_query->the_post();
            $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            the_title('<h2 class="heading heading__xl">', '</h2>');?>
            <h3 class="heading heading__sm"><?php the_excerpt();?></h3>
            <a href="<?php the_permalink();?>" class="button">Read More <span>&xrarr;</span></a>
        <?php endwhile; 
    wp_reset_postdata(); 
    ?>  
        </div>
    </div>
    
    <div class="col">
        <div class="secondary">
            <div class="section-title">
                <h4 class="heading heading__sm heading__caps heading__brand-font">Latest Posts</h4>
            </div>
            <?php 
                $first_grid_posts_ids = wp_list_pluck( $first_grid_query->posts, 'ID' );
                $second_grid_query = new WP_Query(
                    array(
                        'posts_per_page'=>3,
                        'post__not_in' => $first_grid_posts_ids
                    )
                );
                while ($second_grid_query->have_posts()) : $second_grid_query->the_post();
                $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );$featimage = $imageid['0'];?>
                
                <a href="<?php the_permalink();?>" class="article-wrapper">
                <article>
                    <div class="image" style="background-image: url(<?php echo $featimage; ?>);"></div>
                    
                    <div class="content">
                        
                    <?php the_title('<h2 class="heading heading__sm">', '</h2>');?>
                    <p class="category">Posted In <?php                         foreach((get_the_category()) as $category){
                            echo $category->name;
                            }?> on <?php the_date('jS F Y', '', ''); ?></p>
                    </div>
                    
                </article>
                </a>
                <?php endwhile; 
            wp_reset_postdata(); 
            ?>        
        </div>
    </div>
    
    </div><!--c-->

</div><!--hero-->

<!--<div class="heading-bar mb5">
    <div class="container">
        <div class="col">
            <h4 class="heading heading__md heading__caps">Explore The Blog</h4>
        </div>
    </div>
</div>-->

<div class="container">
    <div class="col mt2 mb1">
            <h3 class="heading heading__md heading__caps heading__brand-font center">Categories</h3>
    </div>
</div>

<?php get_template_part('template-parts/category', 'slider');?>

<div class="container">
    <div class="col">

        <article class="featured">
            <?php
            query_posts('posts_per_page=1&cat=2363');
            if ( have_posts() ) while ( have_posts() ) : the_post();
            $featuredImage = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'small' ); ?>
        
            <div class="banner-image" style="background-image: url(<?php echo $featuredImage['0']; ?>);">
                <div class="label">
                    <p><i class="fas fa-star"></i></i> Featured Article</p>
                </div>
            
            </div>
        
            <div class="content">
                <h2 class="heading heading__lg"><?php the_title();?></h2>
                <p class="meta">Posted on <?php the_date('jS F Y', '', ''); ?></p>
                <?php the_content(); ?>
                    <?php get_template_part('template-parts/itineraries');?>
                	<?php get_template_part('template-parts/related', 'articles');?>
            </div>
        
            <?php endwhile;
                wp_reset_query();?>
            
        </article>

    </div>
</div><!--c-->

<?php get_footer();?>