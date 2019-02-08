<?php
//register custom navigation walker
require_once('wp_bootstrap_pagination.php');
function customize_wp_bootstrap_pagination($args) {
    
	$args['previous_string'] = 'anterior';
	$args['next_string'] = 'próximo';
	
	return $args;
}
add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');

add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

add_action('wp_enqueue_scripts', 'twtema_add_script_cabecalho');

function twtema_add_script_cabecalho()
{
	//Adicionar estilos
	wp_enqueue_style('bootstrap-twtema', get_stylesheet_directory_uri() . '/css/bootstrap.css');
	wp_enqueue_style('style-twtema', get_stylesheet_directory_uri() . '/css/style.css');

	//Adicionar os scripts
	wp_enqueue_script('modernizr-twtema', get_stylesheet_directory_uri() . '/js/modernizr.js');
}

add_action('wp_footer', 'twtema_add_script_rodape');

function twtema_add_script_rodape()
{
	wp_enqueue_script('jquery-twtema', get_stylesheet_directory_uri() . '/js/jquery.js');
	wp_enqueue_script('bootstrap-twtema', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', ['jquery-twtema']);
}

//registrar menu
add_action('init', 'twtema_action_init');

function twtema_action_init()
{
	register_nav_menu('twmenu-principal', 'Menu principal (cabeçalho)');
	register_nav_menu('twmenu-rodape', 'Menu rodapé');

	//chama a função que registra o custom post
	twtema_registrar_custom_post_type();
}

register_sidebar([
	'name'			=> 'Barra Lateral (Sidebar)',
	'id'			=> 'tw-sidebar',
	'description'	=> 'Área lateral de sidebar',
	'before_title'	=> '<h4>',
	'after_title'	=> '</h4>'
]);

function twtema_registrar_custom_post_type() {

	$descritivos = array(
		'name' => 'Cursos',
		'singular_name' => 'Curso',
		'add_new' => 'Adicionar Novo Curso',
		'add_new_item' => 'Adicionar Curso',
		'edit_item' => 'Editar Curso',
		'new_item' => 'Novo Curso',
		'view_item' => 'Ver Curso',
		'search_items' => 'Procurar Curso',
		'not_found' =>  'Nenhum Curso encontrado',
		'not_found_in_trash' => 'Nenhum Curso na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Cursos'
	);

	$args = array(
		'labels' => $descritivos,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','editor','thumbnail', 'custom-fields', 'revisions') //Quais recursos serão usados (metabox)
    );

	register_post_type( 'cursos' , $args );

	$descritivosBanner = array(
		'name' => 'Banner',
		'singular_name' => 'Banner',
		'add_new' => 'Adicionar Novo Banner',
		'add_new_item' => 'Adicionar Banner',
		'edit_item' => 'Editar Banner',
		'new_item' => 'Novo Banner',
		'view_item' => 'Ver Banner',
		'search_items' => 'Procurar Banner',
		'not_found' =>  'Nenhum Banner encontrado',
		'not_found_in_trash' => 'Nenhum Banner na Lixeira',
		'parent_item_colon' => '',
		'menu_name' => 'Banner'
	);

	$argsBanner = array(
		'labels' => $descritivosBanner,  //Insere o Array de labels dentro do argumento de labels
		'public' => true,  //Se o Custom Type pode ser adicionado aos menus e exibidos em buscas
		'hierarchical' => false,  //Se o Custom Post pode ser hierarquico como as páginas
		'menu_position' => 5,  //Posição do menu que será exibido
		'supports' => array('title','thumbnail') //Quais recursos serão usados (metabox)
    );

	register_post_type( 'banners' , $argsBanner );


	flush_rewrite_rules();
}

//Adiciona suporte a miniaturas (imagem destacada)
add_theme_support('post-thumbnails');

//Adicionar tamanhos de imagem no Wordpress
add_image_size('curso-miniatura', 150, 135, true);
add_image_size('slide-home', 458, 254, true);

add_action('pre_get_posts', 'twtema_filtro_loop_principal');

function twtema_filtro_loop_principal($query)
{
	if($query->is_main_query() && $query->is_home()) {
		$query->set('ignore_sticky_posts', true);
	}
}

add_theme_support('title-tag');

add_theme_support('customize-selective-refresh-widgets');

add_theme_support('custom-logo', [
	'height' => 50,
	'width' => 150,
	'flex-width' => true,
]);

























