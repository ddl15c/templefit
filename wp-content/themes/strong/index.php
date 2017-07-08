<?php 
/**
 * The index page of Complete
 *
 * Displays the home page elements.
 *
 * @package SKT Strong
 * 
 * @since SKT Strong 1.0
 */
global $complete;
?>
<?php get_header(); ?>
<?php if ( is_front_page() ) { ?>

<div class="fixed_site layer_wrapper">
  <div class="fixed_wrap fixindex"> 
    <!-- Home Section 1 -->
    <div class="home1_section_area <?php if($complete['section1_bg_image']){ ?>home1_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section1'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section1_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec1bgvideo = $complete['section1_bg_video']; echo do_shortcode($sec1bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        <?php if (!empty ($complete['section1_title'])) { ?>
        	<h2>
	          <?php $sct1 = html_entity_decode($complete['section1_title']); $sct1 = stripslashes($sct1); echo do_shortcode($sct1); ?> </h2>
            <?php } ?>
            </div>
            <div class="home_section1_content <?php if('noslider' == $complete['slider_type_id']){ ?>no-margin<?php }?>">
             <?php $sec1cntnt = $complete['section1_content']; echo do_shortcode($sec1cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 1 -->
    <!-- Home Section 2 -->
    <div class="home2_section_area <?php if($complete['section2_bg_image']){ ?>home2_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section2'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section2_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec2bgvideo = $complete['section2_bg_video']; echo do_shortcode($sec2bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section2_title'])) { ?>
          <?php $sct2 = html_entity_decode($complete['section2_title']); $sct2 = stripslashes($sct2); echo do_shortcode($sct2); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section2_content">
             <?php $sec2cntnt = $complete['section2_content']; echo do_shortcode($sec2cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 2 -->   
    <!-- Home Section 3 -->
    <div class="home3_section_area <?php if($complete['section3_bg_image']){ ?>home3_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section3'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section3_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec3bgvideo = $complete['section3_bg_video']; echo do_shortcode($sec3bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section3_title'])) { ?>
          <?php $sct3 = html_entity_decode($complete['section3_title']); $sct3 = stripslashes($sct3); echo do_shortcode($sct3); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section3_content">
             <?php $sec3cntnt = $complete['section3_content']; echo do_shortcode($sec3cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 3 -->    
    <!-- Home Section 4 -->
    <div class="home4_section_area <?php if($complete['section4_bg_image']){ ?>home4_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section4'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section4_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec4bgvideo = $complete['section4_bg_video']; echo do_shortcode($sec4bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section4_title'])) { ?>
          <?php $sct4 = html_entity_decode($complete['section4_title']); $sct4 = stripslashes($sct4); echo do_shortcode($sct4); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section4_content">
             <?php $sec4cntnt = $complete['section4_content']; echo do_shortcode($sec4cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 4 --> 
    <!-- Home Section 5 -->
    <div class="home5_section_area <?php if($complete['section5_bg_image']){ ?>home5_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section5'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section5_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec5bgvideo = $complete['section5_bg_video']; echo do_shortcode($sec5bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section5_title'])) { ?>
          <?php $sct5 = html_entity_decode($complete['section5_title']); $sct5 = stripslashes($sct5); echo do_shortcode($sct5); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section5_content">
             <?php $sec5cntnt = $complete['section5_content']; echo do_shortcode($sec5cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 5 --> 
    <!-- Home Section 6 -->
    <div class="home6_section_area <?php if($complete['section6_bg_image']){ ?>home6_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section6'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section6_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec6bgvideo = $complete['section6_bg_video']; echo do_shortcode($sec6bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section6_title'])) { ?>
          <?php $sct6 = html_entity_decode($complete['section6_title']); $sct6 = stripslashes($sct6); echo do_shortcode($sct6); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section6_content">
             <?php $sec6cntnt = $complete['section6_content']; echo do_shortcode($sec6cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 6 --> 
    <!-- Home Section 7 -->
    <div class="home7_section_area <?php if($complete['section7_bg_image']){ ?>home7_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section7'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section7_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec7bgvideo = $complete['section7_bg_video']; echo do_shortcode($sec7bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section7_title'])) { ?>
          <?php $sct7 = html_entity_decode($complete['section7_title']); $sct7 = stripslashes($sct7); echo do_shortcode($sct7); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section7_content">
             <?php $sec7cntnt = $complete['section7_content']; echo do_shortcode($sec7cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 7 --> 
    <!-- Home Section 8 -->
    <div class="home8_section_area <?php if($complete['section8_bg_image']){ ?>home8_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section8'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section8_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec8bgvideo = $complete['section8_bg_video']; echo do_shortcode($sec8bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section8_title'])) { ?>
          <?php $sct8 = html_entity_decode($complete['section8_title']); $sct8 = stripslashes($sct8); echo do_shortcode($sct8); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section8_content">
            <?php $sec8cntnt = $complete['section8_content']; echo do_shortcode($sec8cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 8 --> 
    <!-- Home Section 9 -->
    <div class="home9_section_area <?php if($complete['section9_bg_image']){ ?>home9_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section9'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section9_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec9bgvideo = $complete['section9_bg_video']; echo do_shortcode($sec9bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section9_title'])) { ?>
          <?php $sct9 = html_entity_decode($complete['section9_title']); $sct9 = stripslashes($sct9); echo do_shortcode($sct9); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section9_content">
             <?php $sec9cntnt = $complete['section9_content']; echo do_shortcode($sec9cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 9 --> 
    <!-- Home Section 10 -->
    <div class="home10_section_area <?php if($complete['section10_bg_image']){ ?>home10_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section10'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section10_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec10bgvideo = $complete['section10_bg_video']; echo do_shortcode($sec10bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        	<div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section10_title'])) { ?>
          <?php $sct10 = html_entity_decode($complete['section10_title']); $sct10 = stripslashes($sct10); echo do_shortcode($sct10); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section10_content">
             <?php $sec10cntnt = $complete['section10_content']; echo do_shortcode($sec10cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 10 --> 
    <!-- Home Section 11 -->
    <div class="home11_section_area <?php if($complete['section11_bg_image']){ ?>home11_section_area_bg<?php } ?>  
<?php if(!empty($complete['hide_boxes_section11'])){ echo 'hide_section';} ?>" <?php if(!empty($complete['section11_bg_video'])){ ?>data-vidbg-bg="mp4: <?php $sec11bgvideo = $complete['section11_bg_video']; echo do_shortcode($sec11bgvideo); ?>" data-vidbg-options="loop: true, muted: true, overlay: false"<?php } ?>>
    	<div class="center">
        <div class="centertitle">
        	<h2>
          <?php if (!empty ($complete['section11_title'])) { ?>
          <?php $sct11 = html_entity_decode($complete['section11_title']); $sct11 = stripslashes($sct11); echo do_shortcode($sct11); ?>
          <?php } ?>
            </h2>
            </div>
            <div class="home_section11_content">
             <?php $sec11cntnt = $complete['section11_content']; echo do_shortcode($sec11cntnt); ?>
            </div>
        </div>
    </div>
    <!-- Home Section 11 -->                                 
  </div>
</div>
<?php }else{ ?>
<div class="fixed_site">
  <div class="fixed_wrap fixindex">
    <?php get_template_part('templates/post','layout4'); ?>
  </div>
</div>
<?php } //is_front_page ENDS ?>
<?php get_footer(); ?>