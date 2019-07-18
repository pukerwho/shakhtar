    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="footer__item">
    					<div class="footer__item-title mb-4">
    						Наши контакты
    					</div>
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
    					<div class="footer__item-text">
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="25px">
    							</div>
    							<div>
                    <?php
                    $contact_phones = carbon_get_post_meta($contact_page, 'crb_contact_phones' );
                    foreach ( $contact_phones  as $contact_phone ): ?>
                        <div>
                      <a href="tel:<?php echo $contact_phone['crb_contact_phone'] ?>"><?php echo $contact_phone['crb_contact_phone'] ?></a>
                      </div>
                    <?php endforeach; ?>
    							</div>
    						</div>
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="25px">
    							</div>
    							<div>
                    <?php
                    $contact_emails = carbon_get_post_meta($contact_page, 'crb_contact_emails' );
                    foreach ( $contact_emails  as $contact_email ): ?>
                      <div>
                        <a href="mailto:<?php echo $contact_email['crb_contact_email'] ?>"><?php echo $contact_email['crb_contact_email'] ?></a>
                      </div>
                    <?php endforeach; ?>
    							</div>
    						</div>
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/time.svg" alt="" width="25px">
    							</div>
    							<div>
    								<div>
    									<?php echo carbon_get_post_meta($contact_page, 'crb_contact_time') ?>
    								</div>
    							</div>
    						</div>
                <div class="footer__item-contact">
                  <a href="<?php echo carbon_get_post_meta($contact_page, 'crb_contact_viber') ?>" target="_blank" class="mr-3">
                    <img src="<?php bloginfo('template_url') ?>/img/viber.svg" alt="">
                  </a>
                  <a href="<?php echo carbon_get_post_meta($contact_page, 'crb_contact_telegram') ?>" target="_blank">
                    <img src="<?php bloginfo('template_url') ?>/img/telegram.svg" alt="">
                  </a>
                </div>
    					</div>
              <?php endforeach; ?>
    				</div>
    			</div>
    			<div class="col-md-5">
    				<div class="footer__item">
    					<div class="footer__item-title mb-4">
		    				Каталог продукции
		    			</div>
		    			<div class="footer__item-text">
		    				<div class="footer__item-catalog">
			    				<?php wp_nav_menu([
	                  'theme_location' => 'footer_catalog_menu',
	                  'container' => 'nav',
	                  'menu_id' => 'footer_catalog_menu',
	                ]); ?>
                </div>
		    			</div>
		    		</div>
    			</div>
    			<div class="col-md-3">
    				<div class="footer__item">
    					<div class="footer__item-title mb-4">
		    				Навигация
		    			</div>
		    			<div class="footer__item-text">
		    				<?php wp_nav_menu([
                  'theme_location' => 'footer_menu',
                  'container' => 'nav',
                  'menu_id' => 'footer_menu',
                ]); ?>
		    			</div>
		    		</div>
    			</div>
    		</div>
    	</div>
    </footer>
    <div class="callback__modal">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callback__box">
              <div class="callback__close">
                <img src="<?php bloginfo('template_url') ?>/img/close.svg" alt="" width="20px">
              </div>
              <div class="callback__title">
                Оставить заявку
              </div>
              <div class="callback__line"></div>
              <div class="callback__form">
                <?php echo do_shortcode('[contact-form-7 id="212" title="Заказать"]') ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal__bg"></div>
    <?php wp_footer(); ?>
</body>
</html>