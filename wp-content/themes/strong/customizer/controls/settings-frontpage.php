<?php
//----------------------HOME SECTION 1----------------------------------
	$wp_customize->add_setting('complete[section1_title]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section1_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections1',
		'settings' => 'complete[section1_title]',
	)) );	
	
$wp_customize->add_setting('complete[section1_content]', array(
	'type' => 'option',
	'default' => '<!--Column One -->
[columns size="columns-3"]
    [infoboxarea 
    	bgcolor="#ffffff" 
        titlecolor="#323131" 
        subtitlecolor="#11bcf4" 
        descriptioncolor="#323131" 
        title="Whats Next" 
        subtitle="Upcoming Classes"]
    [timing icons="fa fa-clock-o" classname="indoor cycling" classtime="2:00pm - 4:00pm"]
    [timing icons="fa fa-clock-o" classname="aerobics" classtime="4:00pm - 6:00pm"]
    [timing icons="fa fa-clock-o" classname="cardio fitness" classtime="6:00pm - 8:00pm"]
    [/infoboxarea]
[/columns]
<!--Column Two-->    
[columns size="columns-3"]
[infoboxarea 
	bgcolor="#11bcf4" 
    titlecolor="#ffffff" 
    subtitlecolor="#323131" 
    descriptioncolor="#ffffff" 
    title="membership cards" 
    subtitle="25% Discount for all members" 
    buttonlink="#" buttonbg="#ffffff" 
    buttoncolor="#323131" 
    buttontext="Read More" 
    buttontarget="_self"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae semperin diam. Maecenas id ultrices lectus.
    [/infoboxarea]
[/columns]

<!--Column Three-->
[columns size="columns-3"]
    
[infoboxarea 
	bgcolor="#4fd2fd" 
    titlecolor="#ffffff"
    subtitlecolor="#323131"
    descriptioncolor="#ffffff" 
    title="personal training" 
    subtitle="Sign up today" 
    buttonlink="#" 
    buttonbg="#ffffff" 
    buttoncolor="#323131" 
    buttontext="Sign Up Now!" 
    buttontarget="_self"]
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae semperin diam. Maecenas id ultrices lectus.
    [/infoboxarea]
[/columns]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section1_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections1',
				'settings' => 'complete[section1_content]',
			)) );	

// Section 1 Background Color
	$wp_customize->add_setting( 'complete[section1_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section1_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections1',
		'settings' => 'complete[section1_bgcolor_id]',
	) ) );

// Section1 Background Image
	$wp_customize->add_setting( 'complete[section1_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section1_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections1',
			'settings'    => 'complete[section1_bg_image]'
				)
			)
	);
	
// Section1 Background Video
	$wp_customize->add_setting( 'complete[section1_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section1_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections1',
			'settings'    => 'complete[section1_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section1]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section1', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections1',
		'settings' => 'complete[hide_boxes_section1]',
	)) );	 
//----------------------HOME SECTION 1----------------------------------

//----------------------HOME SECTION 2----------------------------------

	$wp_customize->add_setting('complete[section2_title]', array(
		'type' => 'option',
		'default'	=> __('Everything About <span style="color:#11bcf4;">Fitness</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section2_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections2',
		'settings' => 'complete[section2_title]',
	)) );	
	
$wp_customize->add_setting('complete[section2_content]', array(
	'type' => 'option',
	'default' => '[columns size="columns-3"]
<!--Left Column One -->
[fitboxleft 
	title="Balanced Body" 
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus" 
    icon="'.get_template_directory_uri().'/images/balance-body-mind.png" 
    link="#"]
<!--Left Column Two -->
[fitboxleft 
	title="Healthy Daily Diet" 
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus" 
    icon="'.get_template_directory_uri().'/images/healthy-daily-diet.png" 
    link="#"]
<!--Left Column Three -->
[fitboxleft 
	title="Active Cardio"  
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus"  
    icon="'.get_template_directory_uri().'/images/active-cardio.png" 
    link="#"]

[/columns]
<!--Center Column image -->
[columns size="columns-3"]
	<img src="'.get_template_directory_uri().'/images/fitt-girl.png" />
[/columns]

[columns size="columns-3"]
<!--Right Column One -->
[fitboxright 
	title="Meditation Practice"  
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus"
    icon="'.get_template_directory_uri().'/images/meditation-practice.png" 
    link="#"]
<!--Right Column Two -->
[fitboxright 
	title="Daily Yoga Tips"  
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus"
    icon="'.get_template_directory_uri().'/images/daily-yoga-tips.png" link="#"]
<!--Right Column Three-->
[fitboxright 
	title="Personal Fitness"  
    description="Lorem ipsum dolor sit amet, conseetur adipiscing elit. Phasellus vitae mperin maecenas id ultrices lectus"
    icon="'.get_template_directory_uri().'/images/personal-fitness-training.png" 
    link="#"]

[/columns]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section2_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections2',
				'settings' => 'complete[section2_content]',
			)) );	

