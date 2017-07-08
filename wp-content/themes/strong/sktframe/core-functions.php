<?php
/**
 * The Core Functions for Strong
 *
 * These core functions are the main feature of the complete.
 *
 * @package strong
 * 
 * @since strong 1.0
 */

//CONTENT WIDTH
function complete_content_width() {
	global $content_width;
	$full_width = is_page_template( 'page-fullwidth_template.php' );
	if ( $full_width ) {
		$content_width = 1100;
	}else {
		$content_width = 690;
	}
}
add_action( 'template_redirect', 'complete_content_width' );


//UPDATED: GET THE FIRST IMAGE
function complete_first_image() {
	if(is_404()){
		return;
	}
	global $wp_query;
/*	if( $wp_query->post_count <1){
		return;
	}*/
		global $post, $posts;
		$image_url = '';
		ob_start();
		ob_end_clean();
		if(preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches)){;
		$image_url = $matches [1] [0];
		}
	return $image_url;
}

//complete Site title
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function complete_wp_title( $title, $sep ) {
		global $paged, $page;
	
		if ( is_feed() )
			return $title;
	
		// Add the site name.
		$title .= get_bloginfo( 'name' );
		$sep ='|';
		// Add the site description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			$title = "$title $sep $site_description";
	
		// Add a page number if necessary.
		if ( $paged >= 2 || $page >= 2 )
			$title = "$title $sep " . sprintf( __( 'Page %s', 'strong' ), max( $paged, $page ) );
	
		return $title;
	}
	add_filter( 'wp_title', 'complete_wp_title', 10, 2 );
}


//Custom Excerpt Length
function complete_excerptlength_teaser($length) {
    return 20;
}
function complete_excerptlength_index($length) {
    return 12;
}
function complete_excerptmore($more) {
    return '...';
}

function complete_excerpt($length_callback='', $more_callback='') {
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

//Get Attachment data
function complete_get_attachment( $attachment_id ) {

$attachment = get_post( $attachment_id );
return array(
    'alt' => get_post_meta( $attachment->ID, '_wp_attachment_image_alt', true ),
    'caption' => $attachment->post_excerpt,
    'description' => $attachment->post_content,
    'href' => get_permalink( $attachment->ID ),
    'src' => $attachment->guid,
    'title' => $attachment->post_title
);
}


//hex to rgb function
function complete_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);
 
   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   return implode(",", $rgb); // returns the rgb values separated by commas
   //return $rgb; // returns an array with the rgb values
}

/*complete Color Sanitization*/
function complete_sanitize_hex( $color = '#FFFFFF', $hash = true ) {
		$color = trim( $color );
		$color = str_replace( '#', '', $color );
		if ( 3 == strlen( $color ) ) {
			$color = substr( $color, 0, 1 ) . substr( $color, 0, 1 ) . substr( $color, 1, 1 ) . substr( $color, 1, 1 ) . substr( $color, 2, 1 ) . substr( $color, 2, 1 );
		}

		$substr = array();
		for ( $i = 0; $i <= 5; $i++ ) {
			$default    = ( 0 == $i ) ? 'F' : ( $substr[$i-1] );
			$substr[$i] = substr( $color, $i, 1 );
			$substr[$i] = ( false === $substr[$i] || ! ctype_xdigit( $substr[$i] ) ) ? $default : $substr[$i];
		}
		$hex = implode( '', $substr );

		return ( ! $hash ) ? $hex : '#' . $hex;

}

// allow script & iframe tag within posts
function complete_allow_html( $allowedposttags ){
	global $allowedposttags;
    $allowedposttags['script'] = array(
        'type' => true,
        'src' => true,
        'height' => true,
        'width' => true,
    );
    $allowedposttags['form'] = array(
        'id' => true,
        'class' => true,
        'action' => true,
        'method' => true,
        'name' => true,
        'style' => true,
        'target' => true,
		'novalidate' => true,
    );
    $allowedposttags['input'] = array(
        'id' => true,
        'class' => true,
        'name' => true,
        'style' => true,
        'placeholder' => true,
		'tabindex' => true,
		'type' => true,
		'value' => true,
    );
    $allowedposttags['button'] = array(
        'id' => true,
        'class' => true,
        'name' => true,
        'style' => true,
		'tabindex' => true,
		'type' => true,
		'value' => true,
    );
	

    return $allowedposttags;
}
add_filter('wp_kses_allowed_html','complete_allow_html', 1);

//**Return an ID of an attachment by searching the database with the file URL (Inexpensive query)**//
function complete_attachment_id_by_url( $url ) {
	$parsed_url  = explode( parse_url( WP_CONTENT_URL, PHP_URL_PATH ), $url );

	$this_host = str_ireplace( 'www.', '', parse_url( home_url(), PHP_URL_HOST ) );
	$file_host = str_ireplace( 'www.', '', parse_url( $url, PHP_URL_HOST ) );

	if ( ! isset( $parsed_url[1] ) || empty( $parsed_url[1] ) || ( $this_host != $file_host ) ) {
		return;
	}

	global $wpdb;
	$attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parsed_url[1] ) );
	return $attachment[0];
}

//Get Image alt from image src
function complete_image_alt( $attachment ) {
	$imgid = complete_attachment_id_by_url($attachment);
	
	if($imgid){
		$imgaltraw = wp_prepare_attachment_for_js($imgid); 
		$imgalt = $imgaltraw['alt'];
		if(!empty($imgalt)){ $imgalt = 'alt="'.$imgaltraw['alt'].'"'; }
		
	}else{
		$imgalt = '';
	}
	
	return $imgalt;
}

// custom post type for Testimonials
function my_custom_post_testimonials() {
	$labels = array(
		'name'               => __( 'Testimonials','strong'),
		'singular_name'      => __( 'Testimonials','strong'),
		'add_new'            => __( 'Add Testimonials','strong'),
		'add_new_item'       => __( 'Add New Testimonial','strong'),
		'edit_item'          => __( 'Edit Testimonial','strong'),
		'new_item'           => __( 'New Testimonial','strong'),
		'all_items'          => __( 'All Testimonials','strong'),
		'view_item'          => __( 'View Testimonial','strong'),
		'search_items'       => __( 'Search Testimonial','strong'),
		'not_found'          => __( 'No Testimonial found','strong'),
		'not_found_in_trash' => __( 'No Testimonial found in the Trash','strong'), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Testimonials',
		'public'        => true,
		'menu_icon'		=> 'dashicons-format-quote',
		'menu_position' => null,
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'testimonials', $args );	
}
add_action( 'init', 'my_custom_post_testimonials' );


