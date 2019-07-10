<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_page_theme_options' );
function crb_page_theme_options() {
  Container::make( 'post_meta', 'More' )
    ->where( 'post_type', '=', 'page' )
    ->where( 'post_template', '=', 'tpl_main.php' )
    ->add_fields( array(
    	Field::make( 'complex', 'crb_main_sliders', 'Главный слайдер' )
		    	->add_fields( array(
            Field::make( 'image', 'crb_main_slider_img', 'Картинка' )->set_value_type( 'url'),
		        Field::make( 'text', 'crb_main_slider_title', 'Заголовок' ),
            Field::make( 'text', 'crb_main_slider_subtitle', 'Подзаголовок' ),
            Field::make( 'text', 'crb_main_slider_link', 'Кнопка подробнее (Ссылка)' ),
		    ) ),
      Field::make( 'select', 'crb_main_slider_position', 'Расположение' )
        ->set_options( array(
          'center' => 'Центр',
          'left' => 'Лево',
          'right' => 'Право',
        ) ),
    ) );
}

?>