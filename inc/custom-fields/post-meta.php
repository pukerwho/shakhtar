<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_post_theme_options' );
function crb_post_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'products' )
    ->add_fields( array(
      Field::make( 'select', 'crb_products_shablon', 'Выберите шаблон' )
      ->add_options( array(
          'shablon_first' => 'Вес/м, Цена за метр, Цена за тонну',
          'shablon_second' => 'Цена за шт',
          'shablon_third' => 'Цена за 1м2, Цена за 1лист',
          'shablon_fourth' => 'Толщ мм, Цинк грн/м2, Полиэстер, грн/м2, Матполиэстер, грн/м2, Структурный дуб, грн/м2',
      ) ),
      Field::make( 'complex', 'crb_products_shablon_first', 'Продукты' )
	    	->add_fields( array(
	        Field::make( 'text', 'crb_product_shablon_first_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_first_weight_metr', 'Вес м/п' ),
          Field::make( 'text', 'crb_product_shablon_first_price_tonna', 'Цена за тонну' ),
	    ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_first',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_second', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_second_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_second_price_sht', 'Цена за штуку' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_second',
            'compare' => '=',
          ),
        ) ),
  ) );
}

?>