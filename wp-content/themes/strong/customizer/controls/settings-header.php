<?php
//----------------------Header LAYOUT SECTION----------------------------------

// Add the heder layout setting.
$wp_customize->add_setting('complete[header_layout_id]', array(
		'type' => 'option',
		'default'           => 'header_layout1',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('header_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Header Layout *', 'strong' ),
			'section'  => 'headlayout_section',
			'settings' => 'complete[header_layout_id]',
			'choices'  => array(
				'header_layout1' => __('Header Layout 1', 'strong'), 
				'header_layout2' => __('Header Layout 2', 'strong'),
				'header_layout3' => __('Header Layout 3', 'strong'),
		  )
  ) );
 
//============================HEADER - LOGO SECTION=================================


// Site Title Font Family
$wp_customize->add_setting( 'complete[logo_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Open Sans',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'headlogo_section',
					'settings' => 'complete[logo_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Site Title Font Subsets
$wp_customize->add_setting( 'complete[logo_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'headlogo_section',
					'settings' => 'complete[logo_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );


//Site Title Font Size
$wp_customize->add_setting('complete[logo_font_id][font-size]', array(
	'type' => 'option',
	'default' => '36px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_font_size', array(
				'type' => 'text',
				'label' => __('Site Title Font Size','strong'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

//Site Title Text Color
$wp_customize->add_setting( 'complete[logo_color_id]', array(
	'type' => 'option',
	'default' => '#555555',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'logo_color_id', array(
				'label' => __('Site Title Color','strong'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_color_id]',
			) ) );

//LOGO UPLOAD FIELD
$wp_customize->add_setting( 'complete[logo_image_id][url]',array( 
	'type' => 'option',
	'default' => ''. get_template_directory_uri().'/assets/images/logo.png',
	'sanitize_callback' => 'esc_url_raw',
	)
);

			$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo_image_id',array(
					'label'       => __( 'Logo Image *', 'strong' ),
					'section'     => 'headlogo_section',
					'settings'    => 'complete[logo_image_id][url]',
					//'description' => __('This image will replace the text logo.','strong'),
						)
					)
			);
			
// Logo Image Height
$wp_customize->add_setting('complete[logo_image_height]', array(
	'type' => 'option',
	'default' => '26px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_image_height', array(
				'type' => 'text',
				'label' => __('Image Height','strong'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_image_height]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
			
// Logo Image Width
$wp_customize->add_setting('complete[logo_image_width]', array(
	'type' => 'option',
	'default' => '155px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_image_width', array(
				'type' => 'text',
				'label' => __('Image Width','strong'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_image_width]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );	
			
// Logo Margin Top
$wp_customize->add_setting('complete[logo_margin_top]', array(
	'type' => 'option',
	'default' => '20px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('logo_margin_top', array(
				'type' => 'text',
				'label' => __('Logo Margin Top','strong'),
				'section' => 'headlogo_section',
				'settings' => 'complete[logo_margin_top]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );							
//============================ TOP BAR TEXT SECTION=================================
		
//Topbar Right Area 1
$wp_customize->add_setting('complete[sintp_text]', array(
	'type' => 'option',
	'default' => __('[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]	
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
[/social_area]','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'sintp_text', array( 
				'type' => 'textarea',
				'label' => __('Header Social Area','strong'), 
				'section' => 'headheader_section',
				'settings' => 'complete[sintp_text]',
			)) );	

//Topbar Right Area 2
$wp_customize->add_setting('complete[suptp_text]', array(
	'type' => 'option',
	'default' => __('<i class="fa fa-phone fa-2x"></i> 855-321-9876','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'suptp_text', array( 
				'type' => 'textarea',
				'label' => __('Phone Number','strong'), 
				'section' => 'headheader_section',
				'settings' => 'complete[suptp_text]',
			)) );
			
//Email Text
$wp_customize->add_setting('complete[emltp_text]', array(
	'type' => 'option',
	'default' => __('<a href="mailto:info@demolink.org">info@demolink.org </a>','complete'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'emltp_text', array( 
				'type' => 'textarea',
				'label' => __('Email Address','complete'),
				'section' => 'headheader_section',
				'settings' => 'complete[emltp_text]',
			)) );			


//============================HEADER - TOP BAR SECTION=============================				

// Top Bar Text Font Family
$wp_customize->add_setting( 'complete[tpbt_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('tpbt_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'headheader_section',
					'settings' => 'complete[tpbt_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Top Bar Text Font Subsets
$wp_customize->add_setting( 'complete[tpbt_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('tpbt_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'headheader_section',
					'settings' => 'complete[tpbt_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Top Bar Text Font Size
$wp_customize->add_setting('complete[tpbt_font_id][font-size]', array(
	'type' => 'option',
	'default' => '20px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('tpbt_font_size', array(
				'type' => 'text',
				'label' => __('Phone Number Font Size','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[tpbt_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

// Top Bar Text Color
$wp_customize->add_setting( 'complete[tpbt_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tpbt_color_id', array(
				'label' => __('Phone Number Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[tpbt_color_id]',
			) ) );
			
// Top Bar Email Color
$wp_customize->add_setting( 'complete[tpemail_color_id]', array(
	'type' => 'option',
	'default' => '#5b5a5a',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tpemail_color_id', array(
				'label' => __('Email Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[tpemail_color_id]',
			) ) );			
			
			
// Top Bar Text Hoover Color
/*$wp_customize->add_setting( 'complete[tpbt_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#edecec',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'tpbt_hvcolor_id', array(
				'label' => __('Top Bar Hover Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[tpbt_hvcolor_id]',
			) ) );	*/					

//HEADER BACKGROUND COLOR
$wp_customize->add_setting( 'complete[head_color_id]', array(
	'type' => 'option',
	'default' => '#f7f7f7',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'head_color_id', array(
				'label' => __('Header Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[head_color_id]',
			) ) );
			
			
//  Header Background Image
	$wp_customize->add_setting( 'complete[head_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'head_bg_image',array(
			'label'       => __( 'Header Background Image', 'strong' ),
			'section'     => 'headheader_section',
			'settings'    => 'complete[head_bg_image]'
				)
			)
	);			
			
			
//HEAD INFO BACKGROUND COLOR
/*$wp_customize->add_setting( 'complete[head_info_color_id]', array(
	'type' => 'option',
	'default' => '#383939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'head_info_color_id', array(
				'label' => __('Head Top Bar Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[head_info_color_id]',
			) ) );*/
			
//============================HEADER - MENU SECTION================================


//MENU TEXT COLOR
$wp_customize->add_setting( 'complete[menutxt_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menutxt_color_id', array(
				'label' => __('Menu Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menutxt_color_id]',
			) ) );

//MENU HOVER TEXT COLOR
$wp_customize->add_setting( 'complete[menutxt_color_hover]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menutxt_color_hover', array(
				'label' => __('Menu Hover Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menutxt_color_hover]',
			) ) );

//MENU ACTIVE TEXT COLOR
$wp_customize->add_setting( 'complete[menutxt_color_active]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menutxt_color_active', array(
				'label' => __('Menu Active Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menutxt_color_active]',
			) ) );
			
//MENU TOP BORDER COLOR
$wp_customize->add_setting( 'complete[menu_border_top]', array(
	'type' => 'option',
	'default' => '#f1f2f3',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_border_top', array(
				'label' => __('Menu Top Border Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menu_border_top]',
			) ) );
			
//MENU BOTTOM BORDER COLOR
$wp_customize->add_setting( 'complete[menu_border_bottom]', array(
	'type' => 'option',
	'default' => '#0b799d',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_border_bottom', array(
				'label' => __('Menu Bottom Border Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menu_border_bottom]',
			) ) );						
			
			
//MENU BACKGROUND COLOR
$wp_customize->add_setting( 'complete[bgmenu_color_id]', array(
	'type' => 'option',
	'default' => '#0d1715',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'bgmenu_color_id', array(
				'label' => __('Menu Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[bgmenu_color_id]',
			) ) );			
			
			
//MENU BACKGROUND HOVER COLOR
$wp_customize->add_setting( 'complete[mnbg_color_id]', array(
	'type' => 'option',
	'default' => '#0b7598',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mnbg_color_id', array(
				'label' => __('Menu Background Hover Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mnbg_color_id]',
			) ) );
			
//SUBMENU TEXT COLOR
$wp_customize->add_setting( 'complete[submnu_textcolor_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submnu_textcolor_id', array(
				'label' => __('Sub Menu Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[submnu_textcolor_id]',
			) ) );			
			
			
//SUBMENU BACKGROUND COLOR
$wp_customize->add_setting( 'complete[submnbg_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'submnbg_color_id', array(
				'label' => __('Sub Menu Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[submnbg_color_id]',
			) ) );			
			
//SUBMENU HOVER BACKGROUND COLOR
$wp_customize->add_setting( 'complete[mnshvr_color_id]', array(
	'type' => 'option',
	'default' => '#1b1b1b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mnshvr_color_id', array(
				'label' => __('Sub Menu Hover Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mnshvr_color_id]',
			) ) );	
			
			
//MOBILE MENU BACKGROUND COLOR
$wp_customize->add_setting( 'complete[mobbg_color_id]', array(
	'type' => 'option',
	'default' => '#383939',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobbg_color_id', array(
				'label' => __('Mobile Menu Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mobbg_color_id]',
			) ) );	
			
//MOBILE MENU TOP BAR BACKGROUND COLOR
$wp_customize->add_setting( 'complete[mobbgtop_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobbgtop_color_id', array(
				'label' => __('Mobile Top Bar Background Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mobbgtop_color_id]',
			) ) );	
			
//MOBILE MENU TEXT COLOR
$wp_customize->add_setting( 'complete[mobmenutxt_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobmenutxt_color_id', array(
				'label' => __('Mobile Menu Text Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mobmenutxt_color_id]',
			) ) );	
			
			
//MOBILE MENU TOGGLE COLOR
$wp_customize->add_setting( 'complete[mobtoggle_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobtoggle_color_id', array(
				'label' => __('Mobile Outer Toggle Bar Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mobtoggle_color_id]',
			) ) );	
			
//MOBILE MENU INNER TOGGLE COLOR
$wp_customize->add_setting( 'complete[mobtoggleinner_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'mobtoggleinner_color_id', array(
				'label' => __('Mobile Inner Toggle Bar Color','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mobtoggleinner_color_id]',
			) ) );											
								
			
//MENU FONT FAMILY
$wp_customize->add_setting( 'complete[mnutitle_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('mnutitle_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'headheader_section',
					'settings' => 'complete[mnutitle_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

////MENU FONT SUBSETS
$wp_customize->add_setting( 'complete[mnutitle_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('mnutitle_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'headheader_section',
					'settings' => 'complete[mnutitle_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

//MENU TEXT SIZE
$wp_customize->add_setting('complete[menu_size_id]', array(
	'type' => 'option',
	'default' => '16px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('menu_size_id', array(
				'type' => 'text',
				'label' => __('Menu Font Size','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[menu_size_id]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
//TRANSPARENT HEADER FIELD
$wp_customize->add_setting('complete[head_transparent]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'head_transparent', array(
				'label' => __('Transparent Menu on Frontpage *','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[head_transparent]',
			)) );
			
//BACKGROUND TRANSPARENCY
$wp_customize->add_setting( 'complete[head_bg_trans]', array(
	'type' => 'option',
	'default' => 0.6,
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );

	$wp_customize->add_control('head_bg_trans', array(
		'type' => 'text',
		'label' => __('Background Transparency (Must On Above Transparent Menu Option)','strong'),
		'section' => 'headheader_section',
		'settings' => 'complete[head_bg_trans]',
				'input_attrs'	=> array(
					'class'	=> 'mini_control',
				)
	) );			
			
//Turn Menu Text &amp; All Headings to Uppercase
$wp_customize->add_setting('complete[mnutxt_upcase_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'mnutxt_upcase_id', array(
				'label' => __('Turn Menu Text to Uppercase','strong'),
				'section' => 'headheader_section',
				'settings' => 'complete[mnutxt_upcase_id]',
			)) );			