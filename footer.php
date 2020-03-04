<?php
/**
 * The template for displaying the footer
 * @package aob
 */
?>

</main>

<footer>
	<?php get_template_part('template-parts/footer', 'leaders');?>

	<div class="trustpilot-widget" data-locale="en-GB" data-template-id="5406e65db0d04a09e042d5fc" data-businessunit-id="51bf70c500006400054070f0" data-style-height="28px" data-style-width="100%" data-theme="light" style="position: relative;"><iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" loading="auto" src="https://widget.trustpilot.com/trustboxes/5406e65db0d04a09e042d5fc/index.html?templateId=5406e65db0d04a09e042d5fc&amp;businessunitId=51bf70c500006400054070f0#locale=en-GB&amp;styleHeight=28px&amp;styleWidth=100%25&amp;theme=light" style="position: relative; height: 28px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe></div>

    <div class="footer-accreds">

            <?php if( have_rows('accreditations', 'options') ):
                while ( have_rows('accreditations', 'options') ) : the_row();?>
                    <div class="accred item">
                        <img src="<?php the_sub_field('image');?>"/>
                    </div>
            <?php endwhile; endif;?>

            <div class="social item">
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
                <a href="https://www.africaodyssey.com/">
                	<?php get_template_part('inc/img/africa', 'odyssey');?>
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

<div class="footer-links">
    <div class="container cols-3">
		<?php if( have_rows('link_section', 'options') ):
			while ( have_rows('link_section', 'options') ) : the_row();?>
		<div class="col">
			<?php the_sub_field('links');?>
		</div>
	<?php endwhile; endif;?>
	</div>
</div>

<div class="socket">

    <div class="container cols-4 cols-sm-12">
        <div class="col">
            <p>&copy; <?php the_date('Y');?> South America Odyssey, an Odyssey Travels Company</p>
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
