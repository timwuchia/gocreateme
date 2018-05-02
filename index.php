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

		<ul id="filters">
	    	<li><a href="#" data-filter="*" class="selected">Everything</a></li>
			 <?php 
				 $terms = get_terms("category"); // get all categories, but you can use any taxonomy
				 $count = count($terms); //How many are they?

				 if ( $count > 0 ){  //If there are more than 0 terms
				 foreach ( $terms as $term ) {  //for each term:

				 echo "<li><a href='#' data-filter='.".$term->slug."'>" . $term->name . "</a></li>\n";
				 //create a list item with the current term slug for sorting, and name for label
			 		}
			 	} 
			 ?>
		</ul>
		<?php $the_query = new WP_Query( 'posts_per_page=50' ); //Check the WP_Query docs to see how you can limit which posts to display ?>
		<?php if ( $the_query->have_posts() ) : ?>
		    <div id="isotope-list">
		    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
			 $termsArray = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
			 $termsString = ""; //initialize the string that will contain the terms
			 foreach ( $termsArray as $term ) { // for each term 
			 $termsString .= $term->slug.' '; //create a string that has all the slugs 
			 }
			 ?> 
			 <div class="<?php echo $termsString; ?> item"> <?php // 'item' is used as an identifier (see Setp 5, line 6) ?>
			         <?php if ( has_post_thumbnail() ) { 
			                      the_post_thumbnail("medium");
			                } ?>
		 </div> <!-- end item -->
    <?php endwhile;  ?>
    </div> <!-- end isotope-list -->
<?php endif; ?>

		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

			
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
