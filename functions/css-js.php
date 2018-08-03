<?
/*------------------------------------------------------------*\
    Gestion des scripts et css
\*------------------------------------------------------------*/




function include_custom_jquery() {



	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js');

	wp_deregister_script('slider');
	wp_enqueue_script('slider', 'https://unpkg.com/flickity@2/dist/flickity.pkgd.js');

	wp_deregister_script('jsglobal');
	wp_enqueue_script('jsglobal', get_template_directory_uri() . '/js/global.js');

	wp_deregister_script('bxslider');
	wp_enqueue_script('bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js');

	wp_deregister_script('fullpage');
	wp_enqueue_script('fukkpage', get_template_directory_uri() . '/js/jquery.fullPage.js');

}

function add_js_scripts()
{
    // pass Ajax Url to ajax.js
    wp_localize_script('script', 'ajaxcustom', get_template_directory_uri() . '/ajax/custom-ajax.php' ); //
}


function include_custom_style(){

	wp_deregister_style('bxstyle');
	wp_enqueue_style('bxstyle', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css');

	wp_deregister_style('slider_css');
	wp_enqueue_style('slider_css', 'https://unpkg.com/flickity@2/dist/flickity.css' );

}




add_action('wp_enqueue_scripts', 'include_custom_jquery');
add_action('wp_enqueue_scripts', 'add_js_scripts');
//add_action('wp_enqueue_scripts', 'include_custom_style')


?>
