<?php 
/**
 * Header layout 1 for Strong
 *
 * Displays The Header layout 1. This file is imported in header.php
 *
 * @package strong
 * 
 * @since strong 1.0
 */
global $complete;?>

<!--HEADER STARTS-->
    	<!--HEAD INFO AREA-->
    <div class="header <?php if($complete['head_bg_image']){ ?>head_bg<?php } ?> type1">
        <div class="center">
            <div class="head_inner">
            <!--LOGO START-->
                <div class="logo">
                    <?php if(!empty($complete['logo_image_id']['url'])){   ?>
                        <a class="logoimga" title="<?php bloginfo('name') ;?>" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php $logo = $complete['logo_image_id']; echo $logo['url']; ?>" /></a>
                        <span class="desc"><?php echo bloginfo('description'); ?></span>
                    <?php }else{ ?>
                            <?php if ( is_home() ) { ?>   
                            <h1><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h1>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php }else{ ?>
                            <h2><a href="<?php echo esc_url( home_url( '/' ) );?>"><?php bloginfo('name'); ?></a></h2>
                            <span class="desc"><?php echo bloginfo('description'); ?></span>
                            <?php } ?>
                    
                    <?php } ?>
                </div>
            <!--LOGO END-->
            <div class="head_right_area">
            <?php if(!dynamic_sidebar('headerright')) : ?>
            <div class="head_right_box1"><span class="sintp"><?php if (!empty ($complete['sintp_text'])) { ?><?php $sintp = html_entity_decode($complete['sintp_text']); $sintp = stripslashes($sintp); echo do_shortcode($sintp); ?><?php } ?></span></div>
            <div class="head_right_box2">
            	<div class="phonenumber"><span class="suptp"><?php if (!empty ($complete['suptp_text'])) { ?><?php $suptp = html_entity_decode($complete['suptp_text']); $suptp = stripslashes($suptp); echo do_shortcode($suptp); ?><?php } ?></span><div class="clear"></div><div class="emailtext"><span class="emltp"><?php if (!empty ($complete['emltp_text'])) { ?><?php $emltp = html_entity_decode($complete['emltp_text']); $emltp = stripslashes($emltp); echo do_shortcode($emltp); ?><?php } ?></span></div></div>
                
            </div>
            <?php endif; ?>
            </div>
            </div>
    </div>
    </div>
    <div class="clear"></div>
<!--HEADER ENDS-->
	
<!--MENU START--> 
	<div class="menusection">
        <div class="center">
        <!--MOBILE MENU START-->
        <a id="simple-menu" href="#sidr"><i class="fa-bars"></i></a>
        <!--MOBILE MENU END--> 
        <div id="topmenu">
            <?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
        </div>
        </div>
    </div>
<!--MENU END-->