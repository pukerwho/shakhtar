<div class="welcome">
	<div class="swiper-container swiper-welcome-container">
		<div class="swiper-wrapper">
			<?php 
			$welcome_sliders = carbon_get_the_post_meta('crb_main_sliders');
			foreach( $welcome_sliders as $welcome_slider ): ?>
			<div class="swiper-slide">
				<div class="welcome__item welcome__item-<?php echo $welcome_slider['crb_main_slider_position'] ?>" style="background: url(<?php echo $welcome_slider['crb_main_slider_img'] ?>); -webkit-background-size: cover; background-size: cover; background-position: top; ">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="welcome__item-title">
									<?php echo $welcome_slider['crb_main_slider_title'] ?>
								</div>
								<div class="welcome__item-subtitle">
									<?php echo $welcome_slider['crb_main_slider_subtitle'] ?>
								</div>
								<div class="welcome__item-buttons">
									<div class="welcome__item-button">
										<a href="<?php echo $welcome_slider['crb_main_slider_link'] ?>">
											Подробнее
										</a>
									</div>
									<div class="welcome__item-button">
										Связаться с нами
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
			<div class="swiper-button-next swiper-welcome-next"></div>
			<div class="swiper-button-prev swiper-welcome-prev"></div>
		</div>
	</div>
</div>