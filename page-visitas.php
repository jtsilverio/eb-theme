<?php
/**
 * Template Name: Visitas
 *
 */
get_header(); ?>
  <div class="row-fluid">
  <div class="container">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
  </div><!--/.container -->
  </div><!--/.row -->

<div class="visitas">
	<div class="container">
		<ul class="thumbnails">
			<?php $wp_query = new WP_Query( array( 'post_type' => 'visita', 'paged' => $paged, 'posts_per_page' => 21)); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>					
				    	<li class="span4">
				    	<div class="thumbnail">
				    		<?php if(has_post_thumbnail()) { ?>
								<?php the_post_thumbnail("post-thumbnail"); ?>
							<?php } else { ?>
								<img src="http://placehold.it/300x180">
							<?php } ?> 
							<div class="mask">  
						    	<h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>  
						    </div>  
						</div>
						</li>
			<?php endwhile; ?>
		</ul>
	<ul class="pager">
        <li class="pull-left previous"><?php previous_posts_link('Fotos Mais Recentes') ?></li>
        <li class="pull-right next"><?php next_posts_link('Fotos Mais Antigas') ?></li>
	</ul>
	</div>
</div>

<?php get_footer();?>





