<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Riad_Kilani
 */

?>



	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="inner">
			<div class="footer-top">
				<div class="ftag">
					<span class="standout">Creative development</span> that works for your business goals.
				</div>
			</div>
			<div class="spacer"></div>
			<div class="footer-bottom">
				<div class="footer-links">
					<div class="wrap">
						<div class="fl-title">
							<h4>Links</h4>
						</div>
						<nav id="footer-navigation" class="footer-nav" role="navigation">
			        <?php wp_nav_menu( array( 'theme_location' => 'foot-nav', 'items_wrap' ) ); ?>
			      </nav><!-- #site-navigation -->
					</div>
				</div>
				<div class="footer-icon">
					h3{Riad Kilani icon}
				</div>
				<div class="footer-social">
					<div class="wrap">
						<div class="social-title">
							<h4>Social</h4>
						</div>
						<nav id="footer-social-links" class="soc-nav" role="navigation">
			        <?php wp_nav_menu( array( 'theme_location' => 'social-nav', 'items_wrap' ) ); ?>
			      </nav><!-- #site-navigation -->
					</div>
				</div>
			</div>
			<div class="spacer"></div>
			<div class="site-info">
				Copyright <?php echo date('Y'); ?> <a href="http://riad.design">Riad Kilani</a>
			</div><!-- .site-info -->
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->
</div><!-- #content -->
<?php wp_footer(); ?>

</body>
</html>
