<?php
/**
 * Template Name: Home_Page
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>

<div class="home-hero"> </div>  

<div class="container">
	<div class="triangle-top"></div>
	<div class="triangle-bottom"></div>
	<div class="introducao">
		<h1>
		<?php
		if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "intro" );
		?>
		</h1>
	</div>
</div>

<div class="quick-links">
	<div class="container">
		<hr>
		<div class="row-fluid">
			<a href="<?php echo get_permalink( get_page_by_title( 'Atividades' ) ) ?>">
				<div class="span3">
						<i class="icon-book icon-3x icon-border"></i>
						<?php
						if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-1" );
						?>
				</div>
			</a>
			<a href="<?php echo get_permalink( get_page_by_title( 'Agendamento' ) ) ?>">
				<div class="span3">
						<i class="icon-calendar icon-3x icon-border"></i>
						<?php
						if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-2" );
						?>
				</div>
			</a>
			<a href="<?php echo get_permalink( get_page_by_title( 'Contato' ) ) ?>">
				<div class="span3">
						<i class="icon-comment icon-3x icon-border"></i>
						<?php
						if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-3" );
						?>
				</div>
			</a>
			<a href="<?php echo get_permalink( get_page_by_title( 'Como Chegar' ) ) ?>">
				<div class="span3 last-link">
					<i class="icon-truck icon-3x icon-border"></i>
					<?php
					if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-4" );
					?>
				</div>
			</a>
		</div>
	</div>
</div>

<div class="visitas">
	<div class="container">
		<h2> Mural de Fotos </h2>
		<ul class="thumbnails">
			<?php $i = 1; ?>
			<?php $visita = new WP_Query( array( 'post_type' => 'visita', 'posts_per_page' => 8 ) ); ?>
			<?php while ($visita->have_posts()) : $visita->the_post(); ?>
						<?php if ($i==1) { ?>
							<li class="span4">
								<div class="thumbnail">
									<?php if(has_post_thumbnail()) { ?>
										<?php the_post_thumbnail("bootstrap-large"); ?>
									<?php } else { ?>
										<img src="http://placehold.it/300x382">	
									<?php } ?> 
									<div class="mask">  
								    	<h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>  
								    </div> 
								</div> 
							</li>
						<?php } else { ?>
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
						<?php } ?>
				<?php $i = $i + 1; ?>
			<?php endwhile; ?>
		</ul>
	<?php if($i>9) { ?>
		<a href="<?php echo get_permalink( get_page_by_title( 'Visitas' ) ) ?>" class="visitas-more btn btn-primary pull-right">Outras Visitas >></a> 
	<?php }?>
	</div>
</div>
<?php get_footer();?>