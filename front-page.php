<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gocreateme
 */

get_header();
?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php 

        if(function_exists('get_field')) {

        	$image = get_field('top_banner');
        	$size = 'large';
        	echo wp_get_attachment_image ($image, $size);

        }

        	 

         ?>

        <?php
        while ( have_posts() ) :
            the_post();


        endwhile; // End of the loop.
        ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
