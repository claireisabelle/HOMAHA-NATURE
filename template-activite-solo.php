<?php
/*
 * Template Name: Page Activité Détaillée
 */
?>

<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>

		<title><?php the_field('titre_seo'); ?></title>
		<meta name="description" content="<?php the_field('description_seo'); ?><" />

	<?php endwhile; ?>
	
<?php get_template_part('header2'); ?>


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

		<div class="page-activite-deroulement">
			<div class="page-activite-deroulement-texte">
				<?php the_field('deroulement_texte'); ?>
			</div>
			<!-- /.page-activite-deroulement-texte -->
			
			<div class="page-activite-deroulement-image">
				<?php 
					$deroulement_image_id = get_field('deroulement_image');
					$size = "carre-250"; 
					$deroulement_image = wp_get_attachment_image_src( $deroulement_image_id, $size );

				?>
				<img alt="" src="<?php echo $deroulement_image[0]; ?>" />
			</div>
			<!-- /.page-activite-deroulement-image -->

		</div>
		<!-- /.page-activite-deroulement -->

	</div>
	<!-- /.container -->

<?php endwhile; ?>


<?php get_footer(); ?>