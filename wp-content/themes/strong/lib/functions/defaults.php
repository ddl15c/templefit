<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'head-type1',
		'center_width' => 95,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '1',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('<div class="left">&copy; 2016 <span style="color:#11bcf4;">SKT Strong</span>. All Rights Reserved.</div><div class="right">Powered by <a href="http://www.sktthemes.net/" target="_blank">sktthemes.net</a></div><div class="clear"></div>', 'strong'),
		'sintp_text' => __('[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]	
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
[/social_area]', 'strong'),
		'suptp_text' => __('<i class="fa fa-phone fa-2x"></i> 855-321-9876', 'strong'),
		'emltp_text' => __('<a href="mailto:info@demolink.org">info@demolink.org </a>', 'strong'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => '',
		'head_bg_image' => '',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => '',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'menu_border_top' => '#f1f3f3',
		'menu_border_bottom' => '#0b799d',
		
		'sec_color_id' => '#11bcf4',
		'bgmenu_color_id' => '#0d1715',
		'mnbg_color_id' => '#0b7598',
		'submnu_textcolor_id' => '#000000',
		'submnbg_color_id' => '#11bcf4',
		'mnshvr_color_id' => '#1b1b1b',
		'mobbg_color_id' => '#383939',
		'mobbgtop_color_id' => '#11bcf4',
		'mobmenutxt_color_id' => '#FFFFFF',
		
		'mobtoggle_color_id' => '#000000',
		'mobtoggleinner_color_id' => '#FFFFFF',
		
		'sectxt_color_id' => '#FFFFFF',
		'content_font_id' =>  array('font-family' => 'Arimo', 'font-size' => '14px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array(  'url'=>''.get_template_directory_uri().'/assets/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Open Sans', 'font-size' => '36px'),
		'logo_color_id' => '#555555',
		
		'logo_image_height' => '26px;',
		'logo_image_width' => '155px;',
		'logo_margin_top' => '20px;',
		
		'tpbt_font_id' => array('font-family' => 'Roboto', 'font-size' => '20px'),
		'tpbt_color_id' => '#323131',
		'tpemail_color_id' => '#5b5a5a',
		
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'Roboto', 'font-size' => '38px'),
		'slddesc_font_id' => array('font-family' => 'Roboto', 'font-size' => '14px'),
		'sldbtn_font_id' => array('font-family' => 'Lato', 'font-size' => '14px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#ffffff',
		'sldbtn_color_id' => '#000000',
		'sldbtn_hvcolor_id' => '#11bcf4',	
		
		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#11bcf4',	
		'slide_title_desc_bg' => '#000000',	
		
		'slide_title_desc_opacity' => 0.3,	
		
		'slide_prev_color_id' => '#000000',
		'slide_next_color_id' => '#11bcf4',
			
		'global_link_color_id' => '#11bcf4',
		'global_link_hvcolor_id' => '#999999',		
		
		'global_h1_color_id' => '#323131',
		'global_h1_hvcolor_id' => '#11bcf4',	
		'global_h2_color_id' => '#323131',
		'global_h2_hvcolor_id' => '#11bcf4',
		'global_h3_color_id' => '#323131',
		'global_h3_hvcolor_id' => '#11bcf4',
		'global_h4_color_id' => '#323131',
		'global_h4_hvcolor_id' => '#11bcf4',
		'global_h5_color_id' => '#323131',
		'global_h5_hvcolor_id' => '#11bcf4',
		'global_h6_color_id' => '#323131',
		'global_h6_hvcolor_id' => '#11bcf4',	
		
		'post_meta_color_id' => '#000000',
		'team_box_color_id' => '#f7f7f7',
		
		'social_text_color_id' => '#ffffff',
		'social_icon_color_id' => '#545556',
		'social_hover_icon_color_id' => '#11bcf4',
		'testimonialbox_color_id' => '#f7f7f7',		
		'testimonial_pager_color_id' => '#dadada',
		'testimonial_activepager_color_id' => '#11bcf4',
		'gallery_filter_color_id' => '#11bcf4',
		
		'gallery_hover_bgcolor_id' => '#11bcf4',
		
		'gallery_filtertxt_color_id' => '#000000',
		'gallery_activefiltertxt_color_id' => '#ffffff',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Roboto', 'font-size' => '30px'),
		'global_h2_font_id' => array('font-family' => 'Roboto', 'font-size' => '25px'),
		'global_h3_font_id' => array('font-family' => 'Roboto', 'font-size' => '18px'),
		'global_h4_font_id' => array('font-family' => 'Roboto', 'font-size' => '15px'),
		'global_h5_font_id' => array('font-family' => 'Roboto', 'font-size' => '13px'),
		'global_h6_font_id' => array('font-family' => 'Roboto', 'font-size' => '10px'),
		'timing_box_font_id' => array('font-family' => 'Roboto', 'font-size' => '24px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		
		'head_bg_trans' => 0.6,
		'head_color_id' => '#f7f7f7',
		'head_info_color_id' => '#383939',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#FFFFFF',
		'menutxt_color_hover' => '#ffffff',
		'menutxt_color_active' => '#ffffff',
		'menu_size_id' => '16px',
		'sidebar_color_id' => '#f5f5f5',
		'sidebarborder_color_id' => '#d0cfcf',
		'sidebar_tt_color_id' => '#ffffff',
		'sidebar_ttbg_color_id' => '#282828',
		'sidebartxt_color_id' => '#3b3b3b',
		'sidebarlink_color_id' => '#3b3b3b',
		'sidebarlink_hover_color_id' => '#11bcf4',
		'flipbg_front_color_id' => '#edecec',
		'flipbg_back_color_id' => '#11bcf4',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '20px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		'timing_box_background' => '#00000',
		'timing_box_hover_background' => '#11bcf4',
		'timing_box_text_color' => '#ffffff',
		
		'news_box_background_color' => '#ffffff',
		'news_box_border_color' => '#e6e6e6',
		'news_box_hover_border_color' => '#11bcf4',
		'news_box_short_border_color' => '#3d3d3d',
		'news_box_short_hover_border_color' => '#11bcf4',
		
		'programm_box_border_color' => '#e6e6e6',
		'programm_box_hover_border_color' => '#11bcf4',
		
		'faq_tab_bg_color' => '#ffffff',
		'faq_tab_active_bg_color' => '#11bcf4',
		'faq_tab_left_border_color' => '#11bcf4',
		'faq_tab_icon_color' => '#000000',
		'faq_tab_active_icon_color' => '#ffffff',
		
		'product_title_bg_color' => '#efefef',
		'product_price_cart_bg_color' => '#11bcf4',
		'product_price_cart_color' => '#ffffff',
		
		'foot_layout_id' => '3',
		'footer_color_id' => '#000000',
		'footwdgtxt_color_id' => '#ffffff',
		'footer_title_color' => '#ffffff',
		'ptitle_font_id' =>  array('font-family' => 'Lato', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Roboto', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '1',
		'mnutxt_upcase_id' => '',
		'copyright_bg_color' => '#101010',
		'copyright_txt_color' => '#f8f8f8',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'strong'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'strong'),
		'recentpost_block_button' => __('Read More', 'strong'),
		
		'featured_block_button_bg' => '#383939',
		'featured_block_hover_button_bg' => '#11bcf4',
		
		'page-setting1_image' => array(  'url'=>''.get_template_directory_uri().'/images/featured_icon1.png'),
		'page-setting2_image' => array(  'url'=>''.get_template_directory_uri().'/images/featured_icon2.png'),
		'page-setting3_image' => array(  'url'=>''.get_template_directory_uri().'/images/featured_icon3.png'),
		'page-setting4_image' => array(  'url'=>''.get_template_directory_uri().'/images/featured_icon4.png'),
		
		'page-setting1' => '0',
		'page-setting2' => '0',
		'page-setting3' => '0',
		'page-setting4' => '0',
		'hide_boxes' => '',
		
		//Home Section1
		'section1_title' => '',
		'section1_bgcolor_id' => '#f7f7f7',
		'section1_bg_image' => '',
		'section1_bg_video' => '',
		'section1_content' => '<!--Column One -->
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
		'hide_boxes_section1' => '',
		//Home Section1
		
		//Home Section2
		'section2_title' => __('Everything About <span style="color:#11bcf4;">Fitness</span>', 'strong'),
		'section2_bgcolor_id' => '#f7f7f7',
		'section2_bg_image' => '',
		'section2_bg_video' => '',
		'section2_content' => '[columns size="columns-3"]
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
		'hide_boxes_section2' => '',
		//Home Section2	
		
		//Home Section3
		'section3_title' => __('<span style="color:#ffffff">Next classes</span><span style="color:#11bcf4"> Today</span>', 'strong'),
		'section3_bgcolor_id' => '',
		'section3_bg_image' => '',
		'section3_bg_video' => 'https://dl.dropboxusercontent.com/u/5560296/classess.mp4',
		'section3_content' => '
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
	teachername="with stev Johnson" last="last"]

[su_spacer size="50"]',
		'hide_boxes_section3' => '',
		//Home Section3	
		
		//Home Section4
		'section4_title' => __('Our <span style="color:#11bcf4;">Trainers</span>', 'strong'),
		'section4_bgcolor_id' => '#f7f7f7',
		'section4_bg_image' => '',
		'section4_bg_video' => '',
		'section4_content' => '[flipbox 
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
		'hide_boxes_section4' => '',
		//Home Section4		
		
		//Home Section5
		'section5_title' => __('Latest Gym <span style="color:#11bcf4;">News</span>', 'strong'),
		'section5_bgcolor_id' => '#ffffff',
		'section5_bg_image' => '',
		'section5_bg_video' => '',
		'section5_content' => '[posts-style3 show="3" cat="" excerptlength="24"]',
		'hide_boxes_section5' => '',
		//Home Section5		
		
		//Home Section6
		'section6_title' => __('', 'strong'),
		'section6_bgcolor_id' => '#11bcf4',
		'section6_bg_image' => '',
		'section5_bg_video' => '',
		'section6_content' => '
[promobox2 
	bgcolor="#11bcf4" 
    leftbordercolor="#11bcf4" 
    button="Get Started" 
    url="#"]
    <span style="color:#fff; font-size:30px;">
    Start a personal training session with one of our fitness <strong>trainers</strong>
    </span>
[/promobox2]
[su_spacer size="30"]',
		'hide_boxes_section6' => '',
		//Home Section6	
		
		//Home Section7
		'section7_title' => __('Why People Love <span style="color:#11bcf4;">us</span>', 'strong'),
		'section7_bgcolor_id' => '',
		'section7_bg_image' => ''.get_template_directory_uri().'/images/testimonials-section-background.jpg',
		'section7_bg_video' => '',
		'section7_content' => '[testimonials-rotator show="3"]',
		'hide_boxes_section7' => '',
		//Home Section7		
		
		//Home Section8
		'section8_title' => __('our <span style="color:#11bcf4;">programs</span>', 'strong'),
		'section8_bgcolor_id' => '#ffffff',
		'section8_bg_image' => '',
		'section8_bg_video' => '',
		'section8_content' => '[programms 
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
		'hide_boxes_section8' => '',
		//Home Section8		
		
		//Home Section9
		'section9_title' => __('', 'strong'),
		'section9_bgcolor_id' => '#f7f7f7',
		'section9_bg_image' => '',
		'section9_bg_video' => '',
		'section9_content' => '[su_row]
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
		'hide_boxes_section9' => '',
		//Home Section9	
		
		//Home Section10
		'section10_title' => __('List Type', 'strong'),
		'section10_bgcolor_id' => '#ffffff',
		'section10_bg_image' => '',
		'section10_bg_video' => '',
		'section10_content' => '',
		'hide_boxes_section10' => '1',
		//Home Section10
		
		//Home Section11
		'section11_title' => __('Cool <span style="color:#11bcf4;">Products</span>', 'strong'),
		'section11_bgcolor_id' => '#ffffff',
		'section11_bg_image' => '',
		'section11_bg_video' => '',
		'section11_content' => '[ourproduct 
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
		'hide_boxes_section11' => '',
		//Home Section11	
		
		
		//Footer Column 1
		'foot_cols1_title' => __('Opening <span>Hours</span>', 'strong'),
		'foot_cols1_content' => '<p>Sed suscipit mauris nec mauris vulputate, a posuere libero congue. Nam laoreet elit eu erat pulvinar, et efficitur nibh euismod. Proin venenatis orci sit amet nisl finibus vehicula</p><p>Nam metus lorem, hendrerit quis ante eget, lobortis elementum neque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet. Cras in convallis ipsum. Phasellus tortor turpis.</p>',
		//Footer Column 1	
		
		//Footer Column 2
		'foot_cols2_title' => __('Recent <span>Posts</span>', 'strong'),
		'foot_cols2_content' => '[footerposts show="2"]',
		//Footer Column 2	
		
		//Footer Column 3
		'foot_cols3_title' => __('SKT <span style="color:#11bcf4;">Strong</span>', 'strong'),
		'foot_cols3_content' => '<p>123 Bridge Street,<br/> New York, NY 666555<br/> Phone: 1.800.555.6789<br/> Email: <a href="mailto:support@sitename.com">support@sitename.com</a><br/> Web: <a href="http://www.sktthemes.net">sktthemes.net</a></p>[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]	
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
[/social_area]',
		//Footer Column 3	
		
		//Footer Column 4
		'foot_cols4_title' => __('Latest Tweets', 'strong'),
		'foot_cols4_content' => '<a class="twitter-timeline" data-chrome="nofooter noheader noborders noscroll noscrollbar transparent" data-tweet-limit="2" data-link-color="#fff"  data-theme="dark" data-dnt="true" href="https://twitter.com/sktthemes"  data-widget-id="353086898853531648">Tweets by @sktthemes</a>',
		//Footer Column 4		
																	
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => '',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>