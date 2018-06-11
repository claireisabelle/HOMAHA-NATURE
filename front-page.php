<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>H'Omaha Nature</title>
<?php wp_head();  ?>
</head>

<body>

<header>
	<div class="header-top">
		<div class="container">
			<nav class="header-top-menu">
				<ul>
					<li><a href="">English</a></li>
					<li>|</li>
					<li><a href="">Qui sommes-nous ?</a></li>
					<li><a href="">Avis</a></li>
					<li><a href="">Contact</a></li>

				</ul>
			</nav>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->

	<div class="header-logo">
		H'OMAHA <span class="logo-part2">NATURE</span>
	</div>
	<!-- /.header-logo -->

	<div class="header-menu">

		<nav class="navbar navbar-expand-lg navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbarSupportedContent',
					'menu_class'        => 'navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>

<!-- 			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav">
					<li>
						<a class="nav-link" href="#">Gîte</a>
					</li>
					<li>
						<a class="nav-link" href="#">Activités</a>
					</li>
					<li>
						<a class="nav-link" href="#">A Proximité</a>
					</li>
					<li>
						<a class="nav-link" href="#">Tarifs</a>
					</li>
					<li>
						<a class="nav-link" href="#">Réservations</a>
					</li>

				</ul>
			</div> -->
		</nav>

	</div>
	<!-- /.header-menu -->

</header>

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
</div>
<!-- /.container -->




	
<?php wp_footer(); ?>	
</body>
</html>