<?php 
/**
 * The Sidebar for Strong
 *
 * Stores the sidebar area of the template. loaded in other template files with get_sidebar();
 *
 * @package SKT Strong
 * 
 * @since SKT Strong 1.0
 */
global $complete;?>
<?php $singletype = $complete['single_post_layout_id']; ?>
<?php if( $singletype == 'single_layout2'){ ?>

<div id="sidebar" class="leftside">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Category', 'strong' ); ?>
        </h3>
        <ul>
          <?php wp_list_categories('title_li=');  ?>
        </ul>
      </div>
    </div>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Archives', 'strong' ); ?>
        </h3>
<div class="widgets_padding">
        <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
<div class="clear"></div></div>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
  
  <div class="clear"></div>
  
</div>
<?php } else {?>
<div id="sidebar">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Category', 'strong' ); ?>
        </h3>
<div class="widgets_padding">
        <ul>
          <?php wp_list_categories('title_li=');  ?>
        </ul>
<div class="clear"></div></div>
      </div>
    </div>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Archives', 'strong' ); ?>
        </h3>
        <div class="widgets_padding">
        <ul>
          <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
        <div class="clear"></div></div>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
<div class="clear"></div>
</div>
<?php } ?>