// Section 2 Background Color
	$wp_customize->add_setting( 'complete[section2_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section2_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections2',
		'settings' => 'complete[section2_bgcolor_id]',
	) ) );

// Section2 Background Image
	$wp_customize->add_setting( 'complete[section2_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section2_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections2',
			'settings'    => 'complete[section2_bg_image]'
				)
			)
	);
	
// Section2 Background Video
	$wp_customize->add_setting( 'complete[section2_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section2_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections2',
			'settings'    => 'complete[section2_bg_video]'
				)
			)
	);		
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section2]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section2', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections2',
		'settings' => 'complete[hide_boxes_section2]',
	)) );
//----------------------HOME SECTION 2----------------------------------

//----------------------HOME SECTION 3----------------------------------

	$wp_customize->add_setting('complete[section3_title]', array(
		'type' => 'option',
		'default'	=> __('<span style="color:#ffffff">Next classes</span><span style="color:#11bcf4"> Today</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section3_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections3',
		'settings' => 'complete[section3_title]',
	)) );	
	
$wp_customize->add_setting('complete[section3_content]', array(
	'type' => 'option',
	'default' => '
<!-- First Column-->
[classtiming 
	classname="cardio" 
	classtime="10:00 - 10:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson"]
<!-- Second Column-->
[classtiming 
	classname="pilates" 
	classtime="11:00 - 11:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson" 
	last="last"]
<!-- Third Column-->
[classtiming 
	classname="indoor cycling" 
	classtime="1:00 - 1:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson"]
<!-- Four Column-->
[classtiming 
	classname="muscle build" 
	classtime="10:00 - 10:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson" 
	last="last"]
<!-- Five Column-->
[classtiming 
	classname="yoga beginners" 
	classtime="11:00 - 11:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson"]
<!-- Six Column-->
[classtiming 
	classname="aerobic" 
	classtime="1:00 - 1:45" 
	icons="fa fa-clock-o" 
	teachername="with stev Johnson" 
	last="last"]

[su_spacer size="50"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section3_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections3',
				'settings' => 'complete[section3_content]',
			)) );	

// Section 3 Background Color
	$wp_customize->add_setting( 'complete[section3_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section3_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections3',
		'settings' => 'complete[section3_bgcolor_id]',
	) ) );

// Section3 Background Image
	$wp_customize->add_setting( 'complete[section3_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section3_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections3',
			'settings'    => 'complete[section3_bg_image]'
				)
			)
	);
	
// Section3 Background Video
	$wp_customize->add_setting( 'complete[section3_bg_video]',array( 
		'type' => 'option',
		'default' => 'https://dl.dropboxusercontent.com/u/5560296/classess.mp4',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section3_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections3',
			'settings'    => 'complete[section3_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section3]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section3', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections3',
		'settings' => 'complete[hide_boxes_section3]',
	)) );	
//----------------------HOME SECTION 3----------------------------------

//----------------------HOME SECTION 4----------------------------------

	$wp_customize->add_setting('complete[section4_title]', array(
		'type' => 'option',
		'default'	=> __('Our <span style="color:#11bcf4;">Trainers</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section4_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections4',
		'settings' => 'complete[section4_title]',
	)) );	
	
$wp_customize->add_setting('complete[section4_content]', array(
	'type' => 'option',
	'default' => '[flipbox 
	fliptype="h" 
	frontimage="'.get_template_directory_uri().'/images/jones.jpg" 
    fronttitle="Chris Jones" 
    fronttitlecolor="#323131" 
    frontdescriptioncolor="#a3a3a3" 
    frontdescription="Lorem Ipsum" 
    backtitlecolor="#ffffff" 
    backdescriptioncolor="#ffffff" 
    backtitle="Chris Jones" 
    backdescription="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum." 
    backurl="#" 
    backbutton="+"]
    [social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
    [/social_area]
[/flipbox]

[flipbox 
	fliptype="v" 
    frontimage="'.get_template_directory_uri().'/images/anthony.jpg" 
    fronttitle="Anthony" 
    fronttitlecolor="#323131" 
    frontdescriptioncolor="#a3a3a3" 
    frontdescription="Body Building Train" 
    backtitlecolor="#ffffff" 
    backdescriptioncolor="#ffffff" 
    backtitle="Anthony" 
    backdescription="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum." 
    backurl="#" 
    backbutton="+"]
    [social_area]
    	[social icon="facebook" link="#"]
        [social icon="twitter" link="#"]
        [social icon="google-plus" link="#"]
        [social icon="linkedin" link="#"]
        [social icon="pinterest" link="#"]
	[/social_area]
[/flipbox]

[flipbox 
	fliptype="h" 
    frontimage="'.get_template_directory_uri().'/images/anna.jpg" 
    fronttitle="Anna" 
    fronttitlecolor="#323131" 
    frontdescriptioncolor="#a3a3a3" 
    frontdescription="Yoga Trainer" 
    backtitlecolor="#ffffff" 
    backdescriptioncolor="#ffffff" 
    backtitle="Anna" 
    backdescription="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum." 
    backurl="#" 
    backbutton="+"]
    [social_area]
    	[social icon="facebook" link="#"]
        [social icon="twitter" link="#"]
        [social icon="google-plus" link="#"]
        [social icon="linkedin" link="#"]
        [social icon="pinterest" link="#"]
	[/social_area]
[/flipbox]

[flipbox 
	fliptype="h" 
    frontimage="'.get_template_directory_uri().'/images/lisa.jpg" 
    fronttitle="Lisa" 
    fronttitlecolor="#323131" 
    frontdescriptioncolor="#a3a3a3" 
    frontdescription="Fitness Trainer" 
    backtitlecolor="#ffffff" 
    backdescriptioncolor="#ffffff" 
    backtitle="Lisa" 
    backdescription="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book Lorem Ipsum." 
    backurl="#" 
    backbutton="+"]
    [social_area]
    	[social icon="facebook" link="#"]
        [social icon="twitter" link="#"]
        [social icon="google-plus" link="#"]
        [social icon="linkedin" link="#"]
        [social icon="pinterest" link="#"]
	[/social_area]
[/flipbox]

[su_spacer size="50"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section4_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections4',
				'settings' => 'complete[section4_content]',
			)) );	

