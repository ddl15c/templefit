<?php 
/**
 * The Custom Style for Strong
 *
 * Loads the dynamically generated Css in the header of the template.
 *
 * @package strong
 * 
 * @since strong 1.0
 */
?>
<?php function complete_dynamic_css() { ?>
<?php global $complete; ?>
<style type="text/css">

/*Fixed Background*/
<?php if(!empty($complete['background_fixed'])){ echo 'html body.custom-background{ background-attachment:fixed;}';} ?>

	/*BOXED LAYOUT*/
	.site_boxed .layer_wrapper, body.home.site_boxed #slidera {width: <?php echo $complete['center_width']; ?>%; margin: 0 <?php $centerwidth = $complete['center_width']; echo (100- $centerwidth)/2; ?>%;
	background: <?php echo $complete['content_bg_color']; ?>;}
	.site_boxed .stat_bg, .site_boxed .stat_bg_overlay{width: <?php echo $complete['center_width']; ?>%;}
	.site_boxed .social_buttons{background: <?php echo $complete['content_bg_color']; ?>;}
	.site_boxed .center {width: 95%!important;margin: 0 auto;}
	.site_boxed .head_top .center{ width:95%!important;}



/*Site Content Text Style*/
<?php $content_font = $complete['content_font_id']; ?>
body, input, textarea{ 
	<?php if(!empty($content_font['font-family'])){ ?>font-family:<?php echo $content_font['font-family']; ?>; <?php } ?>
	<?php if(!empty($content_font['font-size'])){ ?>font-size:<?php echo $content_font['font-size']; ?>; <?php } ?>
}

.single_post .single_post_content .tabs li a:link, .single_post .single_post_content .tabs li a:visited{ color:<?php echo $complete['primtxt_color_id']; ?>;}

<?php if ( is_page()) { ?>
.page_head{ background:<?php echo $complete['page_header_color']; ?>; color:<?php echo $complete['page_header_txtcolor']; ?>;}
.page_head .postitle{color:<?php echo $complete['page_header_txtcolor']; ?>;}	
.page_head .layerbread a:link, .page_head .layerbread a:visited{color:<?php echo $complete['page_header_txtcolor']; ?>;}	
.page_head_bg{background:url(<?php echo $complete['pageheader_bg_image'] ?>);}
<?php } ?>

.head_bg{background:url(<?php echo $complete['head_bg_image'] ?>);}

<?php if ( is_single() || is_category() || is_archive() || is_tag() || is_author() || (get_post_type() == 'product') ) { ?>
.post_head, .author_div{ background:<?php echo $complete['post_header_color']; ?>;}
.post_head_bg, .author_div_bg{background:url(<?php echo $complete['postheader_bg_image'] ?>);}
<?php } ?>

/*Feattured Boxes Section*/
.featured_area_bg{background:url(<?php echo $complete['homeblock_bg_setting'] ?>);}
.featured_area{background-color:<?php echo $complete['homeblock_color_id'] ?>;}
.featured_block img{height:<?php echo $complete['featured_image_height'] ?>; width:<?php echo $complete['featured_image_width'] ?>} 
.featured_block{background-color:<?php echo $complete['featured_block_bg'] ?>;}

.sktmore, .view-all-btn a{background-color:<?php echo $complete['featured_block_button_bg'] ?>;}
.sktmore:hover, .view-all-btn a:hover{background-color:<?php echo $complete['featured_block_hover_button_bg'] ?>;}

/*Home Section 1*/
.home1_section_area{background-color:<?php echo $complete['section1_bgcolor_id'] ?>;}
.home1_section_area_bg{background:url(<?php echo $complete['section1_bg_image'] ?>);}

/*Home Section 2*/
.home2_section_area{background-color:<?php echo $complete['section2_bgcolor_id'] ?>;}
.home2_section_area_bg{background:url(<?php echo $complete['section2_bg_image'] ?>);}

/*Home Section 3*/
.home3_section_area{background-color:<?php echo $complete['section3_bgcolor_id'] ?>;}
.home3_section_area_bg{background:url(<?php echo $complete['section3_bg_image'] ?>);}

/*Home Section 4*/
.home4_section_area{background-color:<?php echo $complete['section4_bgcolor_id'] ?>;}
.home4_section_area_bg{background:url(<?php echo $complete['section4_bg_image'] ?>);}

/*Home Section 5*/
.home5_section_area{background-color:<?php echo $complete['section5_bgcolor_id'] ?>;}
.home5_section_area_bg{background:url(<?php echo $complete['section5_bg_image'] ?>);}

/*Home Section 6*/
.home6_section_area{background-color:<?php echo $complete['section6_bgcolor_id'] ?>;}
.home6_section_area_bg{background:url(<?php echo $complete['section6_bg_image'] ?>);}