// add meta box to testimonials
add_action( 'admin_init', 'my_testimonial_admin_function' );
function my_testimonial_admin_function() {
    add_meta_box( 'testimonial_meta_box',
        'Testimonial Info',
        'display_testimonial_meta_box',
        'testimonials', 'normal', 'high'
    );
}
// add meta box form to doctor
function display_testimonial_meta_box( $testimonial ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
	$companyname = esc_html( get_post_meta( $testimonial->ID, 'companyname', true ) );  
    $possition = esc_html( get_post_meta( $testimonial->ID, 'possition', true ) ); 
	
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Company Name </td>
            <td width="80%"><input size="80" type="text" name="companyname" value="<?php echo $companyname; ?>" /></td>
        </tr> 
        <tr>
            <td width="20%">Designation </td>
            <td width="80%"><input size="80" type="text" name="possition" value="<?php echo $possition; ?>" /></td>
        </tr>       
    </table>
    <?php    
}
// save testimonial meta box form data
add_action( 'save_post', 'add_testimonial_fields_function', 10, 2 );
function add_testimonial_fields_function( $testimonial_id, $testimonial ) {
    // Check post type for testimonials
    if ( $testimonial->post_type == 'testimonials' ) {
        // Store data in post meta table if present in post data
		if ( isset($_POST['companyname']) ) {
            update_post_meta( $testimonial_id, 'companyname', $_POST['companyname'] );
        } 
        if ( isset($_POST['possition']) ) {
            update_post_meta( $testimonial_id, 'possition', $_POST['possition'] );
        }       
    }
}

//[testimonials-rotator show="3"]
//Testimonials function
function testimonials_rotator_output_func( $atts ){
   extract( shortcode_atts( array(
		'show' => '3',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) );	
	
	$testimonialoutput = '<div class="bxmain rota">
  <ul class="bxslider">';
	wp_reset_query();
	 $args = array( 'post_type' => 'testimonials', 'posts_per_page' => $show, 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );
		$possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );
			$testimonialoutput .= '
		   <li>
				<blockquote>'.get_the_content().'</blockquote>
				<div class="testimonial-image">'.get_the_post_thumbnail( get_the_ID(), array(70,70) ).'</div>
				<h3>'.get_the_title().'</h3>
				<p>('.$companyname.', '.$possition.')</p>
			</li>			  
			';
		endwhile;
		 $testimonialoutput .= '</ul><span id="slider-prev"></span> <span id="slider-next"></span></div>';
	else:
	  $testimonialoutput = ' 
	  <div class="bxmain rota">
  <ul class="bxslider">
   <li>
    <blockquote>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/safira.jpg".'"></div>
    <h3>Safira</h3>
    <p>(Quia, CEO)</p>
    </li>
   <li>
    <blockquote>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/alana.jpg".'"></div>
    <h3>Alana</h3>
    <p>(Wirate, PA)</p>
    </li>
   <li>
    <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
    <div class="testimonial-image"><img width="70px" height="70px" src="'.get_template_directory_uri()."/images/sarag.jpg".'"></div>
    <h3>Sara</h3>
    <p>(Yahoo, Manager)</p>
    </li>        
	</ul>
	</div>
	   ';			
	  endif;  
	wp_reset_query();
	return $testimonialoutput;
}
add_shortcode( 'testimonials-rotator', 'testimonials_rotator_output_func' );

// Testimonial Box
// [testimonials-box col="3" show="3"]

function testimonials_box_func( $atts ) {
   extract( shortcode_atts( array(
		'col' => '3',
		'show' => '3',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) ); $tstmnl = ''; wp_reset_query(); 

	$tstmnl = '<div class="testimonialrow">';
	$args = array( 'post_type' => 'testimonials', 'posts_per_page' => $show, 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			$n++;
			the_post();
			$companyname = esc_html( get_post_meta( get_the_ID(), 'companyname', true ) );
			$possition = esc_html( get_post_meta( get_the_ID(), 'possition', true ) );
 			
			if( $col == 1 ){
				$tstmnl .= '<div class="tstcols1';
			}elseif( $col == 2 ){
				$tstmnl .= '<div class="tstcols2';
			}elseif( $col == 3 ){
				$tstmnl .= '<div class="tstcols3';
			}elseif( $col == 4 ){
				$tstmnl .= '<div class="tstcols4';
			}
				$tstmnl .= '">';
				
                $tstmnl .= '<div class="testimonial-box"> 
					 <em>'.get_the_content().'</em>
                     </div>
                     <div class="testimonial-inforarea">
                     	<i class="fa fa-user"></i>
<h3>'.get_the_title().',</h3>('.$companyname.','.$possition.')
                     </div>
				';
                $tstmnl .= '</div>
				';
		}
	}else{
		$tstmnl .= '
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>John,</h3>(Company Name, CEO)
					 </div>
				</div>
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>Stefen,</h3>(Company Name, Sr.Manager)
					 </div>
				</div>
				<div class="tstcols3"> 
					 <div class="testimonial-box">
						<em>Sed suscipit mauris nec mauris vulputate, a posuere libero ongue. Nam laoreet elit eu erat pulvinar, et efficitur nibh imod. Proin venenatis orci sit amet nisl finibus vehicula. Nam metus lorem, hendrerit quis ante eget lobortis eleneque. Aliquam in ullamcorper quam. Integer euismod ligula in mauris vehicula imperdiet.</em>
					 </div>
					 <div class="testimonial-inforarea">
						<i class="fa fa-user"></i><h3>Sara,</h3>(Company Name, Developer)
					 </div>
				</div>								
				
		';
	}
	wp_reset_query();
	$tstmnl .= '</div>';
    return $tstmnl;
}
add_shortcode( 'testimonials-box', 'testimonials_box_func' );
//


