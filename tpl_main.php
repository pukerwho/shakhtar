<?php
/*
Template Name: Страница ГЛАВНАЯ
*/
?>

<?php get_header(); ?>

<section id="main_welcome">
	<div class="main mb-5">
		<?php get_template_part('blocks/main/welcome') ?>
	</div>
</section>

<section id="main_catalog">
	<?php get_template_part('blocks/main/catalog') ?>
</section>

<section id="main_content">
	<div class="container">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="row">
			<div class="col-md-12">
				<?php the_content(); ?>
			</div>
		</div>
		<?php endwhile; else: ?>
			<p><?php _e('Ничего не найдено'); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>