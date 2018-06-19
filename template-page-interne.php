<?php
/*
 * Template Name: Page Interne 
 */
?>

<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>

		<title><?php the_field('titre_seo'); ?></title>
		<meta name="description" content="<?php the_field('description_seo'); ?><" />

	<?php endwhile; ?>
	
<?php get_template_part('header2'); ?>


<?php while(have_posts()): the_post(); ?>

	<div class="container">
		<div class="bandeau-encart-interne">
			<h1><?php the_field('titre'); ?></h1>
		</div>

		<div class="page-interne">
			<?php the_content(); ?>
		</div>
		<!-- /.page-interne -->
	</div>
	<!-- /.container -->

<?php endwhile; ?>


<?php get_footer(); ?>