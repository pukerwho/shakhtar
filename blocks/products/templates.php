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