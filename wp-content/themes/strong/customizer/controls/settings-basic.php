<?php
	
	// Register the radio image control class as a JS control type.
	$wp_customize->register_control_type( 'complete_Control_Radio_Image' );


//----------------------SITE LAYOUT SECTION----------------------------------

//DROP SHADOW FIELD
$wp_customize->add_setting('complete[converted]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	//'transport' => 'postMessage',
) );

			$wp_customize->add_control( 'converted', array(
				'type' => 'text',
				'label' => __('Converted to Latest Version','strong'),
				'section' => 'layout_section',
				'settings' => 'complete[converted]',
			) );
			



// Add the layout setting.
$wp_customize->add_setting('complete[site_layout_id]', array(
		'type' => 'option',
		'default'           => 'site_full',
		'sanitize_callback' => 'sanitize_key',
	)
);

		  // Add the layout control.
		  $wp_customize->add_control('site_layout_id',array(
						'type' => 'select',
						'label'    => esc_html__( 'Site Layout *', 'strong' ),
						'section'  => 'layout_section',
						'settings' => 'complete[site_layout_id]',
						'choices'  => array(
							'site_full' => __('Full Width', 'strong'), 
							'site_boxed' => __('Boxed', 'strong'), 
					  )
			  ) );
			  
//CONTENT BACKGOURND WIDTH
$wp_customize->add_setting( 'complete[center_width]', array(
		'type' => 'option',
        'default' => '95',
		'sanitize_callback' => 'complete_sanitize_number',
		//'transport' => 'postMessage',
) );
 
			$wp_customize->add_control('center_width', array(
					'type' => 'range',
					'label' => __('Box Width *','strong'),
					'section' => 'layout_section',
					'input_attrs' => array(
						'min' => 30,
						'max' => 100,
						'step' => 10,
						'class' => 'range-textbox_width',
						'style' => 'color: #0a0',
					),
					'settings'    => 'complete[center_width]',
					'active_callback' => 'complete_layout_callback',
			) );
 
//---------General Color SETTINGS---------------------	

//Fixed Background Image
$wp_customize->add_setting('complete[background_fixed]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'background_fixed', array(
				'label' => __('Fixed Background Image','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[background_fixed]',
			)) );



//Site content Text Color
$wp_customize->add_setting( 'complete[primtxt_color_id]', array(
	'type' => 'option',
	'default' => '#2b2b2b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primtxt_color_id', array(
				'label' => __('Site content Text Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[primtxt_color_id]',
			) ) );

//BASE COLOR
$wp_customize->add_setting( 'complete[sec_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sec_color_id', array(
				'label' => __('Other Elements Background','strong'),
				'description' => __( 'Affects Posts hover color, Search button background Color, Widget Title border color, Comments Submit button color.', 'strong' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sec_color_id]',
			) ) );


//TEXT COLOR ON BASE COLOR
$wp_customize->add_setting( 'complete[sectxt_color_id]', array(
	'type' => 'option',
	'default' => '#FFFFFF',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sectxt_color_id', array(
				'label' => __('Other Elements Text Color','strong'),
				'description' => __( 'Affects Front page post hover text color, Search button text color.', 'strong' ),
				'section' => 'general_color_section',
				'settings' => 'complete[sectxt_color_id]',
			) ) );
			
// Link Color
$wp_customize->add_setting( 'complete[global_link_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_color_id', array(
				'label' => __('Default Anchor Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_color_id]',
			) ) );
			
// Link Hover Color
$wp_customize->add_setting( 'complete[global_link_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#999999',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_link_hvcolor_id', array(
				'label' => __('Default Anchor Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_link_hvcolor_id]',
			) ) );		
			
// H1 Color
$wp_customize->add_setting( 'complete[global_h1_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_color_id', array(
				'label' => __('H1 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_color_id]',
			) ) );
			
// H1 Hover Color
$wp_customize->add_setting( 'complete[global_h1_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h1_hvcolor_id', array(
				'label' => __('H1 Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h1_hvcolor_id]',
			) ) );

// H2 Color
$wp_customize->add_setting( 'complete[global_h2_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_color_id', array(
				'label' => __('H2 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_color_id]',
			) ) );
			
// H2 Hover Color
$wp_customize->add_setting( 'complete[global_h2_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h2_hvcolor_id', array(
				'label' => __('H2 Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h2_hvcolor_id]',
			) ) );
			
// H3 Color
$wp_customize->add_setting( 'complete[global_h3_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_color_id', array(
				'label' => __('H3 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_color_id]',
			) ) );
			
