<?php
/**
 * Template Name: Map
 *
 * @package Unconditional
 * @since Unconditional 1.0.0
 */

get_header(); ?>

<section class="container-fluid" id="section3">
  <div class="row">
    <div class="col-sm-12">
            <?php do_action( 'unconditional_before_page' ); ?>
            <?php while ( have_posts() ) : the_post(); ?>

              <?php get_template_part( 'content/content', 'page' ); ?>

              <?php
              // If comments are open or we have at least one comment, load up the comment template
              if ( comments_open() || '0' != get_comments_number() )
                comments_template();
              ?>

            <?php endwhile; // end of the loop. ?>
            <?php do_action( 'unconditional_after_page' ); ?>
          <?php if ( !is_active_sidebar( 'page' ) ) { ?>
          <?php } ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>
