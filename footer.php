<?php
/**
 * The template for displaying the footer
 * @package tob
 */
?>

</main>
</div><!-- #page content-->

<footer>
	<?php get_template_part('template-parts/footer', 'leaders');?>

    <div class="footer-accreds">

            <div class="trustpilot">
                <?php get_template_part('inc/img/trustpilot');?>
            </div>

        <div class="container cols-2 center align-vert-c">

            <?php if( have_rows('accreditations', 'options') ):
                while ( have_rows('accreditations', 'options') ) : the_row();?>
                    <div class="col">
                        <img src="<?php the_sub_field('image');?>"/>
                    </div>
            <?php endwhile; endif;?>

            <div class="col social">
                <?php if( have_rows('social_links', 'options') ):
                    while ( have_rows('social_links', 'options') ) : the_row();?>
                        <a href="<?php the_sub_field('social_link');?>"><?php the_sub_field('social_icon');?></a>

                <?php endwhile; endif;?>
            </div>

        </div>

    </div>

<div class="footer-logos">

    <div class="container cols-3">

            <div class="col">
                <a href="https://www.odysseytravels.com/">
                	<?php get_template_part('inc/img/odyssey', 'travels');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.tanzaniaodyssey.com/">
                	<?php get_template_part('inc/img/tanz', 'odyssey');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.asiaodyssey.com/">
                	<?php get_template_part('inc/img/asia', 'odyssey');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.southamericaodyssey.com/">
                	<?php get_template_part('inc/img/sa', 'odyssey');?>
                </a>
            </div>
    </div>

</div>

<div class="socket">

    <div class="container cols-4">
        <div class="col">
            <p>&copy; <?php the_date('Y');?> Tanzania Odyssey, an Odyssey Travels Company</p>
        </div>
        <div class="col center">
            <p>Legal  |  Sitemap</p>
        </div>
        <div class="col right">
            <p>Digital Marketing by Digital potion</p>
        </div>
    </div>

</div>

</footer>

    <?php wp_footer(); ?>

    </body>

</html>
