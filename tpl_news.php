<?php
/*
Template Name: Страница НОВОСТИ
*/
?>

<?php get_header(); ?>

<div class="news">
	<div class="container">
		<div class="row mb-4">
			<div class="col-md-12">
				<div class="news__title">
					Новости
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			$custom_query_news = new WP_Query( array( 
				'post_type' => 'post',
				'category_name' => 'news'
			) );
			if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
				<div class="col-md-4 mb-4">
					<a href="<?php echo get_permalink(); ?>">
						<div class="news__item">
							<div class="news__item-img mb-3">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
							</div>
							<div class="news__item-title mb-3">
								<?php the_title(); ?>
							</div>
							<div class="news__item-date pb-3">
								<?php echo get_the_date('j F Y') ?>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="row mb-5">
			<div class="col-md-12">
				<div class="d-flex justify-content-center">
					<a href="/category/news">
						<div class="welcome__item-button news__button">
							Все новости
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>