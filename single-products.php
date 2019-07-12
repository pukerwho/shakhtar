<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="single__hero mb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover; -webkit-background-size: cover; background-position: top;">
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
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-12 text-center">
				<div class="single__title">
					Прайс-лист	
				</div>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<?php get_template_part('blocks/products/templates') ?>
			</div>
		</div>
	</div>
	

<?php endwhile; else: ?>
	<p><?php _e('Ничего не найдено'); ?></p>
<?php endif; ?>

<div class="d-flex justify-content-center mb-5">
	<div class="welcome__item-button callback">
		Заказать
	</div>
</div>

<section id="main_whyus">
	<?php get_template_part('blocks/main/whyus') ?>
</section>

<section id="main_news">
	<?php get_template_part('blocks/main/news') ?>
</section>
<?php get_footer(); ?>