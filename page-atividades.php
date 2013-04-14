<?php
/**
 * Template Name: Atividades
 *
 */
get_header(); ?>
  <div class="container">
  <div class="row-fluid">
   <?php if (function_exists('bootstrapwp_breadcrumbs')) bootstrapwp_breadcrumbs(); ?>
  </div><!--/.container -->
  </div><!--/.row -->

<div class="atividades">
	<div class="container">
		
		<?php
		/*<ul class="nav nav-pills">
			<li class="active"><a href="#">Educação Infantil</a></li>
			<li><a href="#">Ensino Fundamental I</a></li>
			<li><a href="#">Ensino Fundamental II</a></li>
			<li><a href="#">Ensino Médio</a></li>
		</ul> */
		?>

		<ul class="thumbnails">
			<?php $wp_query = new WP_Query( array( 'post_type' => 'atividade') ); ?>
			<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>	
				<?php //A separação por Faixa etária ainda será implmentada ?>
				<?php /*$faixa_etaria = get_field('faixa_etaria'); 
				<li class="span12"><h1><?php //echo $faixa_etaria ?></h1></li> */ ?>

				  <li class="span12">
					    	<div class="thumbnail right-caption">
					    		<?php if(has_post_thumbnail()) { ?>
									<?php the_post_thumbnail("bootstrap-large"); ?>
								<?php } else { ?>
									<img src="http://placehold.it/480x420">
								<?php } ?> 
								<div class="caption">
								    <h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>
	      							<p><?php echo the_content() ?></p>
								</div>
							</div>
						</li>
			<?php endwhile; ?>
		</ul>

	</div>
</div>

<?php get_footer();?>