/*Home Section 7*/
.home7_section_area{background-color:<?php echo $complete['section7_bgcolor_id'] ?>;}
.home7_section_area_bg{background:url(<?php echo $complete['section7_bg_image'] ?>);}

/*Home Section 8*/
.home8_section_area{background-color:<?php echo $complete['section8_bgcolor_id'] ?>;}
.home8_section_area_bg{background:url(<?php echo $complete['section8_bg_image'] ?>);}

/*Home Section 9*/
.home9_section_area{background-color:<?php echo $complete['section9_bgcolor_id'] ?>;}
.home9_section_area_bg{background:url(<?php echo $complete['section9_bg_image'] ?>);}

/*Home Section 10*/
.home10_section_area{background-color:<?php echo $complete['section10_bgcolor_id'] ?>;}
.home10_section_area_bg{background:url(<?php echo $complete['section10_bg_image'] ?>);}

/*Home Section 11*/
.home11_section_area{background-color:<?php echo $complete['section11_bgcolor_id'] ?>;}
.home11_section_area_bg{background:url(<?php echo $complete['section11_bg_image'] ?>);}
/*-----------------------------COLORS------------------------------------*/
		/*Header Color*/
		.menusection{ position:relative!important; background-color: rgba(<?php echo complete_hex2rgb($complete['bgmenu_color_id']);?>, <?php if(empty($complete['head_transparent'])){ echo '1'; }else { echo $complete['head_bg_trans'];} ?>); border-top-color:<?php echo $complete['menu_border_top'];?>; border-bottom-color:<?php echo $complete['menu_border_bottom'];?>;}
		
		.header{ position:relative!important; background-color: rgba(<?php echo complete_hex2rgb($complete['head_color_id']);?>, <?php if(empty($complete['head_transparent'])){ echo '1'; }else { echo $complete['head_bg_trans'];} ?>);}
		
		.page .menusection, .single .menusection, .archive .menusection, .search .menusection{ position:relative!important; background-color: rgba(<?php echo complete_hex2rgb($complete['bgmenu_color_id']);?>, 1)!important;}
		
		
		<?php if('noslider' == $complete['slider_type_id']){ ?>
		/*Header Color*/
		body .header{ position:relative!important; background:<?php echo $complete['head_color_id']; ?>;}
		.page #slidera, .single #slidera, .archive #slidera, .search #slidera, .error404 #slidera{ height:auto!important;}
		<?php } ?>
		
		/*Head Top Bar Color*/
		.head-info-area{background:<?php echo $complete['head_info_color_id']; ?>;}
		
		<?php if(!empty($complete['head_transparent'])){ ?>
		/*Boxed Header should have boxed width*/
		body.home.site_boxed .header_wrap.layer_wrapper{width: <?php echo $complete['center_width']; ?>%;float: left;margin: 0 <?php $centerwidth = $complete['center_width']; echo (100- $centerwidth)/2; ?>%;}
		<?php } ?>

		/*LOGO*/
		.logo img{height:<?php echo $complete['logo_image_height'] ?>; width:<?php echo $complete['logo_image_width'] ?>; margin-top:<?php echo $complete['logo_margin_top'] ?>;} 

		<?php $logofont = $complete['logo_font_id']; ?>
		.logo h2, .logo h1, .logo h2 a:link, .logo h2 a:visited, .logo h1 a:link, .logo h1 a:visited, .logo h2 a:hover, .logo h1 a:hover{ 
			<?php if(!empty($logofont['font-family'])){ ?>font-family:'<?php echo $logofont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($logofont['font-size'])){ ?>font-size:<?php echo $logofont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['logo_color_id']; ?>;
		}
		/*HEADER TEXT BAR*/
		<?php $tpbtfont = $complete['tpbt_font_id']; ?>
		.phonenumber{ 
			<?php if(!empty($tpbtfont['font-family'])){ ?>font-family:'<?php echo $tpbtfont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($tpbtfont['font-size'])){ ?>font-size:<?php echo $tpbtfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['tpbt_color_id']; ?>;
		}	
		
		<?php $tpemailfont = $complete['tpemail_color_id']; ?>
		.phonenumber a{ 
			color:<?php echo $complete['tpemail_color_id']; ?>!important;
		}
		
		.head-info-area a:hover{ 
			color:<?php echo $complete['tpbt_hvcolor_id']; ?>;
		}		
		
		a:link, a:visited{color:<?php echo $complete['global_link_color_id']; ?>;}
		a:hover{color:<?php echo $complete['global_link_hvcolor_id']; ?>;}
		
		/*Slider Title*/
		<?php $sldttlefont = $complete['sldtitle_font_id']; ?>
		.title{ 
			<?php if(!empty($sldttlefont['font-family'])){ ?>font-family:'<?php echo $sldttlefont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldttlefont['font-size'])){ ?>font-size:<?php echo $sldttlefont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slidetitle_color_id']; ?>; background-color: rgba(<?php echo complete_hex2rgb($complete['slide_title_desc_bg']);?>, <?php echo $complete['slide_title_desc_opacity']; ?>)!important;
		}	
		
		<?php $slddescfont = $complete['slddesc_font_id']; ?>
		.slidedesc{ 
			<?php if(!empty($slddescfont['font-family'])){ ?>font-family:'<?php echo $slddescfont['font-family']; ?>'; <?php } ?>
			<?php if(!empty($slddescfont['font-size'])){ ?>font-size:<?php echo $slddescfont['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['slddesc_color_id']; ?>; background-color: rgba(<?php echo complete_hex2rgb($complete['slide_title_desc_bg']);?>, <?php echo $complete['slide_title_desc_opacity']; ?>)!important;
		}	
		
		<?php $sldbtn = $complete['sldbtn_font_id']; ?>
		.slidebtn{ 
			<?php if(!empty($sldbtn['font-family'])){ ?>font-family:'<?php echo $sldbtn['font-family']; ?>'; <?php } ?>
			<?php if(!empty($sldbtn['font-size'])){ ?>font-size:<?php echo $sldbtn['font-size']; ?>;<?php } ?>;
		}
		.slidebtn a{ 
			color:<?php echo $complete['sldbtntext_color_id']; ?>; background-color:<?php echo $complete['sldbtn_color_id']; ?>;
		}	
		.slidebtn a:hover{background-color:<?php echo $complete['sldbtn_hvcolor_id']; ?>}	
		.nivo-controlNav a{background-color:<?php echo $complete['slide_pager_color_id']; ?>}
		.nivo-controlNav a.active{background-color:<?php echo $complete['slide_active_pager_color_id']; ?>}		
		
		.theme-default a.nivo-prevNav, .theme-default a.nivo-nextNav{background-color:<?php echo $complete['slide_prev_color_id']; ?>}
		.theme-default a.nivo-prevNav:hover, .theme-default a.nivo-nextNav:hover{background-color:<?php echo $complete['slide_next_color_id']; ?>}		
		
		
		/* Global H1 */	
				<?php $global_h1_font = $complete['global_h1_font_id']; ?>
		h1, h1 a:link, h1 a:visited{ 
			<?php if(!empty($global_h1_font['font-family'])){ ?>font-family:'<?php echo $global_h1_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h1_font['font-size'])){ ?>font-size:<?php echo $global_h1_font['font-size']; ?>;<?php } ?>
			color:<?php echo $complete['global_h1_color_id']; ?>;
		}
		
		h1 a:hover{ 
			color:<?php echo $complete['global_h1_hvcolor_id']; ?> !important;
		}
		
		/* Global H2 */	
				<?php $global_h2_font = $complete['global_h2_font_id']; ?>
		h2, h2 a:link, h2 a:visited{ 
			<?php if(!empty($global_h2_font['font-family'])){ ?>font-family:'<?php echo $global_h2_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h2_font['font-size'])){ ?>font-size:<?php echo $global_h2_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h2_color_id']; ?>;
		}
		
		h2:hover a, h2 a:hover{ 
			color:<?php echo $complete['global_h2_hvcolor_id']; ?> !important;
		}
		
		/* Global H3 */	
				<?php $global_h3_font = $complete['global_h3_font_id']; ?>
		h3, h3 a:link, h3 a:visited{ 
			<?php if(!empty($global_h3_font['font-family'])){ ?>font-family:'<?php echo $global_h3_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h3_font['font-size'])){ ?>font-size:<?php echo $global_h3_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h3_color_id']; ?>;
		}
		
		h3 a:hover, .left-fitbox:hover .left-fit-title h3, .right-fitbox:hover .right-fit-title h3, .post_block_style3:hover .styleinfo h3 a, .styleinfo:hover h3 a, .post_block_style1:hover .styleinfo h3 a, .styleinfo:hover h3 a, .post_block_style2:hover .styleinfo h3 a, .styleinfo:hover h3 a{ 
			color:<?php echo $complete['global_h3_hvcolor_id']; ?>;
		}
		
		/* Global H4 */	
				<?php $global_h4_font = $complete['global_h4_font_id']; ?>
		h4, h4 a:link, h4 a:visited{ 
			<?php if(!empty($global_h4_font['font-family'])){ ?>font-family:'<?php echo $global_h4_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h4_font['font-size'])){ ?>font-size:<?php echo $global_h4_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h4_color_id']; ?>;
		}
		
		h4 a:hover{ 
			color:<?php echo $complete['global_h4_hvcolor_id']; ?> !important;
		}	
		
		/* Global H5 */	
				<?php $global_h5_font = $complete['global_h5_font_id']; ?>
		h5, h5 a:link, h5 a:visited{ 
			<?php if(!empty($global_h5_font['font-family'])){ ?>font-family:'<?php echo $global_h5_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h5_font['font-size'])){ ?>font-size:<?php echo $global_h5_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h5_color_id']; ?>;
		}
		
		h5 a:hover{ 
			color:<?php echo $complete['global_h5_hvcolor_id']; ?> !important;
		}	
		
		/* Global H6 */	
				<?php $global_h6_font = $complete['global_h6_font_id']; ?>
		h6, h6 a:link, h6 a:visited{ 
			<?php if(!empty($global_h6_font['font-family'])){ ?>font-family:'<?php echo $global_h6_font['font-family']; ?>'; <?php } ?>
			<?php if(!empty($global_h6_font['font-size'])){ ?>font-size:<?php echo $global_h6_font['font-size']; ?>;<?php } ?>
		color:<?php echo $complete['global_h6_color_id']; ?>;
		}
		
		h6 a:hover{ 
			color:<?php echo $complete['global_h6_hvcolor_id']; ?> !important;
		}
		
		/* Timing Box */	
				<?php $global_timing_font = $complete['timing_box_font_id']; ?>
		.class-time-name, .class-timing{ 
			<?php if(!empty($global_timing_font['font-family'])){ ?>font-family:'<?php echo $global_timing_font['font-family']; ?>'; <?php } ?> color:<?php echo $complete['timing_box_text_color']; ?>;}		
		.class-time-name{<?php if(!empty($global_timing_font['font-size'])){ ?>font-size:<?php echo $global_timing_font['font-size']; ?>;<?php } ?>}
		
		/* News Box Color Option */
		.styleinfo{border-left-color:<?php echo $complete['news_box_border_color'];?>; border-right-color:<?php echo $complete['news_box_border_color'];?>; border-bottom-color:<?php echo $complete['news_box_border_color'];?>; background-color:<?php echo $complete['news_box_background_color'];?>}
		.styleinfo:hover, .post_block_style3:hover .styleinfo, .post_block_style1:hover .styleinfo, .post_block_style2:hover .styleinfo{border-bottom-color:<?php echo $complete['news_box_hover_border_color'];?>;}
		.shortborder{border-bottom-color:<?php echo $complete['news_box_short_border_color'];?>; }
		.post_block_style3:hover .shortborder, .post_block_style1:hover .shortborder, .post_block_style2:hover .shortborder{border-bottom-color:<?php echo $complete['news_box_short_hover_border_color'];?>;}
		
		/* Programm Box Color Option */
		.progcontentarea{border-left-color:<?php echo $complete['programm_box_border_color'];?>; border-right-color:<?php echo $complete['programm_box_border_color'];?>; border-bottom-color:<?php echo $complete['programm_box_border_color'];?>; border-top-color:<?php echo $complete['programm_box_border_color'];?>;}
		
		.enrollbox{border-top-color:<?php echo $complete['programm_box_border_color'];?>;}
		.programm-box:hover .progcontentarea{border-bottom-color:<?php echo $complete['programm_box_hover_border_color'];?>;}
		
		/* Post Meta Color */
		.post_block_style1_meta, .post_block_style1_meta a:link, .post_block_style1_meta a:visited, .post_block_style2_meta, .post_block_style2_meta a:link, .post_block_style2_meta a:visited, .post_block_style3_meta, .post_block_style3_meta a:link, .post_block_style3_meta a:visited, .single_metainfo, .single_metainfo a:link, .single_metainfo a:visited{ 
			color:<?php echo $complete['post_meta_color_id']; ?>;
		}
		
		/* Team Box Background Color */
		.team-infobox{ 
			background-color:<?php echo $complete['team_box_color_id']; ?>;
		}
		
		/* Social Icon Background Color */
		.social-icons a:link, .social-icons a:visited{ 
			background-color:<?php echo $complete['social_icon_color_id']; ?>;
			color:<?php echo $complete['social_text_color_id']; ?>;
		}	
		
		/* Social Icon Hover Background Color */
		.social-icons a:hover{ 
			background-color:<?php echo $complete['social_hover_icon_color_id']; ?>;
		}
		
		/* Teambox Background Color */
		.testimonial-box{ 
			background-color:<?php echo $complete['testimonialbox_color_id']; ?>;
		}	
		.testimonial-box:after{ 
			border-top-color:<?php echo $complete['testimonialbox_color_id']; ?>;
		}	
		
		/* Pager Color */
		.bx-wrapper .bx-pager.bx-default-pager a:link, .bx-wrapper .bx-pager.bx-default-pager a:visited{ 
			background:<?php echo $complete['testimonial_pager_color_id']; ?>;
		}	
		
		/* Pager Active Color */
		.bx-wrapper .bx-pager.bx-default-pager a:hover, .bx-wrapper .bx-pager.bx-default-pager a.active{ 
			background:<?php echo $complete['testimonial_activepager_color_id']; ?>;
		}
		/* Gallery Filter Active Bgcolor */
		li.active a:link, li.active a:visited{ 
			background-color:<?php echo $complete['gallery_filter_color_id']; ?>;
			color:<?php echo $complete['gallery_activefiltertxt_color_id']; ?> !important;
		}	
		.portfolio-area li:hover{background: <?php echo $complete['gallery_hover_bgcolor_id']; ?> url('<?php echo get_template_directory_uri();?>/images/icon-zoom.png') no-repeat scroll 50% 50%;}
		
		/* Gallery Filter Active Bgcolor */
		.portfolio-categ li a:link, .portfolio-categ li a:visited{ 
			color:<?php echo $complete['gallery_filtertxt_color_id']; ?>;
		}			
		
		/* Skills Bar Background Color */
		.skill-bg{ 
			background-color:<?php echo $complete['skillsbar_bgcolor_id']; ?>;
		}	
		
		/* Skills Bar Text Color */
		.skillbar-title{ 
			color:<?php echo $complete['skillsbar_text_color_id']; ?>;
		}	

		/* FAQ */
		
		.su-spoiler-closed .su-spoiler-title{ 
			background-color:<?php echo $complete['faq_tab_bg_color']; ?>;
		}
		
		.su-spoiler-title{ 
			background-color:<?php echo $complete['faq_tab_active_bg_color']; ?>;
		}
		
		.su-spoiler-closed .su-spoiler-title{ 
			border-left-color:<?php echo $complete['faq_tab_left_border_color']; ?>;
		}
		
		.su-spoiler-closed .su-spoiler-title, .su-spoiler-icon-plus.su-spoiler-closed .su-spoiler-icon::before{ 
			color:<?php echo $complete['faq_tab_icon_color']; ?>;
		}
		
		.su-spoiler-title, .su-spoiler-icon-plus .su-spoiler-icon::before{ 
			color:<?php echo $complete['faq_tab_active_icon_color']; ?>;
		}	
		
		.prodtitle{ 
			background-color:<?php echo $complete['product_title_bg_color']; ?>;
		}	
		
		.areapricecart{ 
			background-color:<?php echo $complete['product_price_cart_bg_color']; ?>;
		}	
		
		.prodcart, .prodprice, .prodcart a{ 
			color:<?php echo $complete['product_price_cart_color']; ?>;
		}			
															
		#simple-menu{color:<?php echo $complete['menutxt_color_id']; ?>;}
		body.home.has_trans_header #simple-menu{color:<?php echo $complete['trans_header_color']; ?>;}
		span.desc{color:<?php echo $complete['logo_color_id']; ?>;}

		/*MENU Text Color*/
		#topmenu ul li a:link, #topmenu ul li a:visited{color:<?php echo $complete['menutxt_color_id'] ?>;}
		#topmenu ul li.menu_hover a:link, #topmenu ul li.menu_hover a:visited{border-color:<?php echo $complete['menutxt_color_hover']; ?>;}
		#topmenu ul li.menu_hover>a:link, #topmenu ul li.menu_hover>a:visited, body.has_trans_header.home #topmenu ul li.menu_hover>a:link, body.has_trans_header.home #topmenu ul li.menu_hover>a:visited{color:<?php echo $complete['menutxt_color_hover'] ?>;}
		#topmenu ul li.current-menu-item>a:link, #topmenu ul li.current-menu-item>a:visited, #topmenu ul li.current-menu-parent>a:link, #topmenu ul li.current_page_parent>a:visited, #topmenu ul li.current-menu-ancestor>a:link, #topmenu ul li.current-menu-ancestor>a:visited{color:<?php echo $complete['menutxt_color_active']; ?>;}
		#topmenu ul li ul{border-color:<?php echo $complete['menutxt_color_hover']; ?> transparent transparent transparent;}
		#topmenu ul.menu>li:hover:after{background-color:<?php echo $complete['menutxt_color_hover']; ?>;}
		#topmenu ul li ul li a:hover{color:<?php echo $complete['menutxt_color_active']; ?>;}
		
		#topmenu .menu_hover > a:link, #topmenu .menu_hover > a:visited, #topmenu ul li.current-menu-item>a:link, #topmenu ul li.current-menu-item>a:visited, #topmenu ul li.current-menu-parent>a:link, #topmenu ul li.current_page_parent>a:visited, #topmenu ul li.current-menu-ancestor>a:link, #topmenu ul li.current-menu-ancestor>a:visited{ background-color:<?php echo $complete['mnbg_color_id']; ?>}
		
		#topmenu ul.menu ul li{background-color:<?php echo $complete['submnbg_color_id']; ?>;}		
		
		#topmenu ul.sub-menu li a{color:<?php echo $complete['submnu_textcolor_id']; ?>;}	
		#topmenu ul.sub-menu li a:hover, #topmenu li.menu_highlight_slim:hover, #topmenu ul.sub-menu li.current_page_item a,  #topmenu ul.sub-menu li.current-menu-item a{background-color:<?php echo $complete['mnshvr_color_id']; ?> !important;}	

		.sidr{ background-color:<?php echo $complete['mobbg_color_id']; ?>;}
		.pad_menutitle{ background-color:<?php echo $complete['mobbgtop_color_id']; ?>;}
		.sidr ul li a, .sidr ul li span, .sidr ul li ul li a, .sidr ul li ul li span{color:<?php echo $complete['mobmenutxt_color_id']; ?>;}	
		
		#simple-menu .fa-bars{color:<?php echo $complete['mobtoggle_color_id']; ?> !important;}
		.pad_menutitle .fa-bars, .pad_menutitle .fa-times{color:<?php echo $complete['mobtoggleinner_color_id']; ?> !important;}				

		.head_soc .social_bookmarks a:link, .head_soc .social_bookmarks a:visited{color:<?php echo $complete['menutxt_color_id'] ?>;}
		.head_soc .social_bookmarks.bookmark_hexagon a:before {border-bottom-color: rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		.head_soc .social_bookmarks.bookmark_hexagon a i {background:rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		.head_soc .social_bookmarks.bookmark_hexagon a:after { border-top-color:rgba(<?php echo complete_hex2rgb($complete['menutxt_color_id']);?>, 0.3)!important;}
		

<?php if($complete['sec_color_id']){ ?>
		/*BASE Color*/
		.heading_border, #wp-calendar #today, .thn_post_wrap .more-link:hover, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, #searchsubmit, .complete_pagenav a:hover, .nav-box a:hover .left_arro, .nav-box a:hover .right_arro, .pace .pace-progress, .homeposts_title .menu_border, .ast_login_widget #loginform #wp-submit, .prog_wrap, .lts_layout1 a.image, .lts_layout2 a.image, .lts_layout3 a.image, .rel_tab:hover .related_img, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .img_hover, p.form-submit #submit, .optimposts .type-product a.button.add_to_cart_button{background:<?php echo $complete['sec_color_id'] ?>;} 
		
		.share_active, .comm_auth a, .logged-in-as a, .citeping a, .lay3 h2 a:hover, .lay4 h2 a:hover, .lay5 .postitle a:hover, .nivo-caption p a, .acord_text p a, .org_comment a, .org_ping a, .contact_submit input:hover, .widget_calendar td a, .ast_biotxt a, .ast_bio .ast_biotxt h3, .lts_layout2 .listing-item h2 a:hover, .lts_layout3 .listing-item h2 a:hover, .lts_layout4 .listing-item h2 a:hover, .lts_layout5 .listing-item h2 a:hover, .rel_tab:hover .rel_hover, .post-password-form input[type~=submit], .bio_head h3, .blog_mo a:hover, .ast_navigation a:hover, .lts_layout4 .blog_mo a:hover{color:<?php echo $complete['sec_color_id'] ?>;}
		#home_widgets .widget .thn_wgt_tt, #sidebar .widget .thn_wgt_tt, #footer .widget .thn_wgt_tt, .astwt_iframe a, .ast_bio .ast_biotxt h3, .ast_bio .ast_biotxt a, .nav-box a span, .lay2 h2.postitle:hover a{color:<?php echo $complete['sec_color_id'] ?>;}
		.pace .pace-activity{border-top-color: <?php echo $complete['sec_color_id']; ?>!important;border-left-color: <?php echo $complete['sec_color_id']; ?>!important;}
		.pace .pace-progress-inner{box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -webkit-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;
		  -moz-box-shadow: 0 0 10px <?php echo $complete['sec_color_id'] ?>, 0 0 5px <?php echo $complete['sec_color_id']; ?>;}
		
		.fotorama__thumb-border, .ast_navigation a:hover{ border-color:<?php echo $complete['sec_color_id'] ?>!important;}
		
		
		/*Text Color on BASE COLOR Element*/
		.icon_round a, #wp-calendar #today, .moretag:hover, .search_term #searchsubmit, .error_msg #searchsubmit, .complete_pagenav a:hover, .ast_login_widget #loginform #wp-submit, #searchsubmit, .prog_wrap, .rel_tab .related_img i, .lay1 h2.postitle a, .nivoinner .slide_button_wrap .lts_button, #accordion .slide_button_wrap .lts_button, .lts_layout1 .icon_wrap a, .lts_layout2 .icon_wrap a, .lts_layout3 .icon_wrap a, .lts_layout1 .icon_wrap a:hover{color:<?php echo $complete['sectxt_color_id']; ?>;}
		.thn_post_wrap .listing-item .moretag:hover, body .lts_layout1 .listing-item .title, .lts_layout2 .img_wrap .complete_plus, .img_hover .icon_wrap a, body .thn_post_wrap .lts_layout1 .icon_wrap a, .wpcf7-submit, .woo-slider #post_slider li.sale .woo_sale, p.form-submit #submit, .optimposts .type-product a.button.add_to_cart_button{color:<?php echo $complete['sectxt_color_id']; ?>;}

<?php } ?>



/*Sidebar Widget Background Color */
#sidebar .widget{ background:<?php echo $complete['sidebar_color_id']; ?>;}
#sidebar .widget li{border-color:<?php echo $complete['sidebarborder_color_id']; ?>;}
/*Widget Title Color */
#sidebar h3{color:<?php echo $complete['sidebar_tt_color_id'] ?>; background:<?php echo $complete['sidebar_ttbg_color_id']; ?>;}
#sidebar #sidebar .widget, #sidebar .widget .widget_wrap{ color:<?php echo $complete['sidebartxt_color_id'] ?>;}
#sidebar .widget .widgettitle, #sidebar .widget .widget-title a:link, #sidebar .widget .widgettitle a:visited{font-size:<?php echo $complete['wgttitle_size_id']; ?>;}
#sidebar .widget li a, #sidebar .widget a{ color:<?php echo $complete['sidebarlink_color_id'] ?>;}
#sidebar .widget li a:hover, #sidebar .widget a:hover{ color:<?php echo $complete['sidebarlink_hover_color_id'] ?>;}

.flipcard .front{background-color:<?php echo $complete['flipbg_front_color_id'] ?>; border-color:<?php echo $complete['flipborder_front_color_id'] ?>;}
.flipcard .back{background-color:<?php echo $complete['flipbg_back_color_id'] ?>; border-color:<?php echo $complete['flipborder_back_color_id'] ?>;}

.divider5 span, .divider6 span{background-color:<?php echo $complete['divider_color_id'] ?>;}
.divider1, .divider2, .divider3, .divider4, .divider5, .divider6, .fusion-title .title-sep, .fusion-title.sep-underline, .product .product-border, .fusion-title .title-sep{border-color:<?php echo $complete['divider_color_id'] ?>;}

.timeline-both-side li .timeline-description{background-color:<?php echo $complete['timebox_color_id'] ?>;}
.timeline-both-side:before, .timeline-both-side li .border-line, .timeline-both-side li .border-line:before{background-color:<?php echo $complete['timeboxborder_color_id'] ?>;}

.timeline-both-side:after, .timeline-both-side li .timeline-description{border-color:<?php echo $complete['timeboxborder_color_id'] ?>;}
.griditem{background-color:<?php echo $complete['gridbox_color_id'] ?>;}
.griditem{border-color:<?php echo $complete['gridboxborder_color_id'] ?>;}

.class-time-box{background-color: rgba(<?php echo complete_hex2rgb($complete['timing_box_background']);?>, 0.3);}
.class-time-box:hover{background-color:<?php echo $complete['timing_box_hover_background'] ?>;}
.class-time-name, .class-time-times ul li{color:<?php echo $complete['timing_box_text_color']?>;}

<?php if($complete['footer_title_color']){ ?>
#footer .footercols1 h3, #footer .footercols2 h3, #footer .footercols3 h3, #footer .footercols4 h3{color:<?php echo $complete['footer_title_color']; ?>;}
<?php } ?>

<?php if($complete['footer_color_id']){ ?>
/*FOOTER WIDGET COLORS*/
#footer{background: <?php echo $complete['footer_color_id']; ?>;}
#footer .footercols1, #footer .footercols2, #footer .footercols3, #footer .footercols4, .footer-post-area ul li h4, .footer-post-area ul li h4 a:link, .footer-post-area ul li h4 a:visited{color:<?php echo $complete['footwdgtxt_color_id']; ?>;}
<?php } ?>
/*COPYRIGHT COLORS*/
#copyright{background: <?php echo $complete['copyright_bg_color']; ?>;}
.copytext, .copytext a:link, .copytext a:visited{color: <?php echo $complete['copyright_txt_color']; ?>;}

.foot_soc .social_bookmarks a:link, .foot_soc .social_bookmarks a:visited{color:<?php echo $complete['copyright_txt_color'] ?>;}
.foot_soc .social_bookmarks.bookmark_hexagon a:before {border-bottom-color: rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}
.foot_soc .social_bookmarks.bookmark_hexagon a i {background:rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}
.foot_soc .social_bookmarks.bookmark_hexagon a:after { border-top-color:rgba(<?php echo complete_hex2rgb($complete['copyright_txt_color']);?>, 0.3);}


<?php if(get_background_color() == ''){?>#frontsidebar, .fixed_wrap.fixindex.dummypost, #slidera{ background-color:#<?php echo get_background_color(); ?>;} <?php } ?>

/*-------------------------------------TYPOGRAPHY--------------------------------------*/

/*Post Titles and headings Font*/
.postitle, .product_title{ font-family:<?php echo $complete['ptitle_font_id']['font-family']; ?>;}

/*Menu Font*/
#topmenu ul li a{ font-family:<?php echo $complete['mnutitle_font_id']['font-family']; ?>;}

<?php if((!empty($complete['txt_upcase_id']))){ ?>
.midrow_block h3, .lay1 h2.postitle, .more-link, .moretag, .single_post .postitle, .related_h3, .comments_template #comments, #comments_ping, #reply-title, #submit, #sidebar .widget .widgettitle, #sidebar .widget .widgettitle a, .search_term h2, .search_term #searchsubmit, .error_msg #searchsubmit, #footer .widgets .widgettitle, .home_title, body .lts_layout1 .listing-item .title, .lay4 h2.postitle, .lay2 h2.postitle a, #home_widgets .widget .widgettitle, .product_title, .page_head h1, .featured_area h2, .featured_block h3, h1, h2, h3, h4, h5, h6{ text-transform:uppercase; letter-spacing:0;}
<?php } ?>

<?php if((!empty($complete['mnutxt_upcase_id']))){ ?>
#topmenu ul li a{ text-transform:uppercase; letter-spacing:1px;}
<?php } ?>

#topmenu ul li a{font-size:<?php echo $complete['menu_size_id']; ?>;}
#topmenu ul li {line-height: <?php echo $complete['menu_size_id']; ?>;}

<?php if($complete['primtxt_color_id']){ ?>
/*Body Text Color*/
body, .home_cat a, .contact_submit input, .comment-form-comment textarea{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.single_post_content .tabs li a{ color:<?php echo $complete['primtxt_color_id']; ?>;}
.thn_post_wrap .listing-item .moretag{ color:<?php echo $complete['primtxt_color_id']; ?>;}
<?php } ?>	
	

<?php if($complete['title_txt_color_id']){ ?>
/*Post Title */
.postitle, .postitle a, .nav-box a, h3#comments, h3#comments_ping, .comment-reply-title, .related_h3, .nocomments, .lts_layout2 .listing-item h2 a, .lts_layout3 .listing-item h2 a, .lts_layout4 .listing-item h2 a, .author_inner h5, .product_title, .woocommerce-tabs h2, .related.products h2, .optimposts .type-product h2.postitle a, .woocommerce ul.products li.product h3{ text-decoration:none; color:<?php echo $complete['title_txt_color_id'] ?>;}
<?php } ?>

/*Woocommerce*/
.optimposts .type-product a.button.add_to_cart_button:hover{background-color:<?php echo $complete['sectxt_color_id'] ?>;color:<?php echo $complete['sec_color_id']; ?>;} 
.optimposts .lay2_wrap .type-product span.price, .optimposts .lay3_wrap .type-product span.price, .optimposts .lay4_wrap  .type-product span.price, .optimposts .lay4_wrap  .type-product a.button.add_to_cart_button{color:<?php echo $complete['title_txt_color_id'] ?>;}
.optimposts .lay2_wrap .type-product a.button.add_to_cart_button:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:before{color:<?php echo $complete['title_txt_color_id'] ?>;}
.optimposts .lay2_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay3_wrap .type-product a.button.add_to_cart_button:hover:before, .optimposts .lay4_wrap  .type-product h2.postitle a{color:<?php echo $complete['sec_color_id'] ?>;}


<?php if(!$complete['show_blog_thumb'] ) { ?>
.page-template-templatespage-blog_template-php .lay4 .post_content{width:100%;}
<?php } ?>

@media screen and (max-width: 480px){
body.home.has_trans_header .header .logo h1 a:link, body.home.has_trans_header .header .logo h1 a:visited{ color:<?php echo $complete['logo_color_id']; ?>!important;}
body.home.has_trans_header .header #simple-menu{color:<?php echo $complete['menutxt_color_id']; ?>!important;}
}

/*USER'S CUSTOM CSS---------------------------------------------------------*/
<?php if ( ! empty ( $complete['custom-css'] ) ) { ?><?php echo stripslashes($complete['custom-css']); ?><?php } ?>
/*---------------------------------------------------------*/
</style>

<!--[if IE]>
<style type="text/css">
.text_block_wrap, .home .lay1, .home .lay2, .home .lay3, .home .lay4, .home .lay5, .home_testi .looper, #footer .widgets{opacity:1!important;}
#topmenu ul li a{display: block;padding: 20px; background:url(#);}
</style>
<![endif]-->
<?php } ?>
<?php add_action( 'wp_head', 'complete_dynamic_css'); ?>