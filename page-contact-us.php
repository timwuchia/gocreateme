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

        	echo do_shortcode('[ninja_form id=1]');

        	 ?>

        	 <div class="contact-details">
        	 	<h3>Contact Details</h3>
        	 	<p>hello@gocreateme.com</p>
        	 	<p>+1(604)679-5016</p>
        	 	<p>WeChat: gocreateme</p>
        	 </div>

       	

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
