<?php get_header(); ?>

	<title>H'Omaha Nature</title>
	
<?php get_template_part('header2'); ?>

<div class="bandeau">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/bandeau.jpg" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/bandeau.jpg" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/bandeau.jpg" alt="Third slide">
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
		<h1>Location de gîte et activités de loisir à Omaha Beach en Normandie</h1>
	</div>
	<!-- /.bandeau-encart -->

	<div class="home-teasing">
		<h2>Libérez votre esprit le temps d'un séjour dans notre gîte en bord de mer et oxygénez-vous avec nos différentes activités</h2>
	</div>
	<!-- /.home-teasing -->

	<div class="home-prestations">

		<div class="home-prestations-encart">
			<div class="home-prestations-encart-img">
				<img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/activite-01.jpg" alt="">
				<div class="shadow"></div>
			</div>
			<!-- /.home-prestation-encart-img -->
			<div class="home-prestations-encart-texte">
				<h3>Gîte Rural</h3>
				<p>Ressourcez-vous dans notre gîte entièrement équipé, accueillant 5 à 8 personnes, idéal, pour les séjours en famille ou entre amis.</p>
			</div>
			<!-- /.home-prestations-encart-texte -->
			<div class="home-prestations-encart-btn">
				<a href="">Découvrir le gîte</a>
			</div>
			<!-- /.home-prestations-encart-btn -->

		</div>
		<!-- /.home-prestations-encart -->


		<div class="home-prestations-encart">
			<div class="home-prestations-encart-img">
				<img class="d-block w-100" src="<?php bloginfo('template_url'); ?>/img/activite-02.jpg" alt="">
				<div class="shadow"></div>
			</div>
			<!-- /.home-prestation-encart-img -->
			<div class="home-prestations-encart-texte">
				<h3>Activités sportives et de nature</h3>
				<p>Au départ du gîte, nous vous proposons plusieurs activités : marche nordique, randonnée, longe côte, land art...</p>
			</div>
			<!-- /.home-prestations-encart-texte -->
			<div class="home-prestations-encart-btn">
				<a href="">Découvrir nos activités</a>
			</div>
			<!-- /.home-prestations-encart-btn -->
		</div>
		<!-- /.home-prestations-encart -->

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


<div class="footer-quote">
	<div class="container">
		<p>"Citation inspirante ou témoignage d'un client ici"</p>
		<p class="auteur">Nom Prénom</p>
	</div>
	<!-- /.container -->
</div>
<!-- /.footer-quote -->


<?php get_footer(); ?>