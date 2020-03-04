
    <div class="footer-leaders">

        <a href="" class="brand-logo">
            <img src="https://www.southamericaodyssey.com/site/assets/responsive/AO_Logo_POS_RGB.svg"/>
        </a>

        <div class="container cols-6">

        <?php if( have_rows('top_row', 'options') ):
            while ( have_rows('top_row', 'options') ) : the_row();?>
            <div class="col">
                <div class="item">
                <i class="<?php the_sub_field('icon');?>"></i>
                <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>
                <p><?php the_sub_field('copy');?></p>
                <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
            </div>
            </div>
        <?php endwhile; endif;?>
        <?php if( have_rows('second_row', 'options') ):
            while ( have_rows('second_row', 'options') ) : the_row();?>
                <div class="col">
                    <div class="item">
                        <i class="<?php the_sub_field('icon');?>"></i>
                        <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>
                        <p><?php the_sub_field('copy');?></p>
                        <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
                    </div>
                </div>
            <?php endwhile; endif;?>
            <?php if( have_rows('third_row', 'options') ):
                while ( have_rows('third_row', 'options') ) : the_row();?>
                <div class="col">
                    <div class="item">
                        <i class="<?php the_sub_field('icon');?>"></i>
                        <h3 class="heading heading__sm heading__brand-font heading__caps"><?php the_sub_field('heading');?></h3>
                        <p><?php the_sub_field('copy');?></p>
                        <a href="<?php the_sub_field('button_target');?>" class="inline">More <span>&xrarr;</span></a>
                    </div>
                </div>
            <?php endwhile; endif;?>
        </div>

</div>
