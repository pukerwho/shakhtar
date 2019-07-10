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
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
					 	<table>
					 		<thead class="thead">
					 			<tr>
	                <th>Наименование</th>
	              	<th>Вес м/п</th>
	              	<th>Цена за метр</th>
	              	<th>Цена за тонну</th>
	              </tr>
	            </thead>
	            <tbody>
	            	<?php 
	          		$products = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products');
	          		foreach( $products as $product ): ?>
							    <tr class="tr-line">
							      <td><?php echo $product['crb_cats_product_title'] ?></td>
							      <td class="weight-metr"><?php echo $product['crb_cats_product_weight_metr'] ?></td>
							      <td class="price-metr"></td>
							      <td class="price-tonna"><?php echo $product['crb_cats_product_price_tonna'] ?></td>
							    </tr>
						    <?php endforeach; ?>
						  </tbody>
					 	</table>
					</div>
				</div>
			</div>
		<?php else: ?>
			<!-- ВЛОЖЕННЫЕ ТОВАРЫ В ТАКСОНОМИЮ -->
			<div class="row">
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