	<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Revised: January 22, 2012
 */
get_header(); ?>
  <div class="row">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
  </div><!--/.container -->
  </div><!--/.row -->
   <div class="container">

      
 <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php _e( 'Ops, você pode estar perdido...', 'bootstrapwp' ); ?></h1>
        <p class="lead"><?php _e( 'Não foi possível encontrar o que você procurava. Talvez procurando em algum dos links abaixo ajude.', 'bootstrapwp' ); ?></p>
      </header>
	  
        <div class="row content">
<div class="span8">
					

<div class="well">
	<?php get_search_form(); ?>
</div><!--/.well -->
<div class="row">
<div class="span4">
					<h2>All Pages</h2>
					<?php wp_page_menu(); ?>
</div><!--/.span4 -->
<div class="span4">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
</div><!--/.span4 -->
</div><!--/.row -->
					</div><!--/.span8 -->
 <?php get_sidebar(); ?>

<?php get_footer(); ?>