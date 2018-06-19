<?php
/*
 * Template Name: EN Page Gîte
 */
?>

<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>

		<title><?php the_field('titre_seo'); ?></title>
		<meta name="description" content="<?php the_field('description_seo'); ?><" />

	<?php endwhile; ?>
	
<?php get_template_part('en-header2'); ?>


<?php while(have_posts()): the_post(); ?>

<?php get_template_part('inc-caroussel'); ?>


	<div class="container">
		<div class="bandeau-encart">
			<h1><?php the_field('titre'); ?></h1>
		</div>

		<div class="gite-infos-cles">
			<div class="info-cle">
				<i class="fa fa-users" aria-hidden="true"></i> <?php the_field('capacite'); ?>
			</div>
			<!-- /.info-cle -->

			<div class="info-cle">
				<i class="fa fa-eur" aria-hidden="true"></i> <?php the_field('tarif'); ?>
			</div>
			<!-- /.info-cle -->

			<div class="info-cle">
				<a href="<?php the_field('url_reservation'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_field('lien_reservation'); ?></a>
			</div>
			<!-- /.info-cle -->
		</div>
		<!-- /.gite-infos-cles -->

		<div class="page-interne">
			<?php the_content(); ?>
		</div>
		<!-- /.page-interne -->

		<div class="reservation">
			<a href="<?php the_field('url_reservation'); ?>"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_field('lien_reservation'); ?></a>
		</div>
		<!-- /.reservation -->
	</div>
	<!-- /.container -->

<?php endwhile; ?>



<?php get_footer('en'); ?>