// Section 4 Background Color
	$wp_customize->add_setting( 'complete[section4_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section4_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections4',
		'settings' => 'complete[section4_bgcolor_id]',
	) ) );

// Section4 Background Image
	$wp_customize->add_setting( 'complete[section4_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section4_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections4',
			'settings'    => 'complete[section4_bg_image]'
				)
			)
	);
	
// Section4 Background Video
	$wp_customize->add_setting( 'complete[section4_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section4_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections4',
			'settings'    => 'complete[section4_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section4]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section4', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections4',
		'settings' => 'complete[hide_boxes_section4]',
	)) );		
//----------------------HOME SECTION 4----------------------------------

//----------------------HOME SECTION 5----------------------------------

	$wp_customize->add_setting('complete[section5_title]', array(
		'type' => 'option',
		'default'	=> __('Latest Gym <span style="color:#11bcf4;">News</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section5_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections5',
		'settings' => 'complete[section5_title]',
	)) );	
	
$wp_customize->add_setting('complete[section5_content]', array(
	'type' => 'option',
	'default' => '[posts-style3 show="3" cat="" excerptlength="24"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section5_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections5',
				'settings' => 'complete[section5_content]',
			)) );	

// Section 5 Background Color
	$wp_customize->add_setting( 'complete[section5_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section5_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections5',
		'settings' => 'complete[section5_bgcolor_id]',
	) ) );

// Section5 Background Image
	$wp_customize->add_setting( 'complete[section5_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section5_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections5',
			'settings'    => 'complete[section5_bg_image]'
				)
			)
	);
	
	
// Section5 Background Video
	$wp_customize->add_setting( 'complete[section5_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section5_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections5',
			'settings'    => 'complete[section5_bg_video]'
				)
			)
	);		
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section5]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section5', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections5',
		'settings' => 'complete[hide_boxes_section5]',
	)) );		
//----------------------HOME SECTION 5----------------------------------

//----------------------HOME SECTION 6----------------------------------

	$wp_customize->add_setting('complete[section6_title]', array(
		'type' => 'option',
		'default'	=> __('','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section6_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections6',
		'settings' => 'complete[section6_title]',
	)) );	
	
$wp_customize->add_setting('complete[section6_content]', array(
	'type' => 'option',
	'default' => '[promobox2 
	bgcolor="#11bcf4" 
    leftbordercolor="#11bcf4" 
    button="Get Started" 
    url="#"]
    <span style="color:#fff; font-size:30px;">
    Start a personal training session with one of our fitness <strong>trainers</strong>
    </span>
[/promobox2]
[su_spacer size="30"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section6_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections6',
				'settings' => 'complete[section6_content]',
			)) );	

// Section 6 Background Color
	$wp_customize->add_setting( 'complete[section6_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#11bcf4',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section6_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections6',
		'settings' => 'complete[section6_bgcolor_id]',
	) ) );

// Section6 Background Image
	$wp_customize->add_setting( 'complete[section6_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section6_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections6',
			'settings'    => 'complete[section6_bg_image]'
				)
			)
	);
	
	
// Section6 Background Video
	$wp_customize->add_setting( 'complete[section6_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section6_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections6',
			'settings'    => 'complete[section6_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section6]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section6', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections6',
		'settings' => 'complete[hide_boxes_section6]',
	)) );		
//----------------------HOME SECTION 6----------------------------------

//----------------------HOME SECTION 7----------------------------------

	$wp_customize->add_setting('complete[section7_title]', array(
		'type' => 'option',
		'default'	=> __('Why People Love <span style="color:#11bcf4;">us</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section7_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections7',
		'settings' => 'complete[section7_title]',
	)) );	
	
$wp_customize->add_setting('complete[section7_content]', array(
	'type' => 'option',
	'default' => '[testimonials-rotator show="3"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section7_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections7',
				'settings' => 'complete[section7_content]',
			)) );	

