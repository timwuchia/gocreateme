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
    <div class="see-work"><a href="https://gocreateme.com/work/">See Our Work</a></div>
    <?php } ?>

		

		<center><p><a href="mailto:gocreateme@gmail.com">gocreateme@gmail.com</a> | <a href="tel:16463012007">646.301.2007</a></p></center>

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
