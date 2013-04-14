<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
      <footer>
        <div class="container">
			<div class="row">
			    <div class="span4">
			      <?php
			      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-left");
			      ?>
			    </div>
			    <div class="span4">
			      <?php
			      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-middle");
			      ?>
			    </div>
			    <div class="span4">
			      <?php
			      if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-right");
			      ?>
			    </div>
			</div>
			<hr>
	        <p class="pull-right"><a href="#">Back to top</a></p>
	        <p><?php bloginfo('name'); ?> <?php the_time('Y') ?></p>

            </div> <!-- /container -->
       </footer>
<?php wp_footer(); ?>

  </body>
</html>