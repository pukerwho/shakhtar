<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center mb-5">
				Каталог продукции	
			</h2>
		</div>
	</div>
	<div class="row mb-5">
		<div class="col-md-12">
			<div class="main_catalog__content">
				<div class="main_catalog__left">
					<?php $main_cats = get_terms( array( 'taxonomy' => 'cats', 'parent' => 0, 'hide_empty' => false ) );
					foreach ( $main_cats as $main_cat ): ?>
						<div class="main_catalog__left-item">
							<?php
							if ($main_cat->count != 0): ?>
								<details>
									<summary class="main_catalog__left-title">
										<?php echo $main_cat->name ?>	
									</summary>
									<div class="main_catalog__left-sub">
										<?php
											$custom_query_products = new WP_Query( array( 
												'post_type' => 'products',
												'tax_query' => array(
											    array(
										        'taxonomy' => 'cats',
												    'terms' => $main_cat->term_id,
										        'field' => 'term_id',
										        'include_children' => true,
										        'operator' => 'IN'
											    )
												),
											) );
											if ($custom_query_products->have_posts()) : while ($custom_query_products->have_posts()) : $custom_query_products->the_post(); ?>
												<li class="main_catalog__click" onclick="showTable(event, 'tableShow-<?php echo get_the_id(); ?>')">
													<?php the_title(); ?>	
												</li>
										<?php endwhile; endif; wp_reset_postdata(); ?>
									</div>
								</details>
								<?php else: ?>
									<div class="main_catalog__left-title main_catalog__click" onclick="showTable(event, 'tableShow-<?php echo $main_cat->term_id ?>')">
										<?php echo $main_cat->name ?>	
									</div>
							<?php endif; ?>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="main_catalog__right">
					<?php $main_table_cats = get_terms( array( 'taxonomy' => 'cats', 'parent' => 0, 'hide_empty' => false ) );
					foreach ( $main_table_cats as $main_table_cat ): ?>
						<?php if ($main_table_cat->count === 0): ?>
							<div id="tableShow-<?php echo $main_table_cat->term_id ?>" class="tabcontent">
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
				          		$cat_products = carbon_get_term_meta($main_table_cat->term_id, 'crb_cats_products');
				          		foreach( $cat_products as $cat_product ): ?>
										    <tr class="tr-line">
										      <td><?php echo $cat_product['crb_cats_product_title'] ?></td>
										      <td class="weight-metr"><?php echo $cat_product['crb_cats_product_weight_metr'] ?></td>
										      <td class="price-metr"></td>
										      <td class="price-tonna"><?php echo $cat_product['crb_cats_product_price_tonna'] ?></td>
										    </tr>
									    <?php endforeach; ?>
									  </tbody>
								 	</table>
								</div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
						<?php
							$custom_query_catalog_products = new WP_Query( array( 
								'post_type' => 'products',
							) );
							if ($custom_query_catalog_products->have_posts()) : while ($custom_query_catalog_products->have_posts()) : $custom_query_catalog_products->the_post(); ?>
								<div id="tableShow-<?php echo get_the_id(); ?>" class="tabcontent">
									<?php get_template_part('blocks/products/templates') ?>
								</div>
						<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
	</div>
</div>