<div class="whyus">
	<div class="container">
		<div class="row">			
			<div class="col-md-6">
				<div class="whyus__title mb-5">
					<span>Почему</span><br>
					выбирают нас
				</div>
				<div class="whyus__description mb-5">
					Наши преимущества перед конкурентами
				</div>
			</div>
			<div class="col-md-6">
				<div class="whyus__sale">
					<div class="whyus__sale-title mb-4">
						Выгодное предложение!
					</div>
					<div class="whyus__sale-text mb-4">
						Специально для посетителей нашего сайта - мы подготовили отличную скидку. Бесплатная доставка по городу при заказе от 29 900 грн.
					</div>
					<div class="whyus__sale-button">
						<div class="welcome__item-button callback">
							напишите нам
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-4">
			<?php 
      $args_main_page = [
          'post_type' => 'page',
          'fields' => 'ids',
          'nopaging' => true,
          'meta_key' => '_wp_page_template',
          'meta_value' => 'tpl_main.php'
      ];
      $main_pages = get_posts( $args_main_page );
      foreach ( $main_pages as $main_page ): ?>
				<?php $whyus = carbon_get_post_meta($main_page, 'crb_whyus');
				foreach($whyus as $us): ?>
				<div class="col-md-4 mb-3">
					<div class="whyus__item">
						<div class="whyus__item-icon">
							<img src="<?php echo $us['crb_whyus_icon'] ?>" alt="">
						</div>
						<div class="whyus__item-text">
							<?php echo $us['crb_whyus_text'] ?>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			<?php endforeach; ?>
		</div>
	</div>
</div>