// Section 7 Background Color
	$wp_customize->add_setting( 'complete[section7_bgcolor_id]', array(
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section7_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections7',
		'settings' => 'complete[section7_bgcolor_id]',
	) ) );

// Section7 Background Image
	$wp_customize->add_setting( 'complete[section7_bg_image]',array( 
		'type' => 'option',
		'default' => ''.get_template_directory_uri().'/images/testimonials-section-background.jpg',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section7_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections7',
			'settings'    => 'complete[section7_bg_image]'
				)
			)
	);
	
		
// Section7 Background Video
	$wp_customize->add_setting( 'complete[section7_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section7_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections7',
			'settings'    => 'complete[section7_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section7]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section7', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections7',
		'settings' => 'complete[hide_boxes_section7]',
	)) );	
//----------------------HOME SECTION 7----------------------------------

//----------------------HOME SECTION 8----------------------------------

	$wp_customize->add_setting('complete[section8_title]', array(
		'type' => 'option',
		'default'	=> __('our <span style="color:#11bcf4;">programs</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section8_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections8',
		'settings' => 'complete[section8_title]',
	)) );	
	
$wp_customize->add_setting('complete[section8_content]', array(
	'type' => 'option',
	'default' => '[programms 
	layout="2" 
    bgcolor="#ffffff" 
    icon="'.get_template_directory_uri().'/images/prog-box-1.jpg" 
    title="muscle build pro" 
    subtitle="1 year training program " 
    subtitlecolor="#acabab" 
    button="Enroll Now" 
    url="#" 
    price="$ 99. 99/ 1 year"]
    
    [su_list icon="icon: hand-o-right"]
    <ul>
    <li>3 days a week progarm</li>
    <li>Diet progarm Included</li>
    <li>Professional Trainers</li>
    </ul>
    [/su_list]
[/programms]

[programms 
	layout="2" 
    bgcolor="#ffffff" 
    icon="'.get_template_directory_uri().'/images/prog-box-2.jpg" 
    title="women strength traning" 
    subtitle="6 month traning program" 
    subtitlecolor="#acabab" 
    button="Enroll Now" 
    url="#" 
    price="$ 59. 99/ 1 year"]
    
    [su_list icon="icon: hand-o-right"]
    <ul>
    <li>3 days a week progarm</li>
    <li>Diet progarm Included</li>
    <li>Professional Trainers</li>
    </ul>
    [/su_list]
[/programms]
	[programms 
    layout="2" 
    bgcolor="#ffffff" 
    icon="'.get_template_directory_uri().'/images/prog-box-3.jpg" 
    title="fat burning pro" 
    subtitle="3 month training program" 
    subtitlecolor="#acabab" 
    button="Enroll Now" 
    url="#" 
    price="$ 39. 99/ 1 year"]
    
    [su_list icon="icon: hand-o-right"]
    <ul>
    <li>3 days a week progarm</li>
    <li>Diet progarm Included</li>
    <li>Professional Trainers</li>
    </ul>
    [/su_list]
[/programms]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section8_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections8',
				'settings' => 'complete[section8_content]',
			)) );	

// Section 8 Background Color
	$wp_customize->add_setting( 'complete[section8_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section8_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections8',
		'settings' => 'complete[section8_bgcolor_id]',
	) ) );

// Section8 Background Image
	$wp_customize->add_setting( 'complete[section8_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section8_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections8',
			'settings'    => 'complete[section8_bg_image]'
				)
			)
	);
	
// Section8 Background Video
	$wp_customize->add_setting( 'complete[section8_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section8_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections8',
			'settings'    => 'complete[section8_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section8]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section8', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections8',
		'settings' => 'complete[hide_boxes_section8]',
	)) );	
//----------------------HOME SECTION 8----------------------------------

//----------------------HOME SECTION 9----------------------------------

	$wp_customize->add_setting('complete[section9_title]', array(
		'type' => 'option',
		'default'	=> __('','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section9_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections9',
		'settings' => 'complete[section9_title]',
	)) );	
	
