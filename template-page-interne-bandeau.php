<?php
/*
 * Template Name: Page Interne avec Bandeau
 */
?>

<?php get_header(); ?>
	
	<?php while(have_posts()): the_post(); ?>

		<title><?php the_field('titre_seo'); ?></title>
		<meta name="description" content="<?php the_field('description_seo'); ?><" />

	<?php endwhile; ?>
	
<?php get_template_part('header2'); ?>


<?php while(have_posts()): the_post(); ?>

<div class="bandeau">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<?php 
					$bandeau1_id = get_field('bandeau1');
					$size = "panoramique"; 
					$image1 = wp_get_attachment_image_src( $bandeau1_id, $size );

				?>
				<img class="d-block w-100" alt="" src="<?php echo $image1[0]; ?>" />

			</div>

			<div class="carousel-item">
				<?php 
					$bandeau2_id = get_field('bandeau2');
					$size = "panoramique"; 
					$image2 = wp_get_attachment_image_src( $bandeau2_id, $size );

				?>
				<img class="d-block w-100" alt="" src="<?php echo $image2[0]; ?>" />
			</div>

			<div class="carousel-item">
				<?php 
					$bandeau3_id = get_field('bandeau3');
					$size = "panoramique"; 
					$image3 = wp_get_attachment_image_src( $bandeau3_id, $size );

				?>
				<img class="d-block w-100" alt="" src="<?php echo $image3[0]; ?>" />
			</div>
		</div>

		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="triangle"></div>
	<!-- /.triangle -->
</div>
<!-- /.bandeau -->	

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



<div class="footer-quote">
	<div class="container">
		<p>"Citation inspirante ou témoignage d'un client ici"</p>
		<p class="auteur">Nom Prénom</p>
	</div>
	<!-- /.container -->
</div>
<!-- /.footer-quote -->


<?php get_footer(); ?>