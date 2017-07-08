<?php

//----------------------SINGLE POST LAYOUT-----------------------------------
$wp_customize->add_setting('complete[single_post_layout_id]', array(
		'type' => 'option',
		'default'           => 'single_layout1',
		'sanitize_callback' => 'sanitize_key',
	)
);

// Add the heaeder layout control.
$wp_customize->add_control('single_post_layout_id',array(
			'type' => 'select',
			'label'    => esc_html__( 'Single Post Layout *', 'strong' ),
			'section'  => 'singlelayout_section',
			'settings' => 'complete[single_post_layout_id]',
			'choices'  => array(
				'single_layout1' => __('Single Post Right Sidebar', 'strong'), 
				'single_layout2' => __('Single Post Left Sidebar', 'strong'),
				'single_layout3' => __('Single Post Full Width', 'strong'),
				'single_layout4' => __('Single Post No Sidebar', 'strong'),
		  )
  ) );

//----------------------SINGLE POST SECTION----------------------------------


//Single Post Meta
$wp_customize->add_setting('complete[post_info_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_info_id', array(
				'label' => __('Show Post Info','strong'),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_info_id]',
			)) );


//NEXT/PREVIOUS Posts
$wp_customize->add_setting('complete[post_nextprev_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_nextprev_id', array(
				'label' => __('Next and Previous Posts','strong'),
				'description'  => __('Display Next and Previous Posts Under Single Post', 'strong' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_nextprev_id]',
			)) );


///Show Comments
$wp_customize->add_setting('complete[post_comments_id]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
	'transport' => 'postMessage',
) );
 
			$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'post_comments_id', array(
				'label' => __('Comments','strong'),
				'description'  => __('Show/Hide Comments in Posts and Pages', 'strong' ),
				'section' => 'singlepost_section',
				'settings' => 'complete[post_comments_id]',
			)) );



//----------------------PAGE HEADER SECTION----------------------------------

//Page Header Default Background color
$wp_customize->add_setting( 'complete[page_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'page_header_color', array(
				'label' => __('Page Header Background','strong'),
				'section' => 'pageheader_section',
				'settings' => 'complete[page_header_color]',
			) ) );
			
// Page Header Background Image
	$wp_customize->add_setting( 'complete[pageheader_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'pageheader_bg_image',array(
			'label'       => __( 'Page Header Background Image', 'strong' ),
			'section'     => 'pageheader_section',
			'settings'    => 'complete[pageheader_bg_image]'
				)
			)
	);
	
// Hide Page Header
	$wp_customize->add_setting('complete[hide_pageheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_pageheader', array(
		'label' => __('Hide Page Header','strong'),
		'section' => 'pageheader_section',
		'settings' => 'complete[hide_pageheader]',
	)) );
	
//----------------------POST HEADER SECTION----------------------------------

//Post Header Default Background color
$wp_customize->add_setting( 'complete[post_header_color]', array(
	'type' => 'option',
	'default' => '#545556',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'post_header_color', array(
				'label' => __('Post Header Background','strong'),
				'section' => 'postheader_section',
				'settings' => 'complete[post_header_color]',
			) ) );
			
// Post Header Background Image
	$wp_customize->add_setting( 'complete[postheader_bg_image]',array( 
		'type' => 'option',
		'default' => '',
		'sanitize_callback' => 'esc_url_raw',
		)
	);
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'postheader_bg_image',array(
			'label'       => __( 'Posts Header Background Image', 'strong' ),
			'section'     => 'postheader_section',
			'settings'    => 'complete[postheader_bg_image]'
				)
			)
	);
	
// Hide Post Header
	$wp_customize->add_setting('complete[hide_postheader]',array(
			'type' => 'option',
			'default' => '',
			'sanitize_callback' => 'complete_sanitize_checkbox',
			'transport' => 'postMessage',
	));	 

	$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'hide_postheader', array(
		'label' => __('Hide Post Header','strong'),
		'section' => 'postheader_section',
		'settings' => 'complete[hide_postheader]',
	)) );					
//----------------------BLOG PAGE SECTION----------------------------------


