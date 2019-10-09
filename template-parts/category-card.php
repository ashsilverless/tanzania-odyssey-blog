<?php $post_id = "category_12";
            $catTitle = get_cat_name(12);?>
        <?php $category_link = get_category_link( $post_id );
        $image = get_field( "image", $post_id );?>
<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name">    
    <div class="category-leader" style="background-image: url(<?php echo $image['url']; ?>);">
        <h2 class="heading heading__md"><?php echo $catTitle;?></h2>
    </div>
</a>
