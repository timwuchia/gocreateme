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

        <div class="home-top">
	        <img src="<?php the_field('top_banner'); ?>" class="top-banner" alt="top-banner" />
	        <p>We are a web development team based in Vancouver, feel free to contact us if you need a website</p>
        </div>

       <?php
				$args = array(
					'numberposts' => 3,
					'posts_per_page' => 3,
					'offset' => 0,
					// 'category' => 0,
					'orderby' => 'post_date',
					'order' => 'DESC',
					'include' => '',
					'exclude' => '',
					'meta_key' => '',
					'meta_value' =>'',
					'post_type' => 'post',
					'post_status' => 'draft, publish, future, pending, private',
					'suppress_filters' => true
				);

				$recent_posts = wp_get_recent_posts( $args, ARRAY_A );

				?>

				<?php
				    $query = new WP_Query( $args );
					if ( $query->have_posts() ) {
					        
					        echo "<div class='recent-works'>";


					        while($query->have_posts())	{
					        	$query->the_post();
					        	echo "<div class='recent-work-wrapper'>";
					        	echo "<a href='";
					        	echo the_permalink();
					        	echo"'>";
					        	the_post_thumbnail();
					        	echo "</a>";
					        	echo "</div>";

					        }			
					        	echo "</div>";	    		               
					        }
									    
				?>


        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
