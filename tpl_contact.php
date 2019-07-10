<?php
/*
Template Name: Страница КОНТАКТЫ
*/
?>

<?php get_header(); ?>

<div class="single__hero mb-5" style="background: url('<?php echo get_the_post_thumbnail_url(); ?>');background-size: cover; -webkit-background-size: cover; background-position: top;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="single__hero-title">
					<h1><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-7">
			<h2>
				Напишите нам
			</h2>
			<p class="mb-5">
				Быстрая форма обратной связи
			</p>
			<div class="contact__form">
				<?php echo do_shortcode('[contact-form-7 id="29" title="Контакты"]') ?>
			</div>
		</div>
		<div class="col-md-5">
			<h2>
				Связаться с нами
			</h2>
			<p class="mb-5">Удобным для вас способом</p>
			<div class="contact__item">
				<div class="contact__item-img">
					<img src="<?php bloginfo('template_url') ?>/img/phone.svg" alt="" width="30px">
				</div>
				<div class="contact__item-content">
					<div class="contact__item-title">
						Позвонить
					</div>
					<div class="contact__item-text">
						<?php $contact_phones = carbon_get_the_post_meta('crb_contact_phones');
						foreach($contact_phones as $contact_phone): ?>
							<div>
								<a href="tel:<?php echo $contact_phone['crb_contact_phone'] ?>">
									<?php echo $contact_phone['crb_contact_phone'] ?>
								</a>
							</div>
            <?php endforeach; ?>
					</div>
				</div>
			</div>
			<div class="contact__item">
				<div class="contact__item-img">
					<img src="<?php bloginfo('template_url') ?>/img/email.svg" alt="" width="30px">
				</div>
				<div class="contact__item-content">
					<div class="contact__item-title">
						Написать
					</div>
					<?php $contact_emails = carbon_get_the_post_meta('crb_contact_emails');
					foreach($contact_emails as $contact_email): ?>
						<div class="contact__item-text">
							<a href="mailto:<?php echo $contact_email['crb_contact_email'] ?>"><?php echo $contact_email['crb_contact_email'] ?></a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="contact__item">
				<div class="contact__item-img">
					<img src="<?php bloginfo('template_url') ?>/img/time.svg" alt="" width="30px">
				</div>
				<div class="contact__item-content">
					<div class="contact__item-title">
						Время работы
					</div>
					<div class="contact__item-text">
						<?php echo carbon_get_the_post_meta('crb_contact_time') ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>