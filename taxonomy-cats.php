<?php get_header(); ?>
	<div class="single__hero mb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover; -webkit-background-size: cover; background-position: top;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="single__hero-title">
						<?php single_term_title(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<?php 
		$term_current_id = get_queried_object_id();
		$term_now = get_term($term_current_id);
		if ($term_now->count === 0): ?>
			<!-- БЕЗ ВЛОЖЕНИЙ ТАКСОНОМИЯ -->
			<div class="row mb-5">
				<div class="col-md-12 text-center">
					<div class="single__title">
						Прайс-лист	
					</div>
				</div>
			</div>
			<div class="row mb-5">
				<div class="col-md-12">
					<?php get_template_part('blocks/tax/tables') ?>
				</div>
			</div>
		<?php else: ?>
			<!-- ВЛОЖЕННЫЕ ТОВАРЫ В ТАКСОНОМИЮ -->
			<div class="row mb-5">
				<?php 
				$current_term = get_queried_object_id();
			  $custom_query_news = new WP_Query( array( 
			  	'post_type' => 'products',
			  	'tax_query' => array(
				    array(
			        'taxonomy' => 'cats',
					    'terms' => $current_term,
			        'field' => 'term_id',
			        'include_children' => true,
			        'operator' => 'IN'
				    )
					),
			  ) );
			  if ($custom_query_news->have_posts()) : while ($custom_query_news->have_posts()) : $custom_query_news->the_post(); ?>
			  	<div class="col-md-4">
			  		<a href="<?php echo get_permalink(); ?>">
					  	<div class="tax__box">
					  		<div class="tax__box-img">
					  			<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
					  		</div>
					  		<div class="tax__box-title">
					  			<?php the_title(); ?>
					  		</div>
					  	</div>	
				  	</a>
			  	</div>
				<?php endwhile; endif; wp_reset_postdata(); ?>
			</div>
		<?php endif; ?>
	</div>
	
<?php get_footer(); ?>