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
					<p>75, route d'Omaha Beach<br />
					14520 Sainte-Honorine-des-Pertes</p>
					<p>06 21 31 50 79</p>
					<p><a href="mailto:anneingridlg@gmail.com">anneingridlg@gmail.com</a></p>
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