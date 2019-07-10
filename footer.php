    </section>
    <footer id="footer" class="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4">
    				<div class="footer__item">
    					<div class="footer__item-title mb-4">
    						Наши контакты
    					</div>
    					<div class="footer__item-text">
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="25px">
    							</div>
    							<div>
    								<div>
    									<a href="tel:0999999911">099-999-9911</a>	
    								</div>
    								<div>
    									<a href="tel:0999999911">099-999-9911</a>	
    								</div>
    							</div>
    						</div>
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="25px">
    							</div>
    							<div>
    								<div>
    									<a href="mailto:mail@site.com">mail@site.com</a>
    								</div>
    							</div>
    						</div>
    						<div class="footer__item-contact mb-4">
    							<div class="mr-3">
    								<img src="<?php bloginfo('template_url') ?>/img/time.svg" alt="" width="25px">
    							</div>
    							<div>
    								<div>
    									Пн-Пт: 09.00 - 19.00
    								</div>
    							</div>
    						</div>
                            <div class="footer__item-contact">
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
    <?php wp_footer(); ?>
</body>
</html>