// H3 Hover Color
$wp_customize->add_setting( 'complete[global_h3_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h3_hvcolor_id', array(
				'label' => __('H3 Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h3_hvcolor_id]',
			) ) );
			
// H4 Color
$wp_customize->add_setting( 'complete[global_h4_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_color_id', array(
				'label' => __('H4 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_color_id]',
			) ) );
			
// H4 Hover Color
$wp_customize->add_setting( 'complete[global_h4_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h4_hvcolor_id', array(
				'label' => __('H4 Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h4_hvcolor_id]',
			) ) );	
			
// H5 Color
$wp_customize->add_setting( 'complete[global_h5_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_color_id', array(
				'label' => __('H5 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_color_id]',
			) ) );
			
// H5 Hover Color
$wp_customize->add_setting( 'complete[global_h5_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h5_hvcolor_id', array(
				'label' => __('H5 Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h5_hvcolor_id]',
			) ) );								
// H6 Color
$wp_customize->add_setting( 'complete[global_h6_color_id]', array(
	'type' => 'option',
	'default' => '#323131',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_color_id', array(
				'label' => __('H6 Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[global_h6_color_id]',
			) ) );
			
// H6 Hover Color
$wp_customize->add_setting( 'complete[global_h6_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'global_h6_hvcolor_id', array(
	'label' => __('H6 Hover Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[global_h6_hvcolor_id]',
) ) );
			
// Post Meta Color
$wp_customize->add_setting( 'complete[post_meta_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_meta_color_id', array(
	'label' => __('Post Meta Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[post_meta_color_id]',
) ) );		

// Team Box Background Color
$wp_customize->add_setting( 'complete[team_box_color_id]', array(
	'type' => 'option',
	'default' => '#f7f7f7',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'team_box_color_id', array(
	'label' => __('Team Box Background Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[team_box_color_id]',
) ) );	

///
// Social Icon Color
$wp_customize->add_setting( 'complete[social_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_text_color_id', array(
	'label' => __('Social Icon Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_text_color_id]',
) ) );
///



// Social Icon Background Color
$wp_customize->add_setting( 'complete[social_icon_color_id]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_icon_color_id', array(
	'label' => __('Social Icon Bgcolor','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_icon_color_id]',
) ) );

// Social Icon Hover Background Color
$wp_customize->add_setting( 'complete[social_hover_icon_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'social_hover_icon_color_id', array(
	'label' => __('Social Icon Hover Bgcolor','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[social_hover_icon_color_id]',
) ) );

// Testimonial Box Background Color
$wp_customize->add_setting( 'complete[testimonialbox_color_id]', array(
	'type' => 'option',
	'default' => '#f7f7f7',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonialbox_color_id', array(
	'label' => __('Testimonial Box Bgcolor','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonialbox_color_id]',
) ) );

// Testimonial Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_pager_color_id]', array(
	'type' => 'option',
	'default' => '#dadada',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_pager_color_id', array(
	'label' => __('Testimonial Pager Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_pager_color_id]',
) ) );

// Testimonial Active Pager Background Color
$wp_customize->add_setting( 'complete[testimonial_activepager_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'testimonial_activepager_color_id', array(
	'label' => __('Testimonial Active Pager Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[testimonial_activepager_color_id]',
) ) );

// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_filtertxt_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_filtertxt_color_id', array(
	'label' => __('Gallery Filter Text Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_filtertxt_color_id]',
) ) );


// Gallery Filter Color
$wp_customize->add_setting( 'complete[gallery_activefiltertxt_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_activefiltertxt_color_id', array(
	'label' => __('Gallery Filter Active Text Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_activefiltertxt_color_id]',
) ) );

// Gallery Filter Background Color
$wp_customize->add_setting( 'complete[gallery_filter_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_filter_color_id', array(
	'label' => __('Gallery Active Filter Bgcolor','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_filter_color_id]',   
) ) );

// Gallery Image Hover Background Color
$wp_customize->add_setting( 'complete[gallery_hover_bgcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gallery_hover_bgcolor_id', array(
	'label' => __('Gallery Hover Image Bgcolor','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[gallery_hover_bgcolor_id]',
) ) );

// Skills Bar Background Color
$wp_customize->add_setting( 'complete[skillsbar_bgcolor_id]', array(
	'type' => 'option',
	'default' => '#f8f8f8',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_bgcolor_id', array(
	'label' => __('Skills Bar Background Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_bgcolor_id]',
) ) );

