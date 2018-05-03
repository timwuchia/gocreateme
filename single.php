<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gocreateme
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

				echo "<div class='single-page-title'>";
				echo "<h3 class='single-post-title'>";
				the_title();
				echo "</h3>";
				if(function_exists("get_field")) {
					if(get_field("sub_title")) {
						echo "<p class='single-post-subtitle'>";
						the_field("sub_title");
						echo "</p>";
					}
				}
				echo "</div>";

			?>

			<?php

				echo "<div class='ind-post'>";
				echo "<div class='post-image'>";
				the_post_thumbnail("large");
				echo "</div>";
				echo "<div class='post-content'>";
				if(function_exists("get_field")) {
					if(get_field("contributors")){
						echo "<div class='contributor'>";
						echo "<p><span>Contributor: </span>";
						the_field("contributors");
						echo "</p>";
						echo "</div>";
					}
				}
				if(function_exists("get_field")) {
					if(get_field("completed")){
						echo "<div class='completed'>";
						echo "<p><span>Completed: </span>";
						the_field("completed");
						echo "</p>";
						echo "</div>";
					}
				}	
				if(function_exists("get_field")) {
					if(get_field("website_url")){
						echo "<div class='completed'>";
						echo "<p><a href='";
						the_field("website_url");
						echo "'>Check out website";
						echo "</a></p>";	
						echo "</p>";
						echo "</div>";
					}
				}	
				the_content();
				echo "</div>";
				echo "</div>";

				 ?>


			<?php

			
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
