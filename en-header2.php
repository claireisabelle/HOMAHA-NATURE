<?php wp_head();  ?>
</head>

<body>

<header>
	<div class="header-top">
		<div class="container">
			<nav class="header-top-menu">
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'header-en',
						'depth'             => 1
					) );
				?>
			</nav>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.header-top -->

	<div class="header-logo">
		<a href="<?php echo get_option('home'); ?>">H'OMAHA <span class="logo-part2">NATURE</span></a>
	</div>
	<!-- /.header-logo -->

	<div class="header-menu">

		<nav class="navbar navbar-expand-lg navbar-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary-en',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'navbarSupportedContent',
					'menu_class'        => 'navbar-nav',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>

		</nav>

	</div>
	<!-- /.header-menu -->

</header>