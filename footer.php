<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aw_Theme
 */

?>

	</div><!-- #content -->
	
	<footer id="footer" class="topspace">
		<div class="container">
			<div class="row">
				<div class="col-md-3 widget">
					<h3 class="widget-title">Contact</h3>
					<div class="widget-body">
						<p>+234 23 9873237<br>
							<a href="mailto:#">some.email@somewhere.com</a><br>
							<br>
							234 Hidden Pond Road, Ashland City, TN 37015
						</p>	
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Follow me</h3>
					<div class="widget-body">
						<p class="follow-me-icons">
							<a href=""><i class="fa fa-twitter fa-2"></i></a>
							<a href=""><i class="fa fa-dribbble fa-2"></i></a>
							<a href=""><i class="fa fa-github fa-2"></i></a>
							<a href=""><i class="fa fa-facebook fa-2"></i></a>
						</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Text widget</h3>
					<div class="widget-body">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, nihil natus explicabo ipsum quia iste aliquid repellat eveniet velit ipsa sunt libero sed aperiam id soluta officia asperiores adipisci maxime!</p>
					</div>
				</div>

				<div class="col-md-3 widget">
					<h3 class="widget-title">Form widget</h3>
					<div class="widget-body">
						<p>+234 23 9873237<br>
							<a href="mailto:#">some.email@somewhere.com</a><br>
							<br>
							234 Hidden Pond Road, Ashland City, TN 37015
						</p>	
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</footer>

	<footer id="underfooter">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 widget">
					<div class="widget-body">
						<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					</div>
				</div>

				<div class="col-md-6 widget">
					<div class="widget-body">
						<div class="site-info">
							<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'aw-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'aw-theme' ), 'WordPress' ); ?></a>
							<span class="sep"> | </span>
							<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'aw-theme' ), 'aw-theme', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
						</div><!-- .site-info -->
					</div>
				</div>

			</div> <!-- /row of widgets -->
		</div>
	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
