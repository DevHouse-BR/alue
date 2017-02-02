<?php
require_once (TEMPLATEPATH . '/functions/theme-metro.php');

if (is_admin()) {
require('inc/nhp-options.php' );
}
$nature_mt = get_option('nature_mt');

//Show top menu for header.php
if( !function_exists( 'show_top_menu') )
{
	function show_top_menu() {
		global $nature_mt;
		echo '<ul class="nav">';
		if(isset($nature_mt['pages_topmenu']) && $nature_mt['pages_topmenu'] != '' )
			$pages = get_pages( array('include' => $nature_mt['pages_topmenu'], 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );
		else
			$pages = get_pages('number=4&sort_column=menu_order&sort_order=ASC');
		$count = count($pages);
		if($nature_mt['menu_homelink'] == '1') 
			echo '<li><a href="' . get_home_url() . '/#home">Home</a>';
		for($i = 0; $i < $count; $i++)
		{
			echo '<li><a href="' . get_home_url() . '/#' . $pages[$i]->post_name . '" >' . $pages[$i]->post_title . '</a></li>' . PHP_EOL;
		}
		if(isset($nature_mt['blog_page']) && $nature_mt['blog_page'] != '')
			echo '<li><a href="' . get_permalink($nature_mt['blog_page'][0]) . '" class="external">Blog</a></li>';
		echo '</ul>';
	}
}

//

if( !function_exists( 'show_top_menu_inset') )
{
	function show_top_menu_inset() {
		global $nature_mt;
		echo '<ul class="nav">';
		if(isset($nature_mt['pages_topmenu']) && $nature_mt['pages_topmenu'] != '' )
			$pages = get_pages( array('include' => $nature_mt['pages_topmenu'], 'sort_column' => 'menu_order', 'sort_order' => 'ASC') );
		else
			$pages = get_pages('number=4&sort_column=menu_order&sort_order=ASC');
		$count = count($pages);
		if($nature_mt['menu_homelink'] == '1') 
			echo '<li><a href="' . get_home_url() . '" class="external">Home</a>';
		for($i = 0; $i < $count; $i++)
		{
			echo '<li><a href="' . get_home_url() . '/#' . $pages[$i]->post_name . '" class="external">' . $pages[$i]->post_title . '</a></li>' . PHP_EOL;
		}
		if(isset($nature_mt['blog_page']) && $nature_mt['blog_page'] != '')
			echo '<li><a href="' . get_permalink($nature_mt['blog_page'][0]) . '" class="external">Blog</a></li>';
		echo '</ul>';
	}
}


if(! function_exists('theme_mt_styles_chosse'))
{
function theme_mt_styles_chosse(){
	global $nature_mt;
		if(isset($nature_mt['nature_style_vr']) && $nature_mt['nature_style_vr'] == 1)
		{	
	wp_enqueue_style('nature_style_light', get_template_directory_uri().'/css/nature_style_light.css', false, false, 'all');
}
		if(isset($nature_mt['nature_style_vr']) && $nature_mt['nature_style_vr'] == 2)
		{	
	wp_enqueue_style('nature_style_dark', get_template_directory_uri().'/css/nature_style_dark.css', false, false, 'all');
}
}
}
add_action('wp_enqueue_scripts', 'theme_mt_styles_chosse');
//Colorization & Fonts

add_action('wp_head', 'nature_customization');
if(! function_exists('nature_customization'))
{
	function nature_customization() {

		global $nature_mt;

	if(isset($nature_mt['body_font']) && $nature_mt['body_font'] != '')
		{
			echo '<link id="' . $nature_mt['body_font'] . '" href="http://fonts.googleapis.com/css?family=' .$nature_mt['body_font'] . '" rel="stylesheet" type="text/css" />' . PHP_EOL;
		}

	if(isset($nature_mt['h2_font']) && $nature_mt['h2_font'] != '')
		{
			echo '<link id="' . $nature_mt['h2_font'] . '" href="http://fonts.googleapis.com/css?family=' .$nature_mt['h2_font'] . '" rel="stylesheet" type="text/css" />' . PHP_EOL;
		}

	if(isset($nature_mt['h3_font']) && $nature_mt['h3_font'] != '')
		{
			echo '<link id="' . $nature_mt['h3_font'] . '" href="http://fonts.googleapis.com/css?family=' .$nature_mt['h3_font'] . '" rel="stylesheet" type="text/css" />' . PHP_EOL;
		}

	if(isset($nature_mt['h4_font']) && $nature_mt['h4_font'] != '')
		{
			echo '<link id="' . $nature_mt['h4_font'] . '" href="http://fonts.googleapis.com/css?family=' .$nature_mt['h4_font'] . '" rel="stylesheet" type="text/css" />' . PHP_EOL;
		}		
		//add custom CSS as per the theme options only if custom colorization was enabled.
		if(isset($nature_mt['enable_colorization']) && $nature_mt['enable_colorization'] == 1)
		{

			echo "\n<style type='text/css'> \n";

			if(isset($nature_mt['bg_image']) && $nature_mt['bg_image'] != '')
			{ 
				echo "body {background-image:url('" . $nature_mt['bg_image'] . "') repeat-x !important;}} \n";
			}


			if(isset($nature_mt['bg_color']) && $nature_mt['bg_color'] != '') 
			{
				echo "body { background-image: none; background-color: " . $nature_mt['bg_color'] . " !important; } \n";
			}

			if(isset($nature_mt['m_content_image']) && $nature_mt['m_content_image'] != '')
			{ 
				echo "#main-content {background-image:url('" . $nature_mt['m_content_image'] . "') repeat-x !important;} \n";
			}

			if(isset($nature_mt['newsletter_image']) && $nature_mt['newsletter_image'] != '')
			{ 
				echo ".newsletter {background-image:url('" . $nature_mt['newsletter_image'] . "') repeat center fixed;} \n";
			}

			if(isset($nature_mt['portfolio_image']) && $nature_mt['portfolio_image'] != '')
			{ 
				echo ".portfolio {background:url('" . $nature_mt['portfolio_image'] . "') !important;} \n";
			}

			if(isset($nature_mt['contact_image']) && $nature_mt['contact_image'] != '')
			{ 
				echo ".contact {background-image:url('" . $nature_mt['contact_image'] . "') !important;} \n";
			}


			echo '
			h5 { font-size: ' . $nature_mt['body_size'] . 'px; color: ' . $nature_mt['body_color_white'] . '; font-family: \'' . str_replace('+', ' ', $nature_mt['body_font']) . '\',sans-serif; }
			h2 { color: ' . $nature_mt['h2_color'] . '; font-size: ' . $nature_mt['h2_size'] . 'px; font-family: \'' . str_replace('+', ' ', $nature_mt['h2_font']) . '\',sans-serif; }
			h3 { color: ' . $nature_mt['h3_color'] . '; font-size: ' . $nature_mt['h3_size'] . 'px; font-family: \'' . str_replace('+', ' ', $nature_mt['h3_font']) . '\',sans-serif; }
			h4 { color: ' . $nature_mt['h4_color'] . '; font-size: ' . $nature_mt['h4_size'] . 'px; font-family: \'' . str_replace('+', ' ', $nature_mt['h4_font']) . '\',sans-serif; }
			
			

			';
			echo '</style>';
		}		


	}
}

function filter_media_comment_status( $open, $post_id ) {
	$post = get_post( $post_id );
	if( $post->post_type == 'attachment' ) {
		return false;
	}
	return $open;
}
add_filter( 'comments_open', 'filter_media_comment_status', 10 , 2 );

?>