<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single__hero pb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover; -webkit-background-size: cover; background-position: top;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single__hero-title">
						<?php the_title(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="single-post">
		<div class="container">
			<div class="row py-5">
				<div class="col-md-12">
					<div class="single-post__content">
						<div class="single-post__content-inner">
							<?php the_content(); ?>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>