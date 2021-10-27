<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Sai, se acessado diretamente
}


@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );


function load_scripts()
{
    wp_enqueue_style('material', 'https://fonts.googleapis.com/icon?family=Material+Icons', [], '1.0', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap/bootstrap.css', [], '1.0', 'all');
    wp_enqueue_style('bootstrap-grid', get_template_directory_uri().'/assets/css/bootstrap/bootstrap-grid.css', [], '1.0', 'all');
    wp_enqueue_style('bootstrap-reboot', get_template_directory_uri().'/assets/css/bootstrap/bootstrap-reboot.css', [], '1.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri().'/assets/css/style.css', [], '1.0', 'all');
    wp_enqueue_style('all', get_template_directory_uri().'/assets/css/all.css', [], '1.0', 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', [], '1.0', 'all');
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', [], '1.0', 'all');



    wp_enqueue_script('jquery-js', get_template_directory_uri().'/assets/js/jquery.min.js', [], '3.4.1', true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.js', [], '4.0.0', true);
    wp_enqueue_script('bootstrap-bundle-js', get_template_directory_uri().'/assets/js/bootstrap/bootstrap.bundle.js', [], '4.0.0', true);
    wp_enqueue_script('textos-js', get_template_directory_uri().'/assets/js/textos.js', [], '1.0.0', true);
    wp_enqueue_script('perguntas-faq-js', get_template_directory_uri().'/assets/js/perguntas-faq.js', [], '1.0.0', true);
    wp_enqueue_script('qualifique-se-js', get_template_directory_uri().'/assets/js/qualifique-se.js', [], '1.0.0', true);
    wp_enqueue_script('mapas-js', get_template_directory_uri().'/assets/js/mapas.js', [], '1.0.0', true);
    wp_enqueue_script('menu-mobile-js', get_template_directory_uri().'/assets/js/menu-mobile.js', [], '1.0.0', true);
    wp_enqueue_script('planos-js', get_template_directory_uri().'/assets/js/planos.js', [], '1.0.0', true);
    wp_enqueue_script('acoes-js', get_template_directory_uri().'/assets/js/acoes.js', [], '1.0.0', true);

}

function verDados(){
	global $wpdb;
	$a = "SELECT dados_values FROM dados_site";
	$wpdb->get_results($a);

	if($wpdb->num_rows == 0){
		$a = "CREATE TABLE IF NOT EXISTS `dados_site` (
    dadosId int auto_increment,
    dados_name varchar(200) NOT NULL,
    dados_values varchar(200),
    PRIMARY KEY (dadosId)
)";
		$wpdb->query($a);
		$a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('emailCadastroCurriculos', 'atendimento@alternativaprovedor.com.br')";
        $wpdb->query($a);
		$a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('metodoEnvioEmail', NULL)";
        $wpdb->query($a);
		$a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('enderecoGmail', NULL)";
        $wpdb->query($a);
		$a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('senhaGmail', NULL);";
		$wpdb->query($a);
	}else{
	    $a = "SELECT dados_values FROM dados_site WHERE dados_name='emailCadastroCurriculos'";
	    $wpdb->get_results($a);
	    if($wpdb->num_rows == 0){
            $a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('emailCadastroCurriculos', NULL);";
            $wpdb->query($a);
        }

	    $a = "SELECT dados_values FROM dados_site WHERE dados_name='metodoEnvioEmail'";
	    $wpdb->get_results($a);
	    if($wpdb->num_rows == 0){
            $a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('metodoEnvioEmail', NULL);";
            $wpdb->query($a);
        }

	    $a = "SELECT dados_values FROM dados_site WHERE dados_name='enderecoGmail'";
	    $wpdb->get_results($a);
	    if($wpdb->num_rows == 0){
            $a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('enderecoGmail', NULL);";
            $wpdb->query($a);
        }

	    $a = "SELECT dados_values FROM dados_site WHERE dados_name='senhaGmail'";
	    $wpdb->get_results($a);
	    if($wpdb->num_rows == 0){
            $a = "INSERT INTO dados_site (dados_name, dados_values) VALUES ('senhaGmail', NULL);";
            $wpdb->query($a);
        }
    }
}

add_action('wp_enqueue_scripts', 'load_scripts');
add_action('admin_init', 'verDados');


function mr_wp_title( $title ) {
    // Do not filter for RSS feed / if SEO plugin installed
    if ( is_feed() || class_exists('All_in_One_SEO_Pack') || class_exists('HeadSpace_Plugin') || class_exists('Platinum_SEO_Pack') || class_exists('wpSEO') || defined('WPSEO_VERSION') )
        return $title;
    if ( is_front_page() ) { 
        $title = get_bloginfo('name').' - '.get_bloginfo('description');
    }
    if ( is_front_page() && get_bloginfo('description') == '' ) { 
        $title = get_bloginfo('name');
    }
    if ( !is_front_page() ) { 
        $title .= ' - '.get_bloginfo('name');
    }
    return $title;
}
add_filter( 'wp_title', 'mr_wp_title' );

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );