
    <div class="footer-leaders">
        
        <a href="" class="brand-logo">
            <img src="https://www.tanzaniaodyssey.com/site/assets/responsive/tanzania-logo.svg"/>
        </a>
        
        <div class="container cols-4">
            <div class="col">
    <?php if( have_rows('left_column', 'options') ):
        while ( have_rows('left_column', 'options') ) : the_row();?>
            <div class="item">
                <i class="<?php the_sub_field('icon');?>"></i>
                <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>        
                <p><?php the_sub_field('copy');?></p>
                <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
            </div>
    <?php endwhile; endif;?>
            </div>
            <div class="col">
                <?php if( have_rows('center_column', 'options') ):
                    while ( have_rows('center_column', 'options') ) : the_row();?>
                        <div class="item">
                            <i class="<?php the_sub_field('icon');?>"></i>
                            <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>
                            <p><?php the_sub_field('copy');?></p>
                            <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
                        </div>
                <?php endwhile; endif;?>
            </div>
            <div class="col">
                <?php if( have_rows('right_column', 'options') ):
                    while ( have_rows('right_column', 'options') ) : the_row();?>
                        <div class="item">
                            <i class="<?php the_sub_field('icon');?>"></i>
                            <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>
                            <p><?php the_sub_field('copy');?></p>
                            <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
                        </div>
                <?php endwhile; endif;?>
            </div>        
    </div>

</div>