/*GET LIST OF CATEGORIES*/
$layercats = get_categories(); 
$newList = array();
foreach($layercats as $category) {
	$newList[$category->term_id] = $category->cat_name;
}	
//BLOG CATEGORY SELECT
//Page Header Default Text color
$wp_customize->add_setting( 'complete[blog_cat_id]', array(
	'type' => 'option',
	'default' => '',
	'sanitize_callback' => 'complete_sanitize_multicheck'
) );

$wp_customize->add_control( new complete_Multicheck_Control( $wp_customize, 'blog_cat_id', array(
        'type' => 'multicheck',
        'label' => __('Display Blog Posts from selected Categories *','strong'),
        'section' => 'blogpage_section',
        'choices' =>$newList,
		'settings'    => 'complete[blog_cat_id]'
)) );

//Blog Page Post Count
$wp_customize->add_setting('complete[blog_num_id]', array(
	'type' => 'option',
	'default' => '9',
	'sanitize_callback' => 'complete_sanitize_number',
) );
			$wp_customize->add_control('blog_num_id', array(
				'type' => 'text',
				'label' => __('Blog Page Posts Count *','strong'),
				'section' => 'blogpage_section',
				'settings' => 'complete[blog_num_id]',
							'input_attrs'	=> array(
								'class'	=> 'mini_control',
							)
			) );

///Blog Page Thumbnails
$wp_customize->add_setting('complete[show_blog_thumb]', array(
	'type' => 'option',
	'default' => '1',
	'sanitize_callback' => 'complete_sanitize_checkbox',
) );
 
				$wp_customize->add_control( new complete_Controls_Toggle_Control( $wp_customize, 'show_blog_thumb', array(
					'label' => __('Blog Page Thumbnails *','strong'),
					'section' => 'blogpage_section',
					'settings' => 'complete[show_blog_thumb]',
				)) );



//---------Post & Page Color SETTINGS---------------------	

