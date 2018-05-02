<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gocreateme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<h2 class="service-title">Our Services</h2>

			<?php 

				$args = array(
					'post_type' => 'service',
					'posts_per_page' => -1
				);

				$services = new WP_Query( $args );
				if($services->have_posts()){

					echo "<div class='all-services'>";
					while($services->have_posts()){
						$services->the_post();
						echo "<div class='service'>";
						echo "<div class='service-img'>";
						the_post_thumbnail("medium");
						echo "</div>";
						echo "<div class='service-content'>";
						echo "<h3>";
						the_title();
						echo "</h3>";
						the_excerpt();
						echo "</div>";
						echo "</div>";
					}
					echo "</div>";
				}



			 ?>
			
		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