// Skills Bar Text Color
$wp_customize->add_setting( 'complete[skillsbar_text_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'skillsbar_text_color_id', array(
	'label' => __('Skills Bar Text Color','strong'),
	'section' => 'general_color_section',
	'settings' => 'complete[skillsbar_text_color_id]',
) ) );

//---------TYPOGRAPHY SETTINGS---------------------	

// Site Content Font Family
$wp_customize->add_setting( 'complete[content_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Arimo',
	'transport' => 'postMessage',
	'sanitize_callback' => 'esc_attr',
	
) );
			$wp_customize->add_control('content_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Site Content Font Subsets
$wp_customize->add_setting( 'complete[content_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[content_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );


//Site Content Font Size
$wp_customize->add_setting('complete[content_font_id][font-size]', array(
	'type' => 'option',
	'default' => '14px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('content_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[content_font_id][font-size]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );
//--------------------All Headings Fonts Family And Size----------------------			
// H1 Font Family
$wp_customize->add_setting( 'complete[global_h1_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H1 Font Subsets
$wp_customize->add_setting( 'complete[global_h1_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h1_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H1 Font Size
$wp_customize->add_setting('complete[global_h1_font_id][font-size]', array(
	'type' => 'option',
	'default' => '30px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h1_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h1_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );	
			
// H2 Font Family
$wp_customize->add_setting( 'complete[global_h2_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H2 Font Subsets
$wp_customize->add_setting( 'complete[global_h2_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h2_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H2 Font Size
$wp_customize->add_setting('complete[global_h2_font_id][font-size]', array(
	'type' => 'option',
	'default' => '25px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h2_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h2_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H3 Font Family
$wp_customize->add_setting( 'complete[global_h3_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H3 Font Subsets
$wp_customize->add_setting( 'complete[global_h3_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h3_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H3 Font Size
$wp_customize->add_setting('complete[global_h3_font_id][font-size]', array(
	'type' => 'option',
	'default' => '18px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h3_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h3_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H4 Font Family
$wp_customize->add_setting( 'complete[global_h4_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H4 Font Subsets
$wp_customize->add_setting( 'complete[global_h4_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h4_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H4 Font Size
$wp_customize->add_setting('complete[global_h4_font_id][font-size]', array(
	'type' => 'option',
	'default' => '15px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h4_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h4_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H5 Font Family
$wp_customize->add_setting( 'complete[global_h5_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H5 Font Subsets
$wp_customize->add_setting( 'complete[global_h5_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h5_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H5 Font Size
$wp_customize->add_setting('complete[global_h5_font_id][font-size]', array(
	'type' => 'option',
	'default' => '13px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h5_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h5_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// H6 Font Family
$wp_customize->add_setting( 'complete[global_h6_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// H6 Font Subsets
$wp_customize->add_setting( 'complete[global_h6_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[global_h6_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H6 Font Size
$wp_customize->add_setting('complete[global_h6_font_id][font-size]', array(
	'type' => 'option',
	'default' => '10px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('global_h6_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[global_h6_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );																		

//Turn All Headings to Uppercase
$wp_customize->add_setting('complete[txt_upcase_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'txt_upcase_id', array(
				'label' => __('Turn All Headings to Uppercase','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[txt_upcase_id]',
			)) );


////////////////////////////////
// Timing Box Font Family
$wp_customize->add_setting( 'complete[timing_box_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('timing_box_font_family', array(
					'type' => 'select',
					'label' => __('Family','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[timing_box_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Timing Box Font Subsets
$wp_customize->add_setting( 'complete[timing_box_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('timing_box_font_subsets', array(
					'type' => 'select',
					'label' => __('Subsets','strong'),
					'section' => 'basic_typography',
					'settings' => 'complete[timing_box_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// H6 Font Size
$wp_customize->add_setting('complete[timing_box_font_id][font-size]', array(
	'type' => 'option',
	'default' => '24px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('timing_box_font_size', array(
				'type' => 'text',
				'label' => __('Font Size','strong'),
				'section' => 'basic_typography',
				'settings' => 'complete[timing_box_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );			


//---------------LAYOUT CALLBACK-------------------//
function complete_layout_callback( $control ) {
    $layout_setting = $control->manager->get_setting('complete[site_layout_id]')->value();
     
    if ( $layout_setting == 'site_boxed' ) return true;
     
    return false;
}


//---------------HEADER CALLBACK-------------------//
function complete_transparent_header_callback( $control ) {
    $header_setting = $control->manager->get_setting('complete[head_transparent]')->value();
     
    if ( $header_setting == 1 ) return true;
     
    return false;
}
