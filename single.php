<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */

get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="row-fluid">
		<div class="container">
			<?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
		</div><!--/.container -->
	 </div><!--/.row -->
	 <div class="container">
		<header class="post-title">
			<h1><?php the_title();?></h1>
		</header>
		<div class="row-fluid content">
	 		<p class="meta"><?php echo bootstrapwp_posted_on();?></p>
			<?php the_content();?>
			<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
		</div>
		<hr />
		<?php comments_template(); ?>
		<?php bootstrapwp_content_nav('nav-below');?>
	</div>
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>