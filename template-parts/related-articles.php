<div class="related-wrapper">
    <p class="heading heading__sm heading__caps font100">Related Articles</p>  
    <div class="small-carousel owl-carousel"> 
  
	<?php
		$args = array(
            'category__in' => wp_get_post_categories( $post->ID ), 
            'numberposts'  => -1, 
            'post__not_in' => array( $post->ID ) 
			);
        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
        if( $loop->post->ID != 1745): ?>
        <?php $imageid = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );$featimage = $imageid['0'];?>
    <a href="<?php the_permalink();?>" style="background-image: url(<?php echo $featimage; ?>);">		
            <h2 class="heading heading__sm"><?php the_title();?></h2>
    </a>
	<?php endif;
		endwhile;
		}
		wp_reset_postdata();?>
</div>
 </div>