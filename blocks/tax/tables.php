<!-- first shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_first'): ?>
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
    		$cats_products_first = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_first');
    		foreach( $cats_products_first as $cats_product_first ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_first['crb_cats_product_shablon_first_title'] ?></td>
			      <td class="weight-metr"><?php echo $cats_product_first['crb_cats_product_shablon_first_weight_metr'] ?></td>
			      <td class="price-metr"></td>
			      <td class="price-tonna"><?php echo $cats_product_first['crb_cats_product_shablon_first_price_tonna'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
	 	</table>
	</div>
<?php endif; ?>
<!-- second shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_second'): ?>
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
    		$cats_products_second = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_second');
    		foreach( $cats_products_second as $cats_product_second ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_second['crb_cats_product_shablon_second_title'] ?></td>
			      <td><?php echo $cats_product_second['crb_cats_product_shablon_second_price_sht'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- third shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_third'): ?>
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
    		$cats_products_third = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_third');
    		foreach( $cats_products_third as $cats_product_third ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_third['crb_cats_product_shablon_third_title'] ?></td>
			      <td><?php echo $cats_product_third['crb_cats_product_shablon_third_price_metr'] ?></td>
			      <td><?php echo $cats_product_third['crb_cats_product_shablon_third_price_list'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- fourth shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_fourth'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
          <th>Ширина общ.</th>
          <th>Ширина полезн.</th>
        	<th>Толщ., мм</th>
        	<th>Цинк, грн/м2</th>
        	<th>Полиэстер, грн/м2</th>
        	<th>Матполиэстер, грн/м2</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_fourth = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_fourth');
    		foreach( $cats_products_fourth as $cats_product_fourth ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_title'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_shirinaobsh'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_shirinaplz'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_tolshina'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_zink'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_poliestr'] ?></td>
			      <td><?php echo $cats_product_fourth['crb_cats_product_shablon_fourth_matpoliestr'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- five shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_five'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Вес 1м/кв</th>
        	<th>Цена за м2</th>
        	<th>Цена за 1 лист</th>
        	<th>Цена за 1 тонну</th>
        	<th style="display: none"></th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_five = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_five');
    		foreach( $cats_products_five as $cats_product_five ): ?>
			    <tr class="shablon_five">
			      <td><?php echo $cats_product_five['crb_cats_product_shablon_five_title'] ?></td>
			      <td class="shablon_five-ves"><?php echo $cats_product_five['crb_cats_product_shablon_five_ves'] ?></td>
			      <td class="shablon_five-price"></td>
			      <td class="shablon_five-pricelist"></td>
			      <td class="shablon_five-tonna"><?php echo $cats_product_five['crb_cats_product_shablon_five_price_tonna'] ?></td>
			      <td class="shablon_five-koef" style="display: none">
	    				<?php echo $cats_product_five['crb_cats_product_shablon_five_koef'] ?>
	    			</td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- six shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_six'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Вес 1м.пог кг</th>
        	<th>Цена за 1м.пог</th>
        	<th>Цена за 1 бухту (1т)</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_six = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_six');
    		foreach( $cats_products_six as $cats_product_six ): ?>
			    <tr class="shablon_six">
			      <td><?php echo $cats_product_six['crb_cats_product_shablon_six_title'] ?></td>
			      <td class="shablon_six-ves"><?php echo $cats_product_six['crb_cats_product_shablon_six_weight_metr'] ?></td>
			      <td class="shablon_six-price"><?php echo $cats_product_six['crb_cats_product_shablon_six_price_metr'] ?></td>
			      <td class="shablon_six-tonna"><?php echo $cats_product_six['crb_cats_product_shablon_six_price_tonna'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- seven shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_seven'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Страна-производитель</th>
        	<th>Гарантия лет</th>
        	<th>Цена за м2</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_seven = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_seven');
    		foreach( $cats_products_seven as $cats_product_seven ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_seven['crb_cats_product_shablon_seven_title'] ?></td>
			      <td><?php echo $cats_product_seven['crb_cats_product_shablon_seven_country'] ?></td>
			      <td><?php echo $cats_product_seven['crb_cats_product_shablon_seven_garantia'] ?></td>
			      <td><?php echo $cats_product_seven['crb_cats_product_shablon_seven_price_metr'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- eight shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_eight'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Цена за 1 метр</th>
        	<th>Цена за 1 рулон</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_eight = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_eight');
    		foreach( $cats_products_eight as $cats_product_eight ): ?>
			    <tr class="shablon_eight">
			      <td><?php echo $cats_product_eight['crb_cats_product_shablon_eight_title'] ?></td>
			      <td class="shablon_eight-price"></td>
			      <td class="shablon_eight-rulon"><?php echo $cats_product_eight['crb_cats_product_shablon_eight_price'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- nine shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_nine'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Цена за 1 рулон</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_nine = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_nine');
    		foreach( $cats_products_nine as $cats_product_nine ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_nine['crb_cats_product_shablon_nine_title'] ?></td>
			      <td><?php echo $cats_product_nine['crb_cats_product_shablon_nine_price'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- ten shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_ten'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>86</th>
        	<th>96</th>
        	<th>125</th>
        	<th>156</th>
        	<th>178</th>
        	<th>208</th>
        	<th>250</th>
        	<th>312</th>
        	<th>416</th>
        	<th>625</th>
        	<th>1250</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_ten = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_ten');
    		foreach( $cats_products_ten as $cats_product_ten ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_title'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_a'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_b'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_c'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_d'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_e'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_f'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_g'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_h'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_i'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_j'] ?></td>
			      <td><?php echo $cats_product_ten['crb_cats_product_shablon_ten_k'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>
<!-- eleven shablon -->
<?php if(carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon') === 'cats_shablon_eleven'): ?>
	<div class="table-responsive">
	 	<table>
	 		<thead class="thead">
	 			<tr>
          <th>Наименование</th>
        	<th>Кол-во м/кг</th>
        	<th>Цена, грн/кг</th>
        	<th>Примечание</th>
        </tr>
      </thead>
      <tbody>
      	<?php 
    		$cats_products_eleven = carbon_get_term_meta(get_queried_object_id(), 'crb_cats_products_shablon_eleven');
    		foreach( $cats_products_eleven as $cats_product_eleven ): ?>
			    <tr class="tr-line">
			      <td><?php echo $cats_product_eleven['crb_cats_product_shablon_eleven_title'] ?></td>
			      <td><?php echo $cats_product_eleven['crb_cats_product_shablon_eleven_qty'] ?></td>
			      <td><?php echo $cats_product_eleven['crb_cats_product_shablon_eleven_price'] ?></td>
			      <td><?php echo $cats_product_eleven['crb_cats_product_shablon_eleven_notice'] ?></td>
			    </tr>
		    <?php endforeach; ?>
		  </tbody>
		</table>
	</div>
<?php endif; ?>