$wp_customize->add_setting('complete[section9_content]', array(
	'type' => 'option',
	'default' => '[su_row]
  [su_column size="1/2"]
  <h2>General Fitness Related <span style="color:#11bcf4;">FAQs</span></h2>
  [su_accordion]
  [su_spoiler title="3 days a week program" open="yes"]
  
Praesent dignissim et ligula sit amet elementum. Praesent at condimentum ante. Ut congue sagittis enim, a aliquam ipsum sagittis vitae. Cras porta erat at ex feugiat, id vestibulum quam tempor. Pellentesque venenatis hendrerit sem. Maecenas condimentum ligula justo, nec aliquet magna dignissim convallis. Donec efficitur at mauris eu suscipit. Fusce felis urna, ullamcorper sed odio eget, volutpat varius ipsum. Suspendisse potenti vestibulum quam tempor. Pellentesque venenatis hendrerit sem vestibulum quam tempor. Pellentesque venenatis hendrerit sem.[/su_spoiler]

[su_spoiler title="Diet program included"]
    
    Praesent dignissim et ligula sit amet elementum. Praesent at condimentum ante. Ut congue sagittis enim, a aliquam ipsum sagittis vitae. Cras porta erat at ex feugiat, id vestibulum quam tempor. Pellentesque venenatis hendrerit sem. Maecenas condimentum ligula justo, nec aliquet magna dignissim convallis. Donec efficitur at mauris eu suscipit. Fusce felis urna, ullamcorper sed odio eget, volutpat varius ipsum. Suspendisse potenti vestibulum quam tempor. Pellentesque venenatis hendrerit sem vestibulum quam tempor. Pellentesque venenatis hendrerit sem.
    
[/su_spoiler]

[su_spoiler title="Professional Trainers"]
    
Praesent dignissim et ligula sit amet elementum. Praesent at condimentum ante. Ut congue sagittis enim, a aliquam ipsum sagittis vitae. Cras porta erat at ex feugiat, id vestibulum quam tempor. Pellentesque venenatis hendrerit sem. Maecenas condimentum ligula justo, nec aliquet magna dignissim convallis. Donec efficitur at mauris eu suscipit. Fusce felis urna, ullamcorper sed odio eget, volutpat varius ipsum. Suspendisse potenti vestibulum quam tempor. Pellentesque venenatis hendrerit sem vestibulum quam tempor. Pellentesque venenatis hendrerit sem.

[/su_spoiler]

[su_spoiler title="Convienent Timing"]

Praesent dignissim et ligula sit amet elementum. Praesent at condimentum ante. Ut congue sagittis enim, a aliquam ipsum sagittis vitae. Cras porta erat at ex feugiat, id vestibulum quam tempor. Pellentesque venenatis hendrerit sem. Maecenas condimentum ligula justo, nec aliquet magna dignissim convallis. Donec efficitur at mauris eu suscipit. Fusce felis urna, ullamcorper sed odio eget, volutpat varius ipsum. Suspendisse potenti vestibulum quam tempor. Pellentesque venenatis hendrerit sem vestibulum quam tempor. Pellentesque venenatis hendrerit sem.

[/su_spoiler]
[su_spacer size="50"]
[readmore-link align="center" button="VIEW ALL FAQS" links="#"]

[/su_accordion]
[/su_column]

[su_column size="1/2"]
  <h2>Our <span style="color:#11bcf4;">Gallery</span></h2>
  [photogallery filter="false" show="4"]
  [su_spacer size="45"]
  [readmore-link align="center" button="VIEW FULL GALLERY" links="#"]
[/su_column]
[/su_row]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section9_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections9',
				'settings' => 'complete[section9_content]',
			)) );	

// Section 9 Background Color
	$wp_customize->add_setting( 'complete[section9_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#f7f7f7',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section9_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections9',
		'settings' => 'complete[section9_bgcolor_id]',
	) ) );

// Section9 Background Image
	$wp_customize->add_setting( 'complete[section9_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section9_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections9',
			'settings'    => 'complete[section9_bg_image]'
				)
			)
	);
	
// Section9 Background Video
	$wp_customize->add_setting( 'complete[section9_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section9_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections9',
			'settings'    => 'complete[section9_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section9]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section9', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections9',
		'settings' => 'complete[hide_boxes_section9]',
	)) );	
//----------------------HOME SECTION 9----------------------------------

//----------------------HOME SECTION 10----------------------------------

	$wp_customize->add_setting('complete[section10_title]', array(
		'type' => 'option',
		'default'	=> __('List Type','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section10_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections10',
		'settings' => 'complete[section10_title]',
	)) );	
	
$wp_customize->add_setting('complete[section10_content]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section10_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections10',
				'settings' => 'complete[section10_content]',
			)) );	

// Section 10 Background Color
	$wp_customize->add_setting( 'complete[section10_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section10_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections10',
		'settings' => 'complete[section10_bgcolor_id]',
	) ) );

// Section10 Background Image
	$wp_customize->add_setting( 'complete[section10_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section10_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections10',
			'settings'    => 'complete[section10_bg_image]'
				)
			)
	);
	
// Section10 Background Video
	$wp_customize->add_setting( 'complete[section10_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section10_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections10',
			'settings'    => 'complete[section10_bg_video]'
				)
			)
	);		
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section10]',array(
			'type' => 'option',
			'default' => '1',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section10', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections10',
		'settings' => 'complete[hide_boxes_section10]',
	)) );		
//----------------------HOME SECTION 10----------------------------------

//----------------------HOME SECTION 11----------------------------------

	$wp_customize->add_setting('complete[section11_title]', array(
		'type' => 'option',
		'default'	=> __('Cool <span style="color:#11bcf4;">Products</span>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'section11_title', array( 
		'type' => 'text',
		'label'	=> __('Section Title','strong'),
		'section' => 'home_sections11',
		'settings' => 'complete[section11_title]',
	)) );	
	