//Post Title Color
$wp_customize->add_setting( 'complete[title_txt_color_id]', array(
	'type' => 'option',
	'default' => '#666666',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'title_txt_color_id', array(
				'label' => __('Single Post All Heading Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[title_txt_color_id]',
			) ) );
//---------SIDEBAR & WIDGET Color SETTINGS---------------------	

//Sidebar Widgets Background Color
$wp_customize->add_setting( 'complete[sidebar_color_id]', array(
	'type' => 'option',
	'default' => '#f5f5f5',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_color_id', array(
				'label' => __('Sidebar Widgets Background','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebar_color_id]',
			) ) );
			
//Sidebar Widgets Border Color
$wp_customize->add_setting( 'complete[sidebarborder_color_id]', array(
	'type' => 'option',
	'default' => '#d0cfcf',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarborder_color_id', array(
				'label' => __('Sidebar Border seprater Color ','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarborder_color_id]',
			) ) );			


//Sidebar Title Background Color
$wp_customize->add_setting( 'complete[sidebar_ttbg_color_id]', array(
	'type' => 'option',
	'default' => '#282828',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_ttbg_color_id', array(
				'label' => __('Sidebar Title Background','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebar_ttbg_color_id]',
			) ) );

//Sidebar Widget Title Color
$wp_customize->add_setting( 'complete[sidebar_tt_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebar_tt_color_id', array(
				'label' => __('Sidebar Widget Title Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebar_tt_color_id]',
			) ) );


//Sidebar Widget Text Color
$wp_customize->add_setting( 'complete[sidebartxt_color_id]', array(
	'type' => 'option',
	'default' => '#3b3b3b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebartxt_color_id', array(
				'label' => __('Sidebar Widget Text Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebartxt_color_id]',
			) ) );
			
//Sidebar Widget Link Color
$wp_customize->add_setting( 'complete[sidebarlink_color_id]', array(
	'type' => 'option',
	'default' => '#3b3b3b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarlink_color_id', array(
				'label' => __('Sidebar Widget Link Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarlink_color_id]',
			) ) );		
			
//Sidebar Widget Link Hover Color
$wp_customize->add_setting( 'complete[sidebarlink_hover_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sidebarlink_hover_color_id', array(
				'label' => __('Sidebar Widget Link Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[sidebarlink_hover_color_id]',
			) ) );	
			
// Flipbox Front Bg Color
$wp_customize->add_setting( 'complete[flipbg_front_color_id]', array(
	'type' => 'option',
	'default' => '#edecec',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipbg_front_color_id', array(
				'label' => __('Flip Box Front Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipbg_front_color_id]',
			) ) );
			
// Flipbox Back Bg Color
$wp_customize->add_setting( 'complete[flipbg_back_color_id]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'flipbg_back_color_id', array(
				'label' => __('Flip Box Back Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[flipbg_back_color_id]',
			) ) );
 
// Divider Color
$wp_customize->add_setting( 'complete[divider_color_id]', array(
	'type' => 'option',
	'default' => '#8c8b8b',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'divider_color_id', array(
				'label' => __('Divider Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[divider_color_id]',
			) ) );	
			
// Timeline Box Bg
$wp_customize->add_setting( 'complete[timebox_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timebox_color_id', array(
				'label' => __('Timeline Box Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[timebox_color_id]',
			) ) );	
			
// Timeline Box Border
$wp_customize->add_setting( 'complete[timeboxborder_color_id]', array(
	'type' => 'option',
	'default' => '#dedede',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timeboxborder_color_id', array(
				'label' => __('Timeline Box Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[timeboxborder_color_id]',
			) ) );		
			
// Grid Box Bg
$wp_customize->add_setting( 'complete[gridbox_color_id]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridbox_color_id', array(
				'label' => __('Grid Box Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[gridbox_color_id]',
			) ) );	
			
// Grid Box Border
$wp_customize->add_setting( 'complete[gridboxborder_color_id]', array(
	'type' => 'option',
	'default' => '#cccccc',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gridboxborder_color_id', array(
				'label' => __('Grid Box Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[gridboxborder_color_id]',
			) ) );
			
// Class Timing Box Background Color
$wp_customize->add_setting( 'complete[timing_box_background]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timing_box_background', array(
				'label' => __('Timing Box Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[timing_box_background]',
			) ) );		
			
// Class Timing Box Hover Background Color
$wp_customize->add_setting( 'complete[timing_box_hover_background]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timing_box_hover_background', array(
				'label' => __('Timing Box Hover Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[timing_box_hover_background]',
			) ) );
			
// Class Timing Box Text Color
$wp_customize->add_setting( 'complete[timing_box_text_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'timing_box_text_color', array(
				'label' => __('Timing Box Text Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[timing_box_text_color]',
			) ) );		
			
// News Box Background Color
$wp_customize->add_setting( 'complete[news_box_background_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'news_box_background_color', array(
				'label' => __('News Box Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[news_box_background_color]',
			) ) );

			
// News Box Border Color
$wp_customize->add_setting( 'complete[news_box_border_color]', array(
	'type' => 'option',
	'default' => '#e6e6e6',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'news_box_border_color', array(
				'label' => __('News Box Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[news_box_border_color]',
			) ) );
			
// News Box Border Hover COlor
$wp_customize->add_setting( 'complete[news_box_hover_border_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'news_box_hover_border_color', array(
				'label' => __('News Box Hover Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[news_box_hover_border_color]',
			) ) );
			
// News Short Border COlor
$wp_customize->add_setting( 'complete[news_box_short_border_color]', array(
	'type' => 'option',
	'default' => '#3d3d3d',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'news_box_short_border_color', array(
				'label' => __('News Box Short Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[news_box_short_border_color]',
			) ) );
			
// News Short Border Hover Color
$wp_customize->add_setting( 'complete[news_box_short_hover_border_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'news_box_short_hover_border_color', array(
				'label' => __('News Short Border Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[news_box_short_hover_border_color]',
			) ) );		
			
// Programm Box Border COlor
$wp_customize->add_setting( 'complete[programm_box_border_color]', array(
	'type' => 'option',
	'default' => '#e6e6e6',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'programm_box_border_color', array(
				'label' => __('Programm Box Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[programm_box_border_color]',
			) ) );
			
// Programm Box Border Hover Color
$wp_customize->add_setting( 'complete[programm_box_hover_border_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'programm_box_hover_border_color', array(
				'label' => __('Programm Box Border Hover Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[programm_box_hover_border_color]',
			) ) );	

// FAQ Tab Bacground Color
$wp_customize->add_setting( 'complete[faq_tab_bg_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_tab_bg_color', array(
				'label' => __('FAQ Tab Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[faq_tab_bg_color]',
			) ) );
			
// FAQ Active Tab Background Color
$wp_customize->add_setting( 'complete[faq_tab_active_bg_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_tab_active_bg_color', array(
				'label' => __('FAQ Active Tab Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[faq_tab_active_bg_color]',
			) ) );
			
// FAQ Tab Left Border Color
$wp_customize->add_setting( 'complete[faq_tab_left_border_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_tab_left_border_color', array(
				'label' => __('FAQ Tab Left Border Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[faq_tab_left_border_color]',
			) ) );
			
// FAQ Tab Icon Color
$wp_customize->add_setting( 'complete[faq_tab_icon_color]', array(
	'type' => 'option',
	'default' => '#000000',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_tab_icon_color', array(
				'label' => __('FAQ Tab Icon Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[faq_tab_icon_color]',
			) ) );
			
// FAQ Tab Active Icon Color
$wp_customize->add_setting( 'complete[faq_tab_active_icon_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'faq_tab_active_icon_color', array(
				'label' => __('FAQ Tab Active Icon Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[faq_tab_active_icon_color]',
			) ) );	

