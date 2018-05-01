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

			<h2 class="team-title">Our Team</h2>

			<?php 

				$args = array(
					'post_type' => 'team-member',
					'posts_per_page' => -1
				);

				$members = new WP_Query( $args );
				if($members->have_posts()){

					echo "<div class='all-team-members'>";
					while($members->have_posts()){
						$members->the_post();
						echo "<div class='team-member'>";
						the_post_thumbnail("team");
						echo "<h3>";
						the_title();
						echo "</h3>";
						the_content();
						echo "</div>";
					}
					echo "</div>";
				}



			 ?>

		
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
