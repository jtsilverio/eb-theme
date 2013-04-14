<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="row-fluid">
	<div class="container">
	 <?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) bootstrapwp_breadcrumbs(); ?>
	 </div><!--/.container -->
	 </div><!--/.row -->
	 <div class="container">
		<header class="page-title">
				<h1><?php the_title();?></h1>
			</header>
				<div class="row-fluid content">
						<?php the_content();?>
		</div>
	</div>
<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
