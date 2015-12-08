			</div> <!-- end #content -->
			
		</div> <!-- end .container -->
	</div>	<!-- end #bg2 -->
</div> 	<!-- end #bg -->	


<div id="footer">
	<div class="container clearfix">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?> 
		<?php endif; ?>
		
		<div class="clear"></div>
		
		<p id="copyright"><?php _e('Designed by ','DelicateNews'); ?> <a href="http://www.elegantthemes.com" title="Elegant Themes">Elegant Themes</a> | <?php _e('Powered by ','DelicateNews'); ?> <a href="http://www.wordpress.org">Wordpress</a></p>
	</div> <!--end .container -->
</div> <!-- end #footer -->

	<?php include(TEMPLATEPATH . '/includes/scripts.php'); ?>

	<?php wp_footer(); ?>	
</body>
</html>