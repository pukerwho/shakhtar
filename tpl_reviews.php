<?php
/*
Template Name: Страница ОТЗЫВЫ
*/
?>

<?php get_header(); ?>

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
			<h2>Отзывы</h2>
		</div>
	</div>
	<div class="row pb-5">
		<div class="col-md-12">
			<?php comments_template(); ?> 
		</div>
	</div>
</div>

<?php get_footer(); ?>