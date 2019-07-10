<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_term_options' );
function crb_term_options() {
  Container::make( 'term_meta', 'Options' )
    ->where( 'term_taxonomy', '=', 'cats' )
    ->add_fields( array(
    	Field::make( 'image', 'crb_cats_img', 'Заглавная картинка' )->set_value_type( 'url'),
      Field::make( 'complex', 'crb_cats_products', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_weight_metr', 'Вес м/п' ),
          Field::make( 'text', 'crb_cats_product_price_tonna', 'Цена за тонну' ),
      ) ),
  ) );
}

?>