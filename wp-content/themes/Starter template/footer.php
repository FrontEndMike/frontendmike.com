<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>
					
				<footer class="footer" role="contentinfo">
					
					<div class="row">
	    				<div id="footer-widget" class="small-6 medium-6 large-6 column" role="complementary">

	    					<?php if ( is_active_sidebar( 'footer' ) ) : ?>

	    						<?php dynamic_sidebar( 'footer' ); ?>

	    					<?php endif; ?>

	    				</div>
						<div class="small-6 medium-6 large-6 column">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						<div class="row">
							<div class="small-12 medium-12 large-12 column">
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div>
					
					</div> <!-- end #inner-footer -->
				
				</footer> <!-- end .footer -->
			
			</div>  <!-- end .off-canvas-content -->
					
		</div> <!-- end .off-canvas-wrapper -->
		
		<?php wp_footer(); ?>
		
	</body>
	
</html> <!-- end page -->