$wp_customize->add_setting('complete[section11_content]', array(
	'type' => 'option',
	'default' => '[ourproduct 
	layout="1" 
    productimage="'. get_template_directory_uri().'/images/workout-shoes.jpg" 
    productname="Workout Shoes" 
    productprice="$99.89" 
    buttontext="ADD TO CART" 
    icons="fa fa-shopping-cart" 
    buttonlink="#"]

[ourproduct 
	layout="1" 
    productimage="'. get_template_directory_uri().'/images/t-shirt.jpg" 
    productname="T-Shirt" 
    productprice="$59.89" 
    buttontext="ADD TO CART" 
    icons="fa fa-shopping-cart" 
    buttonlink="#"]

[ourproduct 
	layout="1" 
    productimage="'. get_template_directory_uri().'/images/whey.jpg" 
    productname="Whey" 
    productprice="$49.89" 
    buttontext="ADD TO CART" 
    icons="fa fa-shopping-cart" 
    buttonlink="#"]

[ourproduct 
	layout="1" 
    productimage="'. get_template_directory_uri().'/images/drink-bottle.jpg" 
    productname="Drink Bottle" 
    productprice="$29.89" 
    buttontext="ADD TO CART" 
    icons="fa fa-shopping-cart" 
    buttonlink="#"]
    
[su_spacer size="20"]
[readmore-link align="center" button="VIEW ALL PRODUCTS" links="#"]',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new complete_Editor_Control( $wp_customize, 'section11_content', array( 
				'type' => 'editor',
				'label' => __('Section Content','strong'), 
				'section' => 'home_sections11',
				'settings' => 'complete[section11_content]',
			)) );	

// Section 11 Background Color
	$wp_customize->add_setting( 'complete[section11_bgcolor_id]', array(
		'type' => 'option',
		'default' => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'section11_bgcolor_id', array(
		'label' => __('Section Background Color','strong'),
		'section' => 'home_sections11',
		'settings' => 'complete[section11_bgcolor_id]',
	) ) );

// Section11 Background Image
	$wp_customize->add_setting( 'complete[section11_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'section11_bg_image',array(
			'label'       => __( 'Section Background Image', 'strong' ),
			'section'     => 'home_sections11',
			'settings'    => 'complete[section11_bg_image]'
				)
			)
	);
	
// Section11 Background Video
	$wp_customize->add_setting( 'complete[section11_bg_video]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Text_Control( $wp_customize, 'section11_bg_video',array(
			'label'       => __( 'Section Background Video Url .mp4 Only', 'strong' ),
			'section'     => 'home_sections11',
			'settings'    => 'complete[section11_bg_video]'
				)
			)
	);	
	
// Hide Section
	$wp_customize->add_setting('complete[hide_boxes_section11]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_boxes_section11', array(
		'label' => __('Hide This Section','strong'),
		'section' => 'home_sections11',
		'settings' => 'complete[hide_boxes_section11]',
	)) );	
//----------------------HOME SECTION 11----------------------------------
 
//----------------------FRONT CONTENT SECTION----------------------------------
	$ImageUrl1 = esc_url(get_template_directory_uri() ."/images/slides/slider1.jpg");
	$ImageUrl2 = esc_url(get_template_directory_uri() ."/images/slides/slider2.jpg");
	$ImageUrl3 = esc_url(get_template_directory_uri() ."/images/slides/slider3.jpg");
//----------------------SLIDER TYPE SECTION----------------------------------

//SLIDER TYPE
$wp_customize->add_setting( 'complete[slider_type_id]', array(
		'type' => 'option',
        'default' => 'static',
		'sanitize_callback' => 'complete_sanitize_choices',
) );
 
			$wp_customize->add_control('slider_type_id', array(
					'type' => 'select',
					'label' => __('Slider Type *','strong'),
					'description' => __('Choose the Slider type.','strong'),
					'section' => 'slider_section',
					'choices' => array(
						'static'=> __('Default Slider', 'strong'),
						'customslider'=> __('Custom Slider', 'strong'),
						'noslider'=>__('Disable Slider', 'strong')
					),
					'settings'    => 'complete[slider_type_id]'
			) );


//----------------------DEFAULT SLIDER SECTION----------------------------------

// Slide Font Typography And Colors

