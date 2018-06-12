<?php
	function hom_customize_register_footer($wp_customize){


		/*
		***********************************************
			SECTION FOOTER 1
		***********************************************
		*/
		$wp_customize->add_section('footer1', array(
			'title'			=> __('Pied de page', 'homahanature'),
			'description'	=> sprintf(__('Coordonnées de contact', 'homahanature')),
			'priority'		=> 1
		));


    	// ADRESSE
		$wp_customize->add_setting('footer1_adresse', array(
			'default' 		=> _x('75, route d\'Omaha Beach<br />14520 Sainte-Honorine-des-Pertes','homahanature'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_adresse', array(
			'label' 		=> __('Adresse', 'homahanature'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 1
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_adresse', array(
	        'selector' => '#footer1-adresse',
    	) );


    	// TELEPHONE
		$wp_customize->add_setting('footer1_tel', array(
			'default' 		=> _x('06 21 31 50 79','homahanature'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_tel', array(
			'label' 		=> __('Telephone', 'homahanature'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 2
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_tel', array(
	        'selector' => '#footer1-tel',
    	) );


    	// EMAIL
		$wp_customize->add_setting('footer1_email', array(
			'default' 		=> _x('anneingridlg@gmail.com','homahanature'),
			'type' 		 	=> 'theme_mod'
		));

		$wp_customize->add_control('footer1_email', array(
			'label' 		=> __('E-mail', 'homahanature'),
			'section' 		=> 'footer1',
			'type' 			=> 'text',
			'priority' 		=> 3
		));

		$wp_customize->selective_refresh->add_partial( 'footer1_email', array(
	        'selector' => '#footer1-email',
    	) );

		// LOGO
    	$wp_customize->add_setting('footer1_logo', array(
		'default' 	 => get_bloginfo('template_directory').'/img/logo-blanc.png',
		'type' 		 => 'theme_mod'
		));

		$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer1_logo', array(
			'label' => __('Logo', 'homahanature'),
			'section' => 'footer1',
			'settings' => 'footer1_logo',
			'priority' => 4
		)));

		$wp_customize->selective_refresh->add_partial( 'footer1_logo', array(
	        'selector' => '#footer1-logo',
    	) );

	}
	add_action('customize_register', 'hom_customize_register_footer');
	