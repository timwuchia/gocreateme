<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gocreateme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		


	<?php 

	global $wp_query;

	if ( isset( $wp_query ) && !(bool) $wp_query->is_posts_page ) {
    //static blog page


	 ?>
    <h3 class="see-work"><a href="https://gocreateme.com/work/">See Our Work</a></h3>
    <?php } ?>

		

		<h3 class="short-contact-info">hello@gocreateme.com | 7788987654</h3>

		<nav class="social-media">
			<ul>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>		
			</ul>
		</nav>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

 <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
 <script type="text/javascript">
 	$('.grid').isotope({
  // options
  itemSelector: '.item',
  layoutMode: 'fitRows'
});
 </script>

</body>
</html>