// Product Title Background Color
$wp_customize->add_setting( 'complete[product_title_bg_color]', array(
	'type' => 'option',
	'default' => '#efefef',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_title_bg_color', array(
				'label' => __('Product Title Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[product_title_bg_color]',
			) ) );		
			
// Product Price And Cart Background Color
$wp_customize->add_setting( 'complete[product_price_cart_bg_color]', array(
	'type' => 'option',
	'default' => '#11bcf4',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_price_cart_bg_color', array(
				'label' => __('Product Price And Cart Background Color','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[product_price_cart_bg_color]',
			) ) );	
			
// Product Price And Cart Textcolor
$wp_customize->add_setting( 'complete[product_price_cart_color]', array(
	'type' => 'option',
	'default' => '#ffffff',
	'sanitize_callback' => 'sanitize_hex_color',
	'transport' => 'postMessage',
) );

			$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'product_price_cart_color', array(
				'label' => __('Product Price And Cart Textcolor','strong'),
				'section' => 'general_color_section',
				'settings' => 'complete[product_price_cart_color]',
			) ) );																													
 																			
//Sidebar Widget Title Font Size
$wp_customize->add_setting('complete[wgttitle_size_id]', array(
	'type' => 'option',
	'default' => '20px',
	'sanitize_callback' => 'sanitize_text_field',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control('wgttitle_size_id', array(
				'type' => 'text',
				'label' => __('Sidebar Widget Title Font Size','strong'),
				'section' => 'postpage_color_section',
				'settings' => 'complete[wgttitle_size_id]',
			) );
			
			
//============================ Contact Page =================================

//Contact Title
$wp_customize->add_setting('complete[contact_title]', array(
	'type' => 'option',
	'default' => __('Contact Info','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_title', array( 
				'type' => 'text',
				'label' => __('Contact Title','strong'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_title]',
			)) );	
			
//Contact Address
$wp_customize->add_setting('complete[contact_address]', array(
	'type' => 'option',
	'default' => __('Donec ultricies mattis nulla Australia','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Textarea_Control( $wp_customize, 'contact_address', array( 
				'type' => 'textarea',
				'label' => __('Company Address','strong'),  
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_address]',
			)) );
			
//Contact Phone
$wp_customize->add_setting('complete[contact_phone]', array(
	'type' => 'option',
	'default' => __('0789 256 321','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_phone', array( 
				'type' => 'text',
				'label' => __('Phone Number','strong'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_phone]',
			)) );	
			
//Contact Email
$wp_customize->add_setting('complete[contact_email]', array(
	'type' => 'option',
	'default' => __('info@companyname.com','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_email', array( 
				'type' => 'text',
				'label' => __('Email Address','strong'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_email]',
			)) );	
			
//Company URL
$wp_customize->add_setting('complete[contact_company_url]', array(
	'type' => 'option',
	'default' => __('http://demo.com','strong'),
	'sanitize_callback' => 'wp_kses_post',
	'transport' => 'postMessage',
) );
			$wp_customize->add_control(	new WP_Customize_Text_Control( $wp_customize, 'contact_company_url', array( 
				'type' => 'text',
				'label' => __('Company URL with http://','strong'), 
				'section' => 'contactpage_section',
				'settings' => 'complete[contact_company_url]',
			)) );		