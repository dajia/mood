<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
    <?php wp_head(); ?>
  </head>
<body <?php body_class(); ?>>

<!--[if IE 6]>
<div id="browserChoice"><p>Welcome to <a href="#">Moudouris Brakes</a>. Our new site makes use of the modern standards, some of which are not supported by your web browser. <a href="http://browsehappy.com/" target="_blank">Click here to upgrade or to choose another free, modern and secure web browser</a>.</p></div>
<![endif]-->
<noscript>
  <div id="noscript"><p>You must Enable Javascript to enjoy the full content of this website.</p></div>
</noscript>

<?php


get_template_part( 'top-nav' );



if ( is_front_page() ) : ?>






<!--Video Section-->
<section class="content-section video-section" id="section0">
  <?php if ( get_header_image() ) : ?>
	<div id="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Moudouris Brakes - ABS / EBS / ECAS installations - air systems service - brake control">
	</div>	
  <?php endif; ?>

    <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1 class="text-center v-center">
            <?php if (get_theme_mod( 'unconditional_logo_image' )) : ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <img src="<?php echo esc_url(get_theme_mod( 'unconditional_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'unconditional_logo_alt_text' )); ?>" />
			</a>
		<?php else : ?>
            <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php //bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>
		</h1>
	   </div>
      </div>
		
    </div>
<?php if ( get_theme_mod( 'unconditional_home_intro_visibility' ) != 1 ) { 
    get_template_part( 'parts/cta' );	
} ?>
</section>

<!--Video Section Ends Here-->
<?php 

else : ?>

<section class="content-section video-section" id="section0">
    <?php if ( get_header_image() ) : ?>
	<div id="header-image">
			<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
	</div>	
    <?php endif; ?>
	 <div class="container">
      <div class="row">
        <div class="col-lg-12">
        <h1 class="text-center v-center">
            <?php if (get_theme_mod( 'unconditional_logo_image' )) : ?>
			<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			    <img src="<?php echo esc_url(get_theme_mod( 'unconditional_logo_image' )); ?>" alt="<?php echo esc_html(get_theme_mod( 'unconditional_logo_alt_text' )); ?>" />
			</a>
		<?php else : ?>
            <a class="brand" href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php //bloginfo( 'description' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php endif; ?>
		</h1>
	   </div>
      </div>
		
    </div>
  <?php get_template_part( 'parts/cta' ); ;?>
</section>
<?php endif; ?>