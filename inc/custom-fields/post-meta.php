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
          'shablon_third' => 'Цена за 1м2, Цена за 1лист (сетка)',
          'shablon_fourth' => 'Ширина общ, Ширина плз, Толщ мм, Цинк грн/м2, Полиэстер, грн/м2, Матполиэстер, грн/м2, грн/м2',
          'shablon_five' => 'Вес 1м/кв, Цена за м2, цена за 1 лист, Цена за 1 т, (листы)',
          'shablon_six' => 'Вес 1м.пог кг Цена за 1м.пог Цена за 1 бухту (1т)',
          'shablon_seven' => 'Страна-производитель Гарантия лет Цена за м2',
          'shablon_eight' => 'Цена за 1 метр Цена за 1 рулон',
          'shablon_nine' => 'Цена за 1 рулон',
          'shablon_ten' => 'Для гибочных элементов',
          'shablon_eleven' => 'Проволока Отожженная',
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
      Field::make( 'complex', 'crb_products_shablon_third', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_third_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_third_price_metr', 'Цена за 1 метр2' ),
          Field::make( 'text', 'crb_product_shablon_third_price_list', 'Цена за лист' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_third',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_fourth', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_fourth_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_fourth_shirinaobsh', 'Ширина общая' ),
          Field::make( 'text', 'crb_product_shablon_fourth_shirinaplz', 'Ширина полезная' ),
          Field::make( 'text', 'crb_product_shablon_fourth_tolshina', 'Толщина, мм' ),
          Field::make( 'text', 'crb_product_shablon_fourth_zink', 'Цинк, грн/м2' ),
          Field::make( 'text', 'crb_product_shablon_fourth_poliestr', 'Полиэстер, грн/м2' ),
          Field::make( 'text', 'crb_product_shablon_fourth_matpoliestr', 'Матполиэстер, грн/м2' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_fourth',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_five', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_five_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_five_ves', 'Вес 1м/кв' ),
          Field::make( 'text', 'crb_product_shablon_five_price_tonna', 'Цена за 1 тонну' ),
          Field::make( 'select', 'crb_product_shablon_five_koef', 'Коэффициент' )->set_options( array(
              '2' => 2,
              '3.125' => 3.125,
              '9' => 9,
              '12' => 12,
          ) ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_five',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_six', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_six_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_six_weight_metr', 'Вес м/п кг' ),
          Field::make( 'text', 'crb_product_shablon_six_price_metr', 'Цена за 1м.пог' ),
          Field::make( 'text', 'crb_product_shablon_six_price_tonna', 'Цена за 1 бухту (1т)' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_six',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_seven', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_seven_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_seven_country', 'Страна-производитель' ),
          Field::make( 'text', 'crb_product_shablon_seven_garantia', 'Гарантия лет' ),
          Field::make( 'text', 'crb_product_shablon_seven_price_metr', 'Цена за м2' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_seven',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_eight', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_eight_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_eight_price', 'Цена за 1 рулон' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_eight',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_nine', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_nine_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_nine_price', 'Цена за 1 рулон' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_nine',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_ten', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_ten_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_ten_a', '86' ),
          Field::make( 'text', 'crb_product_shablon_ten_b', '96' ),
          Field::make( 'text', 'crb_product_shablon_ten_c', '125' ),
          Field::make( 'text', 'crb_product_shablon_ten_d', '156' ),
          Field::make( 'text', 'crb_product_shablon_ten_e', '178' ),
          Field::make( 'text', 'crb_product_shablon_ten_f', '208' ),
          Field::make( 'text', 'crb_product_shablon_ten_g', '250' ),
          Field::make( 'text', 'crb_product_shablon_ten_h', '312' ),
          Field::make( 'text', 'crb_product_shablon_ten_i', '416' ),
          Field::make( 'text', 'crb_product_shablon_ten_j', '625' ),
          Field::make( 'text', 'crb_product_shablon_ten_k', '1250' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_ten',
            'compare' => '=',
          ),
        ) ),
      Field::make( 'complex', 'crb_products_shablon_eleven', 'Продукты' )
        ->add_fields( array(
          Field::make( 'text', 'crb_product_shablon_eleven_title', 'Наименование' ),
          Field::make( 'text', 'crb_product_shablon_eleven_qty', 'Кол-во м/кг' ),
          Field::make( 'text', 'crb_product_shablon_eleven_price', 'Цена,  грн/кг' ),
          Field::make( 'text', 'crb_product_shablon_eleven_notice', 'Примечание' ),
      ) )->set_conditional_logic( array(
        'relation' => 'AND',
          array(
            'field' => 'crb_products_shablon',
            'value' => 'shablon_eleven',
            'compare' => '=',
          ),
        ) ),
  ) );
}

?>