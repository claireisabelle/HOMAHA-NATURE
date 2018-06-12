<footer>
	<div class="footer-01">
		<div class="container">
			<div class="footer-01-content">
				<div class="footer-01-content-menu">
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'footer1',
							'depth'             => 1
						) );
					?>
				</div>
				<!-- /.footer-01-content-menu -->
				<div class="footer-01-content-coordonnees">
					<p id="footer1-logo"><img src="<?php echo get_theme_mod('footer1_logo', get_bloginfo('template_url').'/img/logo-blanc.png'); ?>" alt="H'Omaha Nature - Location de gîte en Normandie, à Omaha Beach"></p>
					<p id="footer1-adresse"><?php echo get_theme_mod('footer1_adresse', '75; route d\'Omaha Beach<br />14520 Sainte-Honorine-des-Pertes'); ?></p>
					<p id="footer1-tel"><?php echo get_theme_mod('footer1_tel', '06 21 31 50 79'); ?></p>
					<p id="footer1-email"><a href="mailto:<?php echo get_theme_mod('footer1_email', 'anneingridlg@gmail.com'); ?>"><?php echo get_theme_mod('footer1_email', 'anneingridlg@gmail.com'); ?></a></p>
				</div>
				<!-- /.footer-01-content-coordonnees -->
			</div>
			<!-- /.footer-01-content -->
		</div>
		<!-- /.container -->
	</div>
	<!-- /.footer-01 -->

	<div class="footer-02">
		<div class="container">
			<?php
				wp_nav_menu( array(
					'theme_location'    => 'footer2',
					'depth'             => 1
				) );
			?>
		</div>
		<!-- /.container -->
	</div>
	<!-- /.footer-02 -->

</footer>




	
<?php wp_footer(); ?>	
</body>
</html>