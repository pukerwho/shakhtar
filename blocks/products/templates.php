<!-- first shablon -->
<?php if(carbon_get_the_post_meta('crb_products_shablon') === 'shablon_first'): ?>
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
    		$products_first = carbon_get_the_post_meta('crb_products_shablon_first');
    		foreach( $products_first as $product_first ): ?>
			    <tr class="tr-line">
			      <td><?php echo $product_first['crb_product_shablon_first_title'] ?></td>
			      <td class="weight-metr"><?php echo $product_first['crb_product_shablon_first_weight_metr'] ?></td>
			      <td class="price-metr"></td>
			      <td class="price-tonna"><?php echo $product_first['crb_product_shablon_first_price_tonna'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
	 	</table>
	</div>
<?php endif; ?>
<!-- second shablon -->
<?php if(carbon_get_the_post_meta('crb_products_shablon') === 'shablon_second'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Цена за шт</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$products_second = carbon_get_the_post_meta('crb_products_shablon_second');
    		foreach( $products_second as $product_second ): ?>
			    <tr class="tr-line">
			      <td><?php echo $product_second['crb_product_shablon_second_title'] ?></td>
			      <td><?php echo $product_second['crb_product_shablon_second_price_sht'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- third shablon -->
<?php if(carbon_get_the_post_meta('crb_products_shablon') === 'shablon_third'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Цена за 1м2</th>
        	<th>Цена за 1 лист</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$products_third = carbon_get_the_post_meta('crb_products_shablon_third');
    		foreach( $products_third as $product_third ): ?>
			    <tr class="tr-line">
			      <td><?php echo $product_third['crb_product_shablon_third_title'] ?></td>
			      <td><?php echo $product_third['crb_product_shablon_third_price_metr'] ?></td>
			      <td><?php echo $product_third['crb_product_shablon_third_price_list'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- fourth shablon -->
<?php if(carbon_get_the_post_meta('crb_products_shablon') === 'shablon_fourth'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Толщ., мм</th>
        	<th>Цинк, грн/м2</th>
        	<th>Полиэстер, грн/м2</th>
        	<th>Матполиэстер, грн/м2</th>
        	<th>Структурный дуб, грн/м2</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$products_fourth = carbon_get_the_post_meta('crb_products_shablon_fourth');
    		foreach( $products_fourth as $product_fourth ): ?>
			    <tr class="tr-line">
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_title'] ?></td>
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_tolshina'] ?></td>
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_zink'] ?></td>
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_poliestr'] ?></td>
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_matpoliestr'] ?></td>
			      <td><?php echo $product_fourth['crb_product_shablon_fourth_price_strdub'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- five shablon -->
<?php if(carbon_get_the_post_meta('crb_products_shablon') === 'shablon_five'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Вес 1м/кв</th>
        	<th>Цена за м2</th>
        	<th>Цена за 1 лист</th>
        	<th>Цена за 1 тонну</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$products_five = carbon_get_the_post_meta('crb_products_shablon_five');
    		foreach( $products_five as $product_five ): ?>
			    <tr class="tr-line">
			      <td><?php echo $product_five['crb_product_shablon_five_title'] ?></td>
			      <td><?php echo $product_five['crb_product_shablon_five_ves'] ?></td>
			      <td><?php echo $product_five['crb_product_shablon_five_price_metr'] ?></td>
			      <td><?php echo $product_five['crb_product_shablon_five_price_list'] ?></td>
			      <td><?php echo $product_five['crb_product_shablon_five_price_tonna'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>