// Slide Title Font Family
$wp_customize->add_setting( 'complete[sldtitle_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_family', array(
					'type' => 'select',
					'label' => __('Slide Title Family','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Title Font Subsets
$wp_customize->add_setting( 'complete[sldtitle_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Title Subsets','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[sldtitle_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Description Font Family
$wp_customize->add_setting( 'complete[slddesc_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Roboto',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_family', array(
					'type' => 'select',
					'label' => __('Slide Description Family','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Descripotion Font Subsets
$wp_customize->add_setting( 'complete[slddesc_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Description Subsets','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[slddesc_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Button Font Family
$wp_customize->add_setting( 'complete[sldbtn_font_id][font-family]', array(
	'type' => 'option',
	'default' => 'Lato',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_family', array(
					'type' => 'select',
					'label' => __('Slide Button Family','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][font-family]',
					'choices' => customizer_library_get_font_choices(),
			) );

// Slide Button Font Subsets
$wp_customize->add_setting( 'complete[sldbtn_font_id][subsets]', array(
	'type' => 'option',
	'default' => 'latin',
	'sanitize_callback' => 'esc_attr',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_subsets', array(
					'type' => 'select',
					'label' => __('Slide Button Subsets','strong'),
					'section' => 'slider_section',
					'settings' => 'complete[sldbtn_font_id][subsets]',
					'choices' => customizer_library_get_google_font_subsets(),
			) );

// Slide Title Font Size
$wp_customize->add_setting('complete[sldtitle_font_id][font-size]', array(
	'type' => 'option',
	'default' => '38px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldtitle_font_size', array(
				'type' => 'text',
				'label' => __('Slide Title Font Size','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[sldtitle_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Description Font Size
$wp_customize->add_setting('complete[slddesc_font_id][font-size]', array(
	'type' => 'option',
	'default' => '14px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slddesc_font_size', array(
				'type' => 'text',
				'label' => __('Slide Description Font Size','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );

// Slide Button Font Size
$wp_customize->add_setting('complete[sldbtn_font_id][font-size]', array(
	'type' => 'option',
	'default' => '14px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('sldbtn_font_size', array(
				'type' => 'text',
				'label' => __('Slide Button Font Size','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_font_id][font-size]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );
			
// Slide Title Color
$wp_customize->add_setting( 'complete[slidetitle_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slidetitle_color_id', array(
				'label' => __('Slide Title Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slidetitle_color_id]',
			) ) );
			
// Slide Description Color
$wp_customize->add_setting( 'complete[slddesc_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slddesc_color_id', array(
				'label' => __('Slide Description Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slddesc_color_id]',
			) ) );	
			
// Slide Button Text Color
$wp_customize->add_setting( 'complete[sldbtntext_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtntext_color_id', array(
				'label' => __('Slide Button Text Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtntext_color_id]',
			) ) );			
			
// Slide Button Background Color
$wp_customize->add_setting( 'complete[sldbtn_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_color_id', array(
				'label' => __('Slide Button Background Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_color_id]',
			) ) );
			
// Slide BUtton Hoover Bg Color
$wp_customize->add_setting( 'complete[sldbtn_hvcolor_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sldbtn_hvcolor_id', array(
				'label' => __('Slide Button Hover Background Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[sldbtn_hvcolor_id]',
			) ) );	
			
			
// Slide Pager Color
$wp_customize->add_setting( 'complete[slide_pager_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_pager_color_id', array(
				'label' => __('Slide Pager Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_pager_color_id]',
			) ) );		
			
// Slide Active Pager Color
$wp_customize->add_setting( 'complete[slide_active_pager_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_active_pager_color_id', array(
				'label' => __('Slide Active Pager Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_active_pager_color_id]',
			) ) );	
			
// Slide Prev Color
$wp_customize->add_setting( 'complete[slide_prev_color_id]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_prev_color_id', array(
				'label' => __('Slide Prev Next Bg Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_prev_color_id]',
			) ) );
			
// Slide Next Color
$wp_customize->add_setting( 'complete[slide_next_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_next_color_id', array(
				'label' => __('Slide Prev Next Hover Bg Color','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_next_color_id]',
			) ) );	
			
			
// Slide Title Description Background Color
$wp_customize->add_setting( 'complete[slide_title_desc_bg]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'slide_title_desc_bg', array(
				'label' => __('Slide Title & Description Background','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_title_desc_bg]',
			) ) );	
			
// Slide Title & Desc Opacity
$wp_customize->add_setting('complete[slide_title_desc_opacity]', array(
	'type' => 'option',
	'default' => '0.3',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('slide_title_desc_opacity', array(
				'type' => 'text',
				'label' => __('Slide Title & Description Background Opacity','strong'),
				'section' => 'slider_section',
				'settings' => 'complete[slide_title_desc_opacity]',
						'input_attrs'	=> array(
							'class'	=> 'mini_control',
						)
			) );													
												

// Slide Font Typography And Colors
	
	// Slide 1 Start
	$wp_customize->add_setting( 'complete[slide_image1]',array( 
		'type' => 'option',
		'default' => $ImageUrl1,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image1',array(
			'label'       => __( 'Slide Image 1', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image1]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title1]', array(
		'type' => 'option',
		'default'	=> __('it’s not <span style="color:#11bcf4;">just</span> fitness it’s a <strong>lifestyle</strong>','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title1', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 1','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc1]', array(
		'type' => 'option',
		'default'	=> __('Donec pellentesque efficitur magna quis rutrum. Nullam porttitor, urna vel efficitur vestibulum....','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc1', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 1','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link1]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link1', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 1','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link1]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn1]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn1', array( 
		'type' => 'text',
		'label'	=> '',
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn1]',
	)) );	
	// Slide 1 End
	
	// Slide 2 Start
	$wp_customize->add_setting( 'complete[slide_image2]',array( 
		'type' => 'option',
		'default' => $ImageUrl2,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image2',array(
			'label'       => __( 'Slide Image 2', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image2]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title2]', array(
		'type' => 'option',
		'default'	=> __('Be Always Strong','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title2', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 2','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc2]', array(
		'type' => 'option',
		'default'	=> __('Nullam porttitor, urna vel efficitur vestibulum Donec pellentesque efficitur magna quis rutrum....','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc2', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 2','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link2]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link2', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 2','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link2]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn2]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn2', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 2','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn2]',
	)) );	
	// Slide 2 End
	
	// Slide 3 Start
	$wp_customize->add_setting( 'complete[slide_image3]',array( 
		'type' => 'option',
		'default' => $ImageUrl3,
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image3',array(
			'label'       => __( 'Slide Image 3', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image3]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title3]', array(
		'type' => 'option',
		'default'	=> __('Get In Shape With Exercise','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title3', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 3','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc3]', array(
		'type' => 'option',
		'default'	=> __('Efficitur magna quis rutrum Nullam porttitor, urna vel efficitur vestibulum Donec pellentesque....','strong'),
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc3', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 3','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link3]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link3', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 3','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link3]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn3]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn3', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 3','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn3]',
	)) );	
	// Slide 3 End
	// Slide 4 Start
	$wp_customize->add_setting( 'complete[slide_image4]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image4',array(
			'label'       => __( 'Slide Image 4', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image4]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title4', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 4','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc4', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 4','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link4', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 4','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link4]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn4]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn4', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 4','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn4]',
	)) );	
	// Slide 4 End
	
	// Slide 5 Start
	$wp_customize->add_setting( 'complete[slide_image5]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image5',array(
			'label'       => __( 'Slide Image 5', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image5]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title5', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 5','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc5', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 5','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link5', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 5','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link5]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn5]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn5', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 5','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn5]',
	)) );	
	// Slide 5 End
	// Slide 6 Start
	$wp_customize->add_setting( 'complete[slide_image6]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image6',array(
			'label'       => __( 'Slide Image 6', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image6]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title6', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 6','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc6', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 6','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link6', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 6','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link6]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn6]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn6', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 6','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn6]',
	)) );	
	// Slide 6 End
	// Slide 7 Start
	$wp_customize->add_setting( 'complete[slide_image7]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image7',array(
			'label'       => __( 'Slide Image 7', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image7]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title7', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 7','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc7', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 7','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link7', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 7','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link7]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn7]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn7', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 7','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn7]',
	)) );	
	// Slide 7 End
	// Slide 8 Start
	$wp_customize->add_setting( 'complete[slide_image8]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image8',array(
			'label'       => __( 'Slide Image 8', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image8]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title8', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 8','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc8', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 8','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link8', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 8','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link8]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn8]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn8', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 8','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn8]',
	)) );	
	// Slide 8 End
	// Slide 9 Start
	$wp_customize->add_setting( 'complete[slide_image9]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image9',array(
			'label'       => __( 'Slide Image 9', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image9]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title9', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 9','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc9', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 9','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link9', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 9','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link9]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn9]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn9', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 9','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn9]',
	)) );	
	// Slide 9 End
	
	// Slide 10 Start
	$wp_customize->add_setting( 'complete[slide_image10]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);	

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_image10',array(
			'label'       => __( 'Slide Image 10', 'strong' ),
			'section'     => 'slider_section',
			'settings'    => 'complete[slide_image10]',
				)
			)
	);
	
	$wp_customize->add_setting('complete[slide_title10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_title10', array( 
		'type' => 'text',
		'label'	=> __('Slide Title 10','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_title10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_desc10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'slide_desc10', array( 
		'type' => 'textarea',
		'label'	=> __('Slide Description 10','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_desc10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_link10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_link10', array( 
		'type' => 'text',
		'label'	=> __('Slide Link 10','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_link10]',
	)) );	
	
	$wp_customize->add_setting('complete[slide_btn10]', array(
		'type' => 'option',
		'default'	=> '',
		'sanitize_callback' => 'wp_kses_post',
		'transport' => 'postMessage',
	) );
	$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'slide_btn10', array( 
		'type' => 'text',
		'label'	=> __('Slide Button 10','strong'),
		'section' => 'slider_section',
		'settings' => 'complete[slide_btn10]',
	)) );	
	// Slide 10 End									
 
//----------------------CUSTOM SLIDER SECTION----------------------------------	

$wp_customize->add_setting('complete[custom_slider]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'custom_slider', array( 
				'type' => 'textarea',
				'label' => __('Custom Slider Shortcode','strong'), 
				'section' => 'slider_section',
				'settings' => 'complete[custom_slider]',
			)) );		

//---------------SLIDER CALLBACK-------------------//
function complete_slider_static( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'static' ) return true;
     
    return false;
}
function complete_slider_nivoacc( $control ) {
    $layout_setting = $control->manager->get_setting('complete[slider_type_id]')->value();
     
    if ( $layout_setting == 'accordion' || $layout_setting == 'nivo' ) return true;
     
    return false;
}