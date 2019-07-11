<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_term_options' );
function crb_term_options() {
  Container::make( 'term_meta', 'Options' )
    ->where( 'term_taxonomy', '=', 'cats' )
    ->add_fields( array(
    	Field::make( 'image', 'crb_cats_img', 'Заглавная картинка' )->set_value_type( 'url'),
      Field::make( 'select', 'crb_cats_products_shablon', 'Выберите шаблон' )
      ->add_options( array(
          'cats_shablon_first' => 'Вес/м, Цена за метр, Цена за тонну',
          'cats_shablon_second' => 'Цена за шт',
          'cats_shablon_third' => 'Цена за 1м2, Цена за 1лист (сетка)',
          'cats_shablon_fourth' => 'Толщ мм, Цинк грн/м2, Полиэстер, грн/м2, Матполиэстер, грн/м2, Структурный дуб, грн/м2',
          'cats_shablon_five' => 'Вес 1м/кв, Цена за м2, цена за 1 лист, Цена за 1 т, (листы)',
      ) ),
      Field::make( 'complex', 'crb_cats_products_shablon_first', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_shablon_first_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_shablon_first_weight_metr', 'Вес м/п' ),
          Field::make( 'text', 'crb_cats_product_shablon_first_price_tonna', 'Цена за тонну' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_cats_products_shablon',
            'value' => 'cats_shablon_first',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_cats_products_shablon_second', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_shablon_second_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_shablon_second_price_sht', 'Цена за штуку' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_cats_products_shablon',
            'value' => 'cats_shablon_second',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_cats_products_shablon_third', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_shablon_third_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_shablon_third_price_metr', 'Цена за 1 метр2' ),
          Field::make( 'text', 'crb_cats_product_shablon_third_price_list', 'Цена за лист' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_cats_products_shablon',
            'value' => 'cats_shablon_third',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_cats_products_shablon_fourth', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_shablon_fourth_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_shablon_fourth_tolshina', 'Толщина, мм' ),
          Field::make( 'text', 'crb_cats_product_shablon_fourth_zink', 'Цинк, грн/м2' ),
          Field::make( 'text', 'crb_cats_product_shablon_fourth_poliestr', 'Полиэстер, грн/м2' ),
          Field::make( 'text', 'crb_cats_product_shablon_fourth_matpoliestr', 'Матполиэстер, грн/м2' ),
          Field::make( 'text', 'crb_cats_product_shablon_fourth_price_strdub', 'Структурный дуб, грн/м2' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_cats_products_shablon',
            'value' => 'cats_shablon_fourth',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_cats_products_shablon_five', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_cats_product_shablon_five_title', 'Наименование' ),
          Field::make( 'text', 'crb_cats_product_shablon_five_ves', 'Вес 1м/кв' ),
          Field::make( 'text', 'crb_cats_product_shablon_five_price_metr', 'Цена за м2' ),
          Field::make( 'text', 'crb_cats_product_shablon_five_price_list', 'Цена за 1 лист' ),
          Field::make( 'text', 'crb_cats_product_shablon_five_price_tonna', 'Цена за 1 тонну' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_cats_products_shablon',
            'value' => 'cats_shablon_five',
            'compare' => '=',
          ),
        ) ),
  ) );
}

?>