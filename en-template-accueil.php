<?php
/*
 * Template Name: EN Page Accueil
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
	<!-- /.bandeau-encart -->

	<div class="home-teasing">
		<h2><?php the_field('teaser'); ?></h2>
	</div>
	<!-- /.home-teasing -->

<?php endwhile; ?>

	<div class="home-prestations">

		<?php
			$args = array(
				'post_type'			=> 'prestations',
				'posts_per_page' 	=> -1,
				'orderby'			=> 'date',
				'order'				=> 'ASC',
				'tax_query'			=> array(
					array(
						'taxonomy' => 'emplacement',            
						'field' => 'slug',                
						'terms' => array( 'accueil-anglais'),  
					),
				)
			);

			$prestations = new WP_Query($args);
			while($prestations->have_posts()): $prestations->the_post();
		?>

		<div class="home-prestations-encart">

			<div class="home-prestations-encart-img">
				<?php 
					$illustration_id = get_field('illustration');
					$size = "prestation"; 
					$illustration = wp_get_attachment_image_src( $illustration_id, $size );

				?>
				<img class="d-block w-100" alt="" src="<?php echo $illustration[0]; ?>" />
				<div class="shadow"></div>
			</div>
			<!-- /.home-prestation-encart-img -->
			<div class="home-prestations-encart-texte">
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
			</div>
			<!-- /.home-prestations-encart-texte -->
			<div class="home-prestations-encart-btn">
				<a href="<?php the_field('lien_du_bouton'); ?>"><?php the_field('texte_bouton'); ?></a>
			</div>
			<!-- /.home-prestations-encart-btn -->		

		</div>
		<!-- /.home-prestations-encart -->

		<?php endwhile; wp_reset_postdata(); ?>


	</div>
	<!-- /.home-prestations -->

	<div class="home-texte">
		<?php while(have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>
	<!-- /.home-texte -->

</div>
<!-- /.container -->



<?php get_footer('en'); ?>