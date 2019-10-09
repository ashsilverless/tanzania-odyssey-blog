<div class="category-carousel owl-carousel"> 

<?php $categories = get_categories(array(
      'orderby' => 'id',
      'hide_empty'=> 1,
    )); 
    
    foreach ($categories as $category) { 
    $img = get_field( 'image', $category->taxonomy . '_' . $category->term_id ); 
    $category_link = get_category_link( $category->term_id );
?>
<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name" class="grid-wrap">
    <div class="item" style="background-image: url(<?php echo $img['url']; ?>);">
        <h2 class="heading heading__sm"><?php echo $category->cat_name; ?></h2>
        <div class="article-count">
            <?php $cat_count = get_category( $category->term_id );
                echo $cat_count->count;?><span> Articles</span>
        </div>
    </div>
</a>
<?php } ?>
 
    </div>

        <!--<?php 
            $catID = get_sub_field('category');
            $post_id = $catID->term_id;
            $catTitle = get_cat_name($post_id); 
            $category_link = get_category_link( $post_id );
            $image = get_field( "image", $catID );?>-->
            
           <!--<a href="<?php echo esc_url( $category_link ); ?>" title="Category Name" class="grid-wrap"> 
                <div class="category-leader" style="background-image: url(<?php echo $image['url']; ?>);">

                    <div>
                        <h2 class="heading heading__sm"><?php echo $catTitle;?></h2>
                    </div>
                    <div class="article-count">
                            <?php 
                                $cat_count = get_category( $post_id );
echo $cat_count->count;?><span> Articles</span>
                    </div>
                </div>
            </a><!--c-->