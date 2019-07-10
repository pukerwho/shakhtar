<!doctype html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <base href="/">
  <link rel="alternate" hreflang="x-default" href="<?php echo home_url(); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo home_url(); ?>/en">
  <link rel="alternate" hreflang="ru" href="<?php echo home_url(); ?>/ru">
  <link rel="alternate" hreflang="ua" href="<?php echo home_url(); ?>/ua">
  <?php
  // ENQUEUE your css and js in inc/enqueues.php

    wp_head();
	?>
</head>
<body <?php echo body_class(); ?>>
  <!-- <div class="preloader"></div> -->
  
  <header id="header" class="header" role="banner">
    <div class="header__top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header__top-content">
              <div class="header__top-left">
                <ul>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="15px">
                    <a href="tel:0999999911">099-999-9911</a> ;
                    <a href="tel:0999999911">099-999-9911</a>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="15px">
                    <a href="mailto:mail@site.com">mail@site.com</a>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/img/time.svg" alt="" width="15px">
                    Пн-Пт: 09.00 - 19.00
                  </li>
                </ul>
              </div>
              <div class="header__top-right">
                <a href="#" class="mr-3">
                  <img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="">
                </a>
                <a href="#">
                  <img src="<?php bloginfo('template_url') ?>/img/whatsapp.svg" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="header__main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="header__main-content">
              <div class="header__logo">
                <img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="" width="50px">
                LOGO
              </div>
              <div class="header__menu">
                <?php wp_nav_menu([
                  'theme_location' => 'head_menu',
                  'container' => 'nav',
                  'menu_id' => 'head_menu',
                ]); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <section id="content" role="main">