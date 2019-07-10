<?php
/*
Template Name: Страница КАТАЛОГ
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
		<?php $cats = get_terms( array( 'taxonomy' => 'cats', 'parent' => 0, 'hide_empty' => false ) );
		foreach ( $cats as $cat ): ?>
		<div class="col-md-4 mb-5">
  		<a href="<?php echo home_url(); ?>/cats/<?php echo $cat->slug ?>">
		  	<div class="tax__box">
		  		<div class="tax__box-img">
		  			<img src="<?php echo carbon_get_term_meta($cat->term_id, 'crb_cats_img') ?>" alt="">
		  		</div>
		  		<div class="tax__box-title">
		  			<?php echo $cat->name ?>
		  		</div>
		  	</div>	
	  	</a>
  	</div>
  	<?php endforeach; ?>
	</div>
</div>

<?php get_footer(); ?>