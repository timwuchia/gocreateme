 <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
		if ( have_posts() ) :
			?>


			<div class='all-posts'>

				<?php

			while ( have_posts() ) :
				the_post();

				echo "<div class='ind-post'>";
				echo "<a href='";
				the_permalink();
				echo "'>";
				// echo "<div class='post-title'>";
				echo "<h3>";
				the_title();
				echo "</h3>";
				// echo "</div>";
				echo "<div class='post-image'>";
				the_post_thumbnail("team");
				echo "</div>";
				echo "</a>";
				echo "</div>";
				 ?>


				<?php

			
			endwhile;

			// the_posts_navigation();

			?>

		</div>

			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