//custom post type for Our Team
function my_custom_post_team() {
	$labels = array(
		'name'               => __( 'Our Team', 'strong' ),
		'singular_name'      => __( 'Our Team', 'strong' ),
		'add_new'            => __( 'Add New', 'strong' ),
		'add_new_item'       => __( 'Add New Team Member', 'strong' ),
		'edit_item'          => __( 'Edit Team Member', 'strong' ),
		'new_item'           => __( 'New Member', 'strong' ),
		'all_items'          => __( 'All Members', 'strong' ),
		'view_item'          => __( 'View Members', 'strong' ),
		'search_items'       => __( 'Search Team Members', 'strong' ),
		'not_found'          => __( 'No Team members found', 'strong' ),
		'not_found_in_trash' => __( 'No Team members found in the Trash', 'strong' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Our Team'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Team',
		'public'        => true,
		'menu_position' => null,
		'menu_icon'		=> 'dashicons-groups',
		'supports'      => array( 'title', 'editor', 'thumbnail' ),
		'rewrite' => array('slug' => 'our-team'),
		'has_archive'   => true,
		'exclude_from_search' => true,
	);
	register_post_type( 'team', $args );
}
add_action( 'init', 'my_custom_post_team' );

// add meta box to team
add_action( 'admin_init', 'my_team_admin_function' );
function my_team_admin_function() {
    add_meta_box( 'team_meta_box',
        'Member Info',
        'display_team_meta_box',
        'team', 'normal', 'high'
    );
}
// add meta box form to team
function display_team_meta_box( $team ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $designation = esc_html( get_post_meta( $team->ID, 'designation', true ) );
	
    $facebook = get_post_meta( $team->ID, 'facebook', true );
	$facebooklink = esc_url( get_post_meta( $team->ID, 'facebooklink', true ) );

    $twitter = get_post_meta( $team->ID, 'twitter', true );
	$twitterlink = esc_url( get_post_meta( $team->ID, 'twitterlink', true ) );

	$googleplus = get_post_meta( $team->ID, 'googleplus', true );
	$googlepluslink = esc_url( get_post_meta( $team->ID, 'googlepluslink', true ) );	

    $linkedin = get_post_meta( $team->ID, 'linkedin', true );
	$linkedinlink = esc_url( get_post_meta( $team->ID, 'linkedinlink', true ) );

    $pinterest = get_post_meta( $team->ID, 'pinterest', true );
	$pinterestlink = get_post_meta( $team->ID, 'pinterestlink', true );
    ?>
    <table width="100%">
        <tr>
            <td width="20%">Designation </td>
            <td width="80%"><input type="text" name="designation" value="<?php echo $designation; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social link 1</td>
            <td width="40%"><input type="text" name="facebook" value="<?php echo $facebook; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="facebooklink" value="<?php echo $facebooklink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 2</td>
            <td width="40%"><input type="text" name="twitter" value="<?php echo $twitter; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="twitterlink" value="<?php echo $twitterlink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 3</td>
            <td width="40%"><input type="text" name="googleplus" value="<?php echo $googleplus; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="googlepluslink" value="<?php echo $googlepluslink; ?>" /></td>
        </tr>
        <tr>
            <td width="20%">Social Link 4</td>
            <td width="40%"><input type="text" name="linkedin" value="<?php echo $linkedin; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="linkedinlink" value="<?php echo $linkedinlink; ?>" /></td>
        </tr>        
        <tr>
            <td width="20%">Social Link 5</td>
            <td width="40%"><input type="text" name="pinterest" value="<?php echo $pinterest; ?>" /></td>
            <td width="40%"><input style="width:500px;" type="text" name="pinterestlink" value="<?php echo $pinterestlink; ?>" /></td>
        </tr>
        <tr>
        	<td width="100%" colspan="3"><label style="font-size:12px;"><strong>Note:</strong> Icon name should be in lowercase without space. More social icons can be found at: http://fortawesome.github.io/Font-Awesome/icons/</label> </td>
        </tr>
    </table>
    <?php    
}
// save team meta box form data
add_action( 'save_post', 'add_team_fields_function', 10, 2 );
function add_team_fields_function( $team_id, $team ) {
    // Check post type for testimonials
    if ( $team->post_type == 'team' ) {
        // Store data in post meta table if present in post data
        if ( isset($_POST['designation']) ) {
            update_post_meta( $team_id, 'designation', $_POST['designation'] );
        }
        if ( isset($_POST['facebook']) ) {
            update_post_meta( $team_id, 'facebook', $_POST['facebook'] );
        }
		if ( isset($_POST['facebooklink']) ) {
            update_post_meta( $team_id, 'facebooklink', $_POST['facebooklink'] );
        }
        if ( isset($_POST['twitter']) ) {
            update_post_meta( $team_id, 'twitter', $_POST['twitter'] );
        }
		if ( isset($_POST['twitterlink']) ) {
            update_post_meta( $team_id, 'twitterlink', $_POST['twitterlink'] );
        }
        if ( isset($_POST['googleplus']) ) {
            update_post_meta( $team_id, 'googleplus', $_POST['googleplus'] );
        }
		if ( isset($_POST['googlepluslink']) ) {
            update_post_meta( $team_id, 'googlepluslink', $_POST['googlepluslink'] );
        }		
        if ( isset($_POST['linkedin']) ) {
            update_post_meta( $team_id, 'linkedin', $_POST['linkedin'] );
        }
		if ( isset($_POST['linkedinlink']) ) {
            update_post_meta( $team_id, 'linkedinlink', $_POST['linkedinlink'] );
        }
		if ( isset($_POST['pinterest']) ) {
            update_post_meta( $team_id, 'pinterest', $_POST['pinterest'] );
        }
		if ( isset($_POST['pinterestlink']) ) {
            update_post_meta( $team_id, 'pinterestlink', $_POST['pinterestlink'] );
        }
    }
}

// Shortcode Our Team
// [ourteam col="4" show="4" excerptlength="25"]

function ourteam_func( $atts ) {
   extract( shortcode_atts( array(
		'col' => '4',
		'show' => '4',
		'excerptlength' => '25',
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) ); $ourtm = ''; wp_reset_query(); 

	$ourtm = '<div class="sectionrow">';
	$args = array( 'post_type' => 'team', 'posts_per_page' => $show, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	$n = 0;
	if ( have_posts() ) {
		while ( have_posts() ) { 
			$n++;
			the_post();
			$designation = esc_html( get_post_meta( get_the_ID(), 'designation', true ) );
			
			$facebook = get_post_meta( get_the_ID(), 'facebook', true );
			$facebooklink = get_post_meta( get_the_ID(), 'facebooklink', true );
			
			$twitter = get_post_meta( get_the_ID(), 'twitter', true );
			$twitterlink = get_post_meta( get_the_ID(), 'twitterlink', true );
			
			$googleplus = get_post_meta( get_the_ID(), 'googleplus', true );
			$googlepluslink = get_post_meta( get_the_ID(), 'googlepluslink', true );
			
			$linkedin = get_post_meta( get_the_ID(), 'linkedin', true );
			$linkedinlink = get_post_meta( get_the_ID(), 'linkedinlink', true );
			
			$pinterest = get_post_meta( get_the_ID(), 'pinterest', true );
			$pinterestlink = get_post_meta( get_the_ID(), 'pinterestlink', true );			

			if( $col == 1 ){
				$ourtm .= '<div class="cols1';
			}elseif( $col == 2 ){
				$ourtm .= '<div class="cols2';
			}elseif( $col == 3 ){
				$ourtm .= '<div class="cols3';
			}elseif( $col == 4 ){
				$ourtm .= '<div class="cols4';
			}
 
				$ourtm .= '">';
 
			$ourtm .= ' 
			<div class="team-thumb">
			<a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '<img src="'.get_template_directory_uri().'/images/team_thumb.jpg" />' ).'</a></div>';
                $ourtm .= '<div class="team-infobox">
                	<h3><a href="'.get_permalink().'">'.get_the_title().'</a></h3>';
					if( $designation != '' ){
                    $ourtm .= '<span>('.$designation.')</span>';
					}
                    $ourtm .= '<p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p>';
 						$ourtm .= '<div class="social-icons">';
						if( $facebook != '' ){
                    	$ourtm .= '<a href="'.$facebooklink.'" title="'.$facebook.'" target="_blank"><i class="fa fa-'.$facebook.' fa-lg"></i></a>';
						}
						if( $twitter != '' ){
                    	$ourtm .= '<a href="'.$twitterlink.'" title="'.$twitter.'" target="_blank"><i class="fa fa-'.$twitter.' fa-lg"></i></a>';
						}
						if( $googleplus != '' ){
                    	$ourtm .= '<a href="'.$googlepluslink.'" title="'.$googleplus.'" target="_blank"><i class="fa fa-'.$googleplus.' fa-lg"></i></a>';
						}						
						if( $linkedin != '' ){
                    	$ourtm .= '<a href="'.$linkedinlink.'" title="'.$linkedin.'" target="_blank"><i class="fa fa-'.$linkedin.' fa-lg"></i></a>';
						}
						if( $pinterest != '' ){
                    	$ourtm .= '<a href="'.$pinterestlink.'" title="'.$pinterest.'" target="_blank"><i class="fa fa-'.$pinterest.' fa-lg"></i></a>';
						}
                $ourtm .= '</div></div>
				</div>';
		}
	}else{
		$ourtm .= '<div class="cols4">
    <div class="team-thumb"><a title="Zahera" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="zahera" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/zahera.jpg"></a></div>
<div class="team-infobox"><h3><a href="#">Zahera</a></h3><span>(HR)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4"><div class="team-thumb"><a title="Alex" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Alex" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/alex.jpg"></a></div><div class="team-infobox"><h3><a href="#">Alex</a></h3><span>(CEO)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4"><div class="team-thumb"><a title="Sara" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Alex" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/sara.jpg"></a></div><div class="team-infobox"><h3><a href="#">Sara</a></h3><span>(CCO)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p>
<div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div></div></div><div class="cols4">
<div class="team-thumb"><a title="Mark" href="#"><img width="270" height="270" sizes="(max-width: 270px) 100vw, 270px" alt="Mark" class="attachment-full size-full wp-post-image" src="'.get_template_directory_uri().'/images/mark.jpg"></a></div><div class="team-infobox"><h3><a href="#">Mark</a></h3><span>(Manager)</span><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel tempor sem. Vestibulum suscipit faucibus sem ut porta. Integer ut justo euismod, auctor turpis et</p><div class="social-icons"><a target="_blank" title="linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i></a><a target="_blank" title="twitter" href="#"><i class="fa fa-twitter fa-lg"></i></a><a target="_blank" title="facebook" href="#"><i class="fa fa-facebook fa-lg"></i></a><a target="_blank" title="tumblr" href="#"><i class="fa fa-tumblr fa-lg"></i></a><a target="_blank" title="google-plus" href="#"><i class="fa fa-google-plus fa-lg"></i></a></div>
    </div>
  </div>
  ';
	}
	wp_reset_query();
	$ourtm .= '</div>';
    return $ourtm;
}
add_shortcode( 'ourteam', 'ourteam_func' );


// Shortcode Services

/* [service pattern="boxpattern-1" bgcolor="#f7f7f7" icon="" title="" button="" url="#"]Description[/service] */

// add shortcode for service box
function servicebox($atts, $content = null){
		extract( shortcode_atts(array(
			'pattern' => 'pattern',
			'bgcolor'  => 'bgcolor',
			'icon'  => 'icon',
			'title'  => 'title',
			'button'  => 'button',
			'url' => 'url',
		), $atts));
		
		return '
			 <div class="servicebox '.$pattern.'">
			 	<div class="serviceboxbg" style="background-color:'.$bgcolor.';">
					<a href="'.$url.'"><img src="'.$icon.'"></a>
					<h3><a href="'.$url.'">'.$title.'</a></h3>
					<p>'.$content.'</p>
					<a style="color:#FFF;" href="'.$url.'" class="sktmore"> '.$button.' </a>
				</div>
			 </div>	
		';
}
add_shortcode('service','servicebox');

//[clear]
function clear_func() {
	$clr = '<div class="clear"></div>';
	return $clr;
}
add_shortcode( 'clear', 'clear_func' );

//custom post type for Our photogallery
add_action("admin_init", "admin_init");
function admin_init(){
	add_meta_box("video_file_url-meta", "Video File URL", "video_file_url", "photogallery", "normal", "low"); 
}

function video_file_url () {
	global $post;  
	$custom     = get_post_custom($post->ID);  
	$video_file_url  = isset ( $custom["video_file_url"][0] ) ? $custom["video_file_url"][0] : '';  ?> 
	<style>
	.amount_input { margin:0; padding:6px; width:80%; }
	</style>
	<table width="100%"> 
		<tr><td width="110">Video File URL : </td><td colspan="2"><input class="amount_input" type="text" name="video_file_url"  value="<?php echo $video_file_url; ?>"  /></td></tr> 
		<tr><td></td><td><strong>YouTube video url:</strong></td><td>http://www.youtube.com/watch?v=qqXi8WmQ_WM</td></tr> 
		<tr><td></td><td width="120"><strong>Vimeo video url:</strong></td><td>http://vimeo.com/8245346</td></tr> 
	</table>
	<?php
}

add_action('save_post', 'save_details');
function save_details(){
	global $post; 
	if ( isset($_POST["video_file_url"]) ) {
		update_post_meta($post->ID, "video_file_url", $_POST["video_file_url"]);
	} 
}

//custom post type for Our photogallery
function my_custom_post_photogallery() {
	$labels = array(
		'name'               => __( 'Photo Gallery','strong' ),
		'singular_name'      => __( 'Photo Gallery','strong' ),
		'add_new'            => __( 'Add New','strong' ),
		'add_new_item'       => __( 'Add New Image / Video','strong' ),
		'edit_item'          => __( 'Edit Image/Video','strong' ),
		'new_item'           => __( 'New Image/Video','strong' ),
		'all_items'          => __( 'All Images/Videos','strong' ),
		'view_item'          => __( 'View Image/Video','strong' ),
		'search_items'       => __( 'Search Images/Videos','strong' ),
		'not_found'          => __( 'No images/videos found','strong' ),
		'not_found_in_trash' => __( 'No images/videos found in the Trash','strong' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Photo Gallery'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Manage Photo Gallery',
		'public'        => true,
		'menu_icon'		=> 'dashicons-format-image',
		'supports'      => array( 'title', 'thumbnail' ),
		'has_archive'   => true,
	);
	register_post_type( 'photogallery', $args );
}
add_action( 'init', 'my_custom_post_photogallery' );


//  register gallery taxonomy
register_taxonomy( "gallerycategory", 
	array("photogallery"), 
	array(
		"hierarchical" => true, 
		"label" => "Gallery Category", 
		"singular_label" => "Photo Gallery", 
		"rewrite" => true
	)
);

add_action("manage_posts_custom_column",  "photogallery_custom_columns");
add_filter("manage_edit-photogallery_columns", "photogallery_edit_columns");
function photogallery_edit_columns($columns){
	$columns = array(
		"cb" => '<input type="checkbox" />',
		"title" => "Gallery Title",
		"pcategory" => "Gallery Category",
		"view" => "Image",
		"date" => "Date",
	);
	return $columns;
}
function photogallery_custom_columns($column){
	global $post;
	switch ($column) {
		case "pcategory":
			echo get_the_term_list($post->ID, 'gallerycategory', '', ', ','');
		break;
		case "view":
			the_post_thumbnail('thumbnail');
		break;
		case "date":

		break;
	}
}

//[photogallery filter="true" show="4"]
function photogallery_shortcode_func( $atts ) {
	extract( shortcode_atts( array(
		'show' => -1,
		'filter' => 'true'
	), $atts ) );
	$pfStr = '';

	$pfStr .= '<div class="portfolio-content">';
	if( $filter == 'true' ){
		$pfStr .= '<ul class="portfolio-categ filter"><li class="all active"><a href="#">All</a></li>';
		$categories = get_categories( array('taxonomy' => 'gallerycategory') );
		foreach ($categories as $category) {
			$pfStr .= '<li class="cat-item-'.$category->slug.'"><a href="#" title="'.$category->name.'">'.$category->name.'</a></li>';
		}
		$pfStr .= '</ul>';
	}

	$pfStr .= '<ul class="portfolio-area">';
	$j=0;
	query_posts('post_type=photogallery&posts_per_page='.$show); 
	if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$j++;
		$videoUrl = get_post_meta( get_the_ID(), 'video_file_url', true);
		$imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$terms = wp_get_post_terms( get_the_ID(), 'gallerycategory', array("fields" => "all"));
		$slugAr = array();
		foreach( $terms as $tv ){
			$slugAr[] = $tv->slug;
		}
		if ( $imgSrc[0]!='' ) {
			$imgUrl = $imgSrc[0];
		}else{
			$imgUrl = get_template_directory_uri().'/images/gallery_thumb.jpg';
		}
		$pfStr .= '<li data-id="id-'.$j.'" data-type="cat-item-'.implode(' ', $slugAr).'" class="portfolio-item2">
 <a class="image-zoom" href="'.( ($videoUrl) ? $videoUrl : $imgSrc[0] ).'" rel="prettyPhoto[gallery]" title="'.get_the_title().'"><div><span class="image-block"><img src="'.$imgSrc[0].'" alt="'.get_the_title().'" title="'.get_the_title().'"/></span></div></a>
            </li>
			';
		unset( $slugAr );
	endwhile; else: 
		$pfStr .= '<p>Sorry, photo gallery is empty.</p>';
	endif; 
	wp_reset_query();
	$pfStr .= '</ul>';
	$pfStr .= '<div class="clear"></div></div>';
	return $pfStr;
}
add_shortcode( 'photogallery', 'photogallery_shortcode_func' );

//[gallery-carousel]
// Photo Gallery Carousel
function carousel_gallery_shortcode_func( $atts ){
   extract( shortcode_atts( array(
		'show' => -1,
	), $atts ) );
	  extract( shortcode_atts( array( 'show' => $show,), $atts ) );	
	
$carsl = '<div class="galcarosel">';
	wp_reset_query();
	 $args = array( 'post_type' => 'photogallery', 'posts_per_page' => $show, 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
		$caroimgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
		$carovideoUrl = get_post_meta( get_the_ID(), 'video_file_url', true);
					if ( $caroimgSrc[0]!='' ) {
			$imgUrl = $caroimgSrc[0];
		}else{
			$imgUrl = get_template_directory_uri().'/images/carousel-thumb.jpg';
		}
			$carsl .= '
		   <div class="galslide">
 				<a class="image-zoom" href="'.( ($carovideoUrl) ? $carovideoUrl : $caroimgSrc[0] ).'" rel="prettyPhoto[gallery]" title="'.get_the_title().'"><img src="'.$caroimgSrc[0].'" alt="'.get_the_title().'" title="'.get_the_title().'"/></a>
			</div>			  
			';
		endwhile;
		 $carsl .= '</div>';
	else:
	  $carsl = ' 
	  <div class="galcaroselno">Sorry, photo gallery is empty.</div>
	   ';			
	  endif;  
	wp_reset_query();
	return $carsl;
}
add_shortcode( 'gallery-carousel', 'carousel_gallery_shortcode_func' );

//[posts-style1 show="4" cat="" excerptlength="24"] 
// Shortcode Post Block Style1

function post_style1_func( $atts ) {
	global $complete;
	global $authordata;
   extract( shortcode_atts( array(
		'show' => '4',
		'cat' => '',
		'excerptlength' => '24',
	), $atts ) );

	$lbposts = '<div class="post_style1_area">';
	$args = array( 'posts_per_page' => $show, 'cat' => $cat, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	
	if ( have_posts() ) {
		$n = 1;
		while ( have_posts() ) { 
			the_post();
			$marg_cls = ($n % 4) ? '' : 'no_margin_right';
			$marg_clr = ($n % 4) ? '' : '<div class="clear"></div>';
			$lbposts .= '<div class="post_block_style1 '.$marg_cls.'">'; 
						if ( has_post_thumbnail() ){
			$lbposts .= '<div class="style1-post-thumb">';
			}$lbposts .= '<a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '' ).'</a>'; if ( has_post_thumbnail() ){ $lbposts .= '</div>'; } $lbposts .= '
				<div class="styleinfo">
				<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>
				<div class="post_block_style1_meta">
                	<span>'.get_the_date('F j, Y').'</span> by <a href="'.get_author_posts_url( $authordata->ID, $authordata->user_nicename ).'">'.get_the_author().'</a><span class="commentarea"><i class="fa fa-comments"></i>
<a href="'.get_comments_link().'">('.get_comments_number().') Comments </a></span>
                </div>
				<span class="shortborder"></span>  
 				<p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p>
 				</div>
				</div>'.$marg_clr.'';
				$n++;
		}
	}else{
		$lbposts .= '<p>Sorry! There are no posts.</p>';
	}
	wp_reset_query();
	$lbposts .= '</div>';
    return $lbposts;
}
add_shortcode( 'posts-style1', 'post_style1_func' );

//[posts-style2 show="2" cat="1" excerptlength="24"] 
// Shortcode Post Block Style2

function post_style2_func( $atts ) {
	global $complete;
	global $authordata;
   extract( shortcode_atts( array(
		'show' => '2',
		'cat' => '',
		'excerptlength' => '24',
	), $atts ) );

	$lbposts = '<div class="post_style2_area">';
	$args = array( 'posts_per_page' => $show, 'cat' => $cat, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	
	if ( have_posts() ) {
		$n = 1;
		while ( have_posts() ) { 
			the_post();
			$marg_cls = ($n % 2) ? '' : 'no_margin_right';
			$marg_clr = ($n % 2) ? '' : '<div class="clear"></div>';
			$lbposts .= '<div class="post_block_style2 '.$marg_cls.'">'; 
						if ( has_post_thumbnail() ){
			$lbposts .= '<div class="style2-post-thumb">';
			}$lbposts .= '<a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '' ).'</a>'; if ( has_post_thumbnail() ){ $lbposts .= '</div>'; } $lbposts .= '
				
				<div class="styleinfo">
				<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>

				<div class="post_block_style2_meta">
                	<span>'.get_the_date('F j, Y').'</span> by <a href="'.get_author_posts_url( $authordata->ID, $authordata->user_nicename ).'">'.get_the_author().'</a><span class="commentarea"><i class="fa fa-comments"></i>
<a href="'.get_comments_link().'">('.get_comments_number().') Comments </a></span>
                </div>
				<span class="shortborder"></span>  
 
 				<p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p>
 				</div>
				
				</div>'.$marg_clr.'';
				$n++;
		}
	}else{
		$lbposts .= '<p>Sorry! There are no post.</p>';
	}
	wp_reset_query();
	$lbposts .= '</div>';
    return $lbposts;
}
add_shortcode( 'posts-style2', 'post_style2_func' );

//[posts-style3 show="3" cat="" excerptlength="24"] 
// Shortcode Post Block Style3

function post_style3_func( $atts ) {
	global $complete;
	global $authordata;
   extract( shortcode_atts( array(
		'show' => '3',
		'cat' => '',
		'excerptlength' => '24',
	), $atts ) );

	$lbposts = '<div class="post_style3_area">';
	$args = array( 'posts_per_page' => $show, 'cat' => $cat, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	
	if ( have_posts() ) {
		$n = 1;
		while ( have_posts() ) { 
			the_post();
			$marg_cls = ($n % 3) ? '' : 'no_margin_right';
			$marg_clr = ($n % 3) ? '' : '<div class="clear"></div>';
			$lbposts .= '<div class="post_block_style3 '.$marg_cls.'">'; 
						if ( has_post_thumbnail() ){
			$lbposts .= '<div class="style3-post-thumb">';
			}$lbposts .= '<a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '' ).'</a>'; if ( has_post_thumbnail() ){ $lbposts .= '</div>'; } $lbposts .= '
				
				<div class="styleinfo">
				<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>

				<div class="post_block_style3_meta">
                	<span>'.get_the_date('F j, Y').'</span> by <a href="'.get_author_posts_url( $authordata->ID, $authordata->user_nicename ).'">'.get_the_author().'</a><span class="commentarea"><i class="fa fa-comments"></i>
<a href="'.get_comments_link().'">('.get_comments_number().') Comments </a></span>
                </div>
				<span class="shortborder"></span>  
 
 				<p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p>
 				</div>
				
				</div>'.$marg_clr.'';
				$n++;
		}
	}else{
		$lbposts .= '<p>Sorry! There are no post.</p>';
	}
	wp_reset_query();
	$lbposts .= '</div>';
    return $lbposts;
}
add_shortcode( 'posts-style3', 'post_style3_func' );

//[posts-timeline show="4" cat="1" excerptlength="24"] 

// Shortcode Post Time Line

function post_timeline_func( $atts ) {
	global $complete;
	global $authordata;
   extract( shortcode_atts( array(
   		'show' => '4',
		'cat' => '',
		'excerptlength' => '24',
	), $atts ) );

	$tmlposts = '<div class="timeline-container">
  <div class="timeline-row">
    <ul class="timeline-both-side">';
	$args = array( 'posts_per_page' => $show, 'cat' => $cat, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	
	if ( have_posts() ) {
		$n = 1;
		while ( have_posts() ) { 
			the_post();
			$marg_cls = ($n % 2) ? '' : 'opposite-side';
			$tmlposts .= '<li class="'.$marg_cls.'">'; 
			$tmlposts .= '<div class="border-line"></div><div class="timeline-description">
			<div class="timeleft"><a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '' ).'</a></div>'; 
			if ( has_post_thumbnail() ){$tmlposts .= '<div class="timeright">'; }else {$tmlposts .= '<div class="timerightfull">';}
			$tmlposts .= '<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3><div class="post_block_style1_meta">
                	<span><a href="'.get_author_posts_url( $authordata->ID, $authordata->user_nicename ).'"><i class="fa fa-user fa-lg"></i> '.get_the_author().'</a></span><span><i class="fa fa-calendar"></i>
'.get_the_date('F j, Y').'</span>
                </div><p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p><a class="sktmore" href="'.get_permalink().'">'.$complete['recentpost_block_button'].'</a> </div>
			</div></li> ';
				$n++;
		}
	}else{
		$tmlposts .= '<p>Sorry! There are no posts.</p>';
	}
	wp_reset_query();
	$tmlposts .= '</ul>
  </div>
</div>';
    return $tmlposts;
}
add_shortcode( 'posts-timeline', 'post_timeline_func' );

//[posts-grid show="4" cat="1" excerptlength="24"] 
// Shortcode Post Grid

function post_grid_func( $atts ) {
	global $complete;
	global $authordata;
   extract( shortcode_atts( array(
   		'show' => '4',
		'cat' => '',   
		'excerptlength' => '24',
	), $atts ) );
	
	$gridposts = '<div class="gridwrapper">
<div class="masonry">';
	$args = array( 'posts_per_page' => $show, 'cat' => $cat, 'post__not_in' => get_option('sticky_posts'), 'orderby' => 'date', 'order' => 'desc' );
	query_posts( $args );
	
	if ( have_posts() ) {
		$n = 1;
		while ( have_posts() ) { 
			the_post();
			$gridposts .= '<div class="griditem"><a href="'.get_permalink().'" title="'.get_the_title().'">'.( (get_the_post_thumbnail( get_the_ID(), 'thumbnail') != '') ? get_the_post_thumbnail( get_the_ID(), 'full') : '' ).'</a>
<h3><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h3>
<div class="post_block_style1_meta">
                	<span><a href="'.get_author_posts_url( $authordata->ID, $authordata->user_nicename ).'"><i class="fa fa-user fa-lg"></i> '.get_the_author().'</a></span><span><i class="fa fa-calendar"></i>
'.get_the_date('F j, Y').'</span>
                </div><p>'.wp_trim_words( get_the_content(), $excerptlength ).'</p><a class="sktmore" href="'.get_permalink().'">'.$complete['recentpost_block_button'].'</a></div>'; 
				$n++;
		}
	}else{
		$gridposts .= '<p>Sorry! There are no posts.</p>';
	}
	wp_reset_query();
	$gridposts .= '</div></div>';
    return $gridposts;
}
add_shortcode( 'posts-grid', 'post_grid_func' );

// [skill title="HTML" percent="80" bgcolor="#ff7400"]
// add shortcode for skills
function skills_func($skill_var){
	extract( shortcode_atts(array(
		'title' 	=> 'title',
		'percent'	=> 'percent',
		'bgcolor'	=> 'bgcolor',
	), $skill_var));
	
	return '<div class="skillbar clearfix " data-percent="'.$percent.'%">
			<div class="skillbar-title"><span>'.$title.'</span>'.$percent.'%</div>
			<div class="skill-bg"><div class="skillbar-bar" style="background:'.$bgcolor.'"></div></div>
			</div>';
}

add_shortcode('skill','skills_func');

// Shortcode Client
/*[client url="#" image="image"]*/
function clientbox($atts){
		extract( shortcode_atts(array(
			'url' => 'url',
			'image' => 'image'
		), $atts));
		
		return '
                <div class="clientbox">
                    <a href="'.$url.'" target="_blank"><img src="'.$image.'"/></a>
                </div>
		';
}
add_shortcode('client','clientbox');

// Social Icon Shortcodes
/*[social_area]
    [social icon="facebook" link="#"]
    [social icon="twitter" link="#"]
    [social icon="google-plus" link="#"]	
    [social icon="linkedin" link="#"]
    [social icon="pinterest" link="#"]
[/social_area]*/
function complete_social_area($atts,$content = null){
  return '<div class="social-icons">'.do_shortcode($content).'</div>';
 }
add_shortcode('social_area','complete_social_area');

function complete_social($atts){
 extract(shortcode_atts(array(
  'icon' => '',
  'link' => ''
 ),$atts));
  return '<a href="'.$link.'" target="_blank" class="fa fa-'.$icon.' fa-1x" title="'.$icon.'"></a>';
 }
add_shortcode('social','complete_social');

// Footer Posts

/*[footerposts show="3"]*/
function footerpost_func( $atts ){
	global $post;
   extract( shortcode_atts( array(
		'show' => '',
	), $atts ) );
	$postoutput = '';
	wp_reset_query();
	query_posts(  array( 'posts_per_page'=>$show, 'post__not_in' => get_option('sticky_posts') )  );
	$postoutput .='<div class="footer-post-area">
            	<ul>';
	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
 			if ( has_post_thumbnail()) {
				$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'footerthumb' );
				$imgUrl = '<img src="'.$large_image_url[0].'"/>';
			}
			else
			{ 
				$imgUrl = '<img style="display:none;" src=""/>';
			}
			$postoutput .= '<li><a href="'.get_the_permalink().'">'.$imgUrl.'</a><h4><a href="'.get_the_permalink().'">'.get_the_title().'</a></h4><p>'.wp_trim_words( get_the_content(), 8 ).'</p></li>';
		endwhile;
	endif;
	wp_reset_query();
	$postoutput .= '</ul></div>';
	return $postoutput;
}
add_shortcode( 'footerposts', 'footerpost_func' );	

// Shortcode Flip Box
/*[flipbox fliptype="fliptype" frontimage="frontimage" fronttitle="fronttitle" fronttitlecolor="fronttitlecolor" frontdescriptioncolor="frontdescriptioncolor" frontdescription="frontdescription" backtitle="backtitle" backdescription="backdescription" backurl="backurl" backbutton="backbutton"][social_area][social icon="facebook" link="#"] [social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][/social_area][/flipbox]*/

function flip($atts,$content = null){
		extract( shortcode_atts(array(
			'fliptype' => 'fliptype',
			'frontimage' => 'frontimage',
			'fronttitle' => 'fronttitle',
			'fronttitlecolor' => 'fronttitlecolor',
			'frontdescription' => 'frontdescription',
			'frontdescriptioncolor' => 'frontdescriptioncolor',
			'backtitle' => 'backtitle',
			'backtitlecolor' => 'backtitlecolor',
			'backdescription' => 'backdescription',
			'backdescriptioncolor' => 'backdescriptioncolor',
			'backurl' => 'backurl',
			'backbutton' => 'backbutton',
		), $atts));
		
		return '
		<div class="flipcard '.$fliptype.'">
    <div class="front">
      	<div class="frontimage"><img src="'.$frontimage.'"/></div>
        <h3 style="color:'.$fronttitlecolor.';">'.$fronttitle.'</h3>
        <p style="color:'.$frontdescriptioncolor.';">'.$frontdescription.'</p>
    </div>
    <div class="back">
	  <h3 style="color:'.$backtitlecolor.';">'.$backtitle.'</h3>
	  <span style="border-color:'.$backtitlecolor.';"></span> 
      <p style="margin-bottom:20px; color:'.$backdescriptioncolor.';">'.$backdescription.'</p>
	  <div class="backsocial">'.do_shortcode($content).'</div>
	  <div class="clear"></div>
	  <div class="backmore"><a style="color:#FFF;" href="'.$backurl.'" class="sktmore"> '.$backbutton.' </a></div>
    </div>
</div>';

}
add_shortcode('flipbox','flip');

// Shortcode Divider
/*[divider style="divider1"]*/

function dividerstyle($atts){
		extract( shortcode_atts(array(
			'style' => 'style',
		), $atts));
		
		return '
		<div class="'.$style.'"><span></span></div>
		';

}
add_shortcode('divider','dividerstyle');

// Shortcode Heading Divider
/*[headingdivider text="text"]*/

function dividerstyleheading($atts){
		extract( shortcode_atts(array(
			'text' => 'text',
		), $atts));
		
		return '
		 <div class="fusion-title"><h3>'.$text.'</h3><div class="title-sep-container"><div class="title-sep sep-double"></div></div></div>
		';

}
add_shortcode('headingdivider','dividerstyleheading');

// Shortcode Promobox1
/* [promobox1 bgcolor="#f7f7f7" topbordercolor="#11bcf4" otherbordercolor="#e8e6e6"]Description[/promobox1] */

function promo1($atts, $content = null){
		extract( shortcode_atts(array(
			'bgcolor'  => 'bgcolor',
			'topbordercolor'  => 'topbordercolor',
			'otherbordercolor'  => 'otherbordercolor',
		), $atts));
		
		return '
			 <div class="promo1" style="background-color:'.$bgcolor.'; border-color: '.$topbordercolor.' '.$otherbordercolor.' '.$otherbordercolor.';">
             	'.$content.'
             </div>	
		';
}
add_shortcode('promobox1','promo1');

// Shortcode Promobox2
/* [promobox2 bgcolor="#f7f7f7" leftbordercolor="#11bcf4" button="Hello Text" url="#"]Description[/promobox2] */

function promo2($atts, $content = null){
		extract( shortcode_atts(array(
			'bgcolor'  => 'bgcolor',
			'leftbordercolor'  => 'leftbordercolor',
			'button'  => 'button',
			'url'  => 'url',
		), $atts));
		
		return '
			 <div class="promo2" style="background-color:'.$bgcolor.'; border-left-color:'.$leftbordercolor.';">
             	<div class="promo-left">
             	'.$content.'
                </div>
                <div class="promo-right">
                <div class="sktmore"><a href="'.$url.'">'.$button.'</a></div>
                </div>
                <div class="clear"></div>
             </div>	
		';
}
add_shortcode('promobox2','promo2');

// Shortcode Promobox3
/* [promobox3 bgcolor="#f7f7f7" bottombordercolor="#11bcf4" button="Hello Text" url="#"]Description[/promobox3] */

function promo3($atts, $content = null){
		extract( shortcode_atts(array(
			'bgcolor'  => 'bgcolor',
			'bottombordercolor'  => 'bottombordercolor',
			'button'  => 'button',
			'url'  => 'url',
		), $atts));
		
		return '
			 <div class="promo3" style="background-color:'.$bgcolor.'; border-bottom-color:'.$bottombordercolor.';">
             	'.$content.'
                <div class="sktmore"><a href="'.$url.'">'.$button.'</a></div>
             </div>	
		';
}
add_shortcode('promobox3','promo3');

// Shortcode Promobox4
/* [promobox4 bgcolor="#f7f7f7" bordercolor="#11bcf4"]Description[/promobox4] */

function promo4($atts, $content = null){
		extract( shortcode_atts(array(
			'bgcolor'  => 'bgcolor',
			'bordercolor'  => 'bordercolor',
		), $atts));
		
		return '
			<div class="promo4" style="background-color:'.$bgcolor.'; border-color:'.$bordercolor.';">
            	'.$content.'
             </div>	
		';
}
add_shortcode('promobox4','promo4');

// Shortcode infobox
/* [infoboxarea bgcolor="#ffffff" titlecolor="#323131" subtitlecolor="#11bcf4" descriptioncolor="#323131" title="What's Next" subtitle="Upcoming Classes" buttonlink="#" buttonbg="#ffffff" buttoncolor="#000000" buttontext="Read More" buttontarget="_self"]Description[/infoboxarea] */

function infobox($atts, $content = null){
		extract( shortcode_atts(array(
			'bgcolor'  => '',
			'titlecolor'  => '',
			'subtitlecolor'  => '',
			'descriptioncolor'  => '',
			'title'  => '',
			'subtitle'  => '',
			'buttonlink'  => '',
			'buttontext'  => '',
			'buttontarget'  => '',
			'buttonbg'  => '',
			'buttoncolor'  => '',
		), $atts));
		
		$infooutput = '';
		
		$infooutput .='<div class="wmp-box" style="background-color:'.$bgcolor.';">';
		if(!empty($title)){
			$infooutput .='<h2 style="color:'.$titlecolor.';">'.$title.'</h2>';
		}
		if(!empty($subtitle)){
			$infooutput .='<div class="subtitle" style="color:'.$subtitlecolor.';">'.$subtitle.'</div>';
		}
		$infooutput .='<div class="wmp-desc" style="color:'.$descriptioncolor.';">'.do_shortcode($content).'</div>';
		if(!empty($buttontext)){
			$infooutput .='<a href="'.$buttonlink.'" target="'.$buttontarget.'" class="sktmore" style="background-color:'.$buttonbg.'; color:'.$buttoncolor.';">'.$buttontext.'</a>';
		}
		$infooutput .='</div>';
		return $infooutput;
}
add_shortcode('infoboxarea','infobox');

/*[timing icons="fa fa-clock-o" classname="indoor cycling" classtime="2:00pm - 4:00pm"]*/
// add shortcode for classname and classtime 
function tabletiming($atts){
		extract( shortcode_atts(array(
			'icons' => '',
			'classname' => '',
			'classtime' => '',
		), $atts));
		
		return '<div class="prog-time">
				<div class="class-name"><i class="'.$icons.'"></i>'.$classname.'</div>
				<div class="class-time">'.$classtime.'</div>
				<div class="clear"></div>
				</div>
				<div class="clear"></div>
				';
}
add_shortcode('timing','tabletiming');


// Shortcode Cols
/* [columns size="size"][/columns] */

function cols($atts, $content = null){
		extract( shortcode_atts(array(
			'size'  => 'size',
		), $atts));
		
		return '
			<div class="'.$size.'">'.do_shortcode($content).'</div>  	
		';
}
add_shortcode('columns','cols');

// Shortcode Fitbox Left
/* [fitboxleft title="title" icon="icon" link="link"]Description Goes Here[/fitboxleft] */

function fitleft($atts, $content = null){
	extract( shortcode_atts( array(
			'title' => 'title',
			'icon' => 'icon',
			'link' => 'link',
			'description' => '',
	), $atts));	
	
	return '<div class="left-fitbox">
                <a href="'.$link.'">
                	<div class="left-fitleft">
                    	<div class="left-fit-title"><h3>'.$title.'</h3></div>
                        <div class="left-fit-desc">'.$description.'</div>
                    </div>
                    <div class="left-fitright"><img src="'.$icon.'" /></div>
                    </a>
                </div>';
}
add_shortcode('fitboxleft','fitleft');

// Shortcode Fitbox Right
/* [fitboxright title="title" description="" icon="icon" link="link"]Description Goes Here[/fitboxright] */

function fitright($atts, $content = null){
	extract( shortcode_atts( array(
			'title' => 'title',
			'icon' => 'icon',
			'link' => 'link',
			'description' => '',
	), $atts));	
	
	return '<div class="right-fitbox">
                <a href="'.$link.'">
                	<div class="right-fitleft">
                    <img src="'.$icon.'" />
                    </div>
                    <div class="right-fitright">
                    	<div class="right-fit-title"><h3>'.$title.'</h3></div>
                        <div class="right-fit-desc">'.$description.'</div></div>
                    </a>
             </div>';
}
add_shortcode('fitboxright','fitright');

// Shortcode Class Timing Box
/*[classtiming classname="cardio" classtime="10:00 - 10:45" icons="fa fa-clock-o" teachername="with stev Johnson"]*/
function classtime($atts){
		extract( shortcode_atts(array(
			'classname' => 'classname',
			'classtime' => 'classtime',
			'icons'     => 'icons',
			'teachername' => 'teachername',
			'last' => '',
		), $atts));
		
		return '
			<div class="class-time-box '.$last.'">
                	<div class="class-time-name">'.$classname.'</div>
                    <div class="class-time-times">
                    	<ul>
                        	<li class="class-timing"><i class="'.$icons.'"></i> '.$classtime.'</li>
                            <li class="class-teacher-name">'.$teachername.'</li>
                        </ul>
                    </div>
                </div>
		';
}
add_shortcode('classtiming','classtime');


// Shortcode Programm Box

/* [programms layout="2" bgcolor="#ffffff" icon="icon" title="title" subtitle="subtitle" subtitlecolor="subtitlecolor" button="Enroll Now" url="#" price="$ 99. 99/ 1 year"]Description[/programms] */

function programmbox($atts, $content = null){
		extract( shortcode_atts(array(
			'layout' => 'layout',
			'bgcolor'  => 'bgcolor',
			'icon'  => 'icon',
			'url' => 'url',			
			'title'  => 'title',
			'button'  => 'button',
			'subtitle' => 'subtitle',
			'price' => 'price',
			'subtitlecolor' => 'subtitlecolor',
		), $atts));
		
		return '
			 <div class="programm-box progpattern-'.$layout.'">
             	<div class="progimagebox"><img src="'.$icon.'" /></div>
                <div class="progcontentarea" style="background-color:'.$bgcolor.';">
                <div class="progcontentbox">
                	<h3><a href="'.$url.'">'.$title.'</a></h3>
                    <div class="yearprog" style="color:'.$subtitlecolor.';">'.$subtitle.'</div>
                    <div class="progcontent">
						'.do_shortcode($content).'
                    </div>
                </div>
                <div class="enrollbox">
                	<div class="enrol-left"><h4>'.$price.'</h4></div>
                    <div class="enrol-right"><a href="'.$url.'" class="sktmore">'.$button.'</a></div>
                    <div class="clear"></div>
                </div>
                </div>
             </div>
		';
}
add_shortcode('programms','programmbox');

// Shortcode Our Product
/*[ourproduct layout="layout" productimage="productimage" productname="Workout Shoes" productprice="$99.89" buttontext="ADD TO CART" icons="fa fa-shopping-cart" buttonlink="#"]*/

function coolproduct($atts){
		extract( shortcode_atts(array(
			'layout' => 'layout',
			'productimage' => 'productimage',
			'productname' => 'productname',
			'productprice' => 'productprice',
			'icons'     => 'icons',
			'buttontext'     => 'buttontext',
			'buttonlink'     => 'buttonlink',
		), $atts));
		
		return '
			<div class="product-box productpattern-'.$layout.'">
            	<div class="prodimagebox"><a href="'.$buttonlink.'"><img src="'.$productimage.'" /></a></div>
                <div class="prodtitle"><h4><a href="'.$buttonlink.'">'.$productname.'</a></h4></div>
                <div class="areapricecart">
                	<div class="prodprice">'.$productprice.'</div>
                    <div class="prodcart"><a href="'.$buttonlink.'"><i class="'.$icons.'"></i> '.$buttontext.'</a></div>
                    <div class="clear"></div>
                </div>
            </div>
		';
}
add_shortcode('ourproduct','coolproduct');

// [readmore-link align="center" button="Read More" links="#"] 
function readmore_func( $atts) {
	extract(shortcode_atts(array(	
	'button'		=> '',	
	'links'		=> '',
	'align'		=> '',						
	), $atts));
	$rrow = '<div class="view-all-btn" style="text-align:'.$align.';"><a href="'.$links.'">'.$button.'</a></div>';
    return $rrow;
}
add_shortcode( 'readmore-link', 'readmore_func' );