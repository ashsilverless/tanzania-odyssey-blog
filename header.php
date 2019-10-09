<?php
/**
 * Header
 *
 * @package tob
 */

?>
<!doctype html>
<?php
	$url = explode('/',$_SERVER['REQUEST_URI']);
	$dir = $url[1] ? $url[1] : 'home';
?>

<html <?php language_attributes(); ?> class="<?php echo $dir ?>">  
<head>

<meta charset="UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title></title> 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"><!-- Font Awesome CDN-->

<!--<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />-->

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Raleway&display=swap" rel="stylesheet">
	
<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>

    <header>

        <div class="container cols-4">

            <div class="col align-vert-c">
                <div class="menu-trigger">
                    <i class="fas fa-bars"></i>
                </div>
                
                <ul class="primary-menu">
                        <li class="where">Where</li>
                        <li class="what">What</li>
                        <li class="inspire">Inspire</li>
                        <li class="more">More &plus;</li>
                    </ul>
            </div>

<div class="col">
    <div class="brand-logo">
        <a href="">
            <img src="https://www.tanzaniaodyssey.com/site/assets/responsive/tanzania-logo.svg"/>
        </a>
    </div>
</div>

<div class="col">
    <div class="contact-section">
        <a href="">
            <p>Contact</p>
            <p>Direct Price Guarantee</p>        
        </a>
    </div>
</div>



</div>

<div class="where-wrapper">
    <div class="container">
        <div class="col">
        <div class="countries-wrapper">
            <?php get_template_part('header-partials/nav-map');?>
            <?php
                wp_nav_menu( array(
                'theme_location' => 'countries-menu',
                'container_class' => 'countries menu',
                'link_before' => '<span>','link_after'=>'</span>'
                ) );
            ?>
        </div>               
    </div>
    </div>
</div>

<div class="what-wrapper">
    <div class="container">
        <div class="col">
            <?php
                wp_nav_menu( array(
                'theme_location' => 'what-menu',
                'container_class' => 'what-menu',
                'link_before' => '<span>','link_after'=>'</span>'
                ) );
            ?>           
        </div>
    </div>
</div>

<div class="inspire-wrapper">
    <div class="container">
        <div class="col">
            <div class="inspire-menu">
            <?php if( have_rows('inspire_menu', 'options') ):
                while ( have_rows('inspire_menu', 'options') ) : the_row();?>
                <?php $inspireimage = get_sub_field('image');?>
                    <div class="menu-item">
                        <a href="<?php the_sub_field('item_target');?>">
                        <div class="image" style="background-image: url(<?php echo $inspireimage['url']; ?>);"></div>
                        <p><?php the_sub_field('item_text');?></p>
                        </a>
                    </div>
                <?php endwhile; endif;?>
            </div>
        </div>
    </div>
</div>

<div class="more-wrapper">
    <div class="container">
        <div class="col">
        <div class="more-menu">
            <?php
                wp_nav_menu( array(
                'theme_location' => 'more-menu',
                'container_class' => 'more menu',
                'link_before' => '<span>','link_after'=>'</span>'
                ) );
            ?>
        </div>               
    </div>
    </div>
</div>

<div class="secondary-bar">

        <div class="container cols-4 align-vert-c">
            
            <div class="col">
                <div class="telephone">
                    <a href="">UK +44 (0) 20 8704 1216</a>
                    <a href="">USA +1 866 356 4691</a>
                </div>
            </div>
            
            <div class="col">
                <div class="email">
                <a href="mailto:info@tanzaniaodyssey.com">info@tanzaniaodyssey.com</a>
                </div>
            </div>            
            
            <div class="col">
                <div class="search">
                	<form role="search" method="get" class="<?php echo $color; ?>" action="<?php echo home_url('/'); ?>">
                		<input name="s" class="search-input" type="search" placeholder="Search Blog" value="<?php echo get_search_query(); ?>"/>
                		<button type="submit"><i class="fas fa-search"></i></button>
                	</form>
                	</div>                    
                </div>

            </div>            
            
        </div>

</div>

    </header>

	<div id="page" class="site-wrapper">
    <div id="page-bg"></div>
	<main>