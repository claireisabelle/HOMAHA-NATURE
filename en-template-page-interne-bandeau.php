<?php
/*
 * Template Name: EN Page Interne avec Bandeau
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

		<div class="page-interne">
			<?php the_content(); ?>
		</div>
		<!-- /.page-interne -->
	</div>
	<!-- /.container -->

<?php endwhile; ?>



<?php get_footer('en'); ?>