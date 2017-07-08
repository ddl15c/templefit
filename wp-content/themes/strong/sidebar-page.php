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
 
  <div id="sidebar">
  <div class="widgets">
    <?php if ( ! dynamic_sidebar( 'sidebar-page' ) ) : ?>
    <div class="widget">
      <div class="widget_wrap">
        <h3 class="widget-title">
          <?php _e( 'Pages', 'strong' ); ?>
        </h3>
         <div class="widgets_padding">
        <ul>
          <?php wp_list_pages( array( 'title_li' => '' ) ); ?>
        </ul>
        <div class="clear"></div>
        </div>
      </div>
    </div>
    <?php endif; // end sidebar widget area ?>
  </div>
</div>
 
 
