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
                  <?php 
                  $args_contact_page = [
                      'post_type' => 'page',
                      'fields' => 'ids',
                      'nopaging' => true,
                      'meta_key' => '_wp_page_template',
                      'meta_value' => 'tpl_contact.php'
                  ];
                  $contact_pages = get_posts( $args_contact_page );
                  foreach ( $contact_pages as $contact_page ): ?>
                  <li class="header__phones">
                    <img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="15px">
                    <?php
                    $contact_phones = carbon_get_post_meta($contact_page, 'crb_contact_phones' );
                    foreach ( $contact_phones  as $contact_phone ): ?>
                      <a href="tel:<?php echo $contact_phone['crb_contact_phone'] ?>"><?php echo $contact_phone['crb_contact_phone'] ?></a>
                    <?php endforeach; ?>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="15px">
                    <?php
                    $contact_emails = carbon_get_post_meta($contact_page, 'crb_contact_emails' );
                    foreach ( $contact_emails  as $contact_email ): ?>
                      <a href="mailto:<?php echo $contact_email['crb_contact_email'] ?>"><?php echo $contact_email['crb_contact_email'] ?></a>
                    <?php endforeach; ?>
                  </li>
                  <li>
                    <img src="<?php bloginfo('template_url') ?>/img/time.svg" alt="" width="15px">
                    <?php echo carbon_get_post_meta($contact_page, 'crb_contact_time') ?>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
              <div class="header__top-right">
                <a href="<?php echo carbon_get_post_meta($contact_page, 'crb_contact_viber') ?>" target="_blank" class="mr-3">
                  <img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="">
                </a>
                <a href="<?php echo carbon_get_post_meta($contact_page, 'crb_contact_telegram') ?>" target="_blank">
                  <img src="<?php bloginfo('template_url') ?>/img/telegram.svg" alt="">
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
              <a href="<?php echo home_url(); ?>">
                <div class="header__logo">
                  <img src="<?php bloginfo('template_url') ?>/img/logo.svg" alt="" width="50px">
                  LOGO
                </div>
              </a>
              <div class="header__menu">
                <?php wp_nav_menu([
                  'theme_location' => 'head_menu',
                  'container' => 'nav',
                  'menu_id' => 'head_menu',
                ]); ?>
              </div>
              <div class="mobile-show">
                <div class="mobile-menu">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="mobile-show">
    <div class="mobile-cover">
      <?php wp_nav_menu([
        'theme_location' => 'footer_menu',
        'container' => 'nav',
        'menu_id' => 'footer_menu',
      ]); ?> 
    </div>
  </div>
  <section id="content" role="main">