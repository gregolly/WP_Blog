<?php

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

add_action('init', 'twtema_action_init');

function twtema_action_init(){
	register_nav_menu('twmenu-principal', 'Menu principal (cabeçalho) ');
	register_nav_menu('twmenu-rodape', 'Menu rodapé');
}