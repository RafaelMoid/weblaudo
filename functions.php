<?php 

//Habilitar menus
add_theme_support('menus');
add_theme_support ( 'post-thumbnails' );

// Custom Post Type

function custom_post_type_equipe() {
	register_post_type('equipe', array(
		'label' => 'equipe',
		'description' => 'Equipe',
		'public' => true,		
		'has_archive' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'capability_type' => 'post',
		'map_meta_cap' => true,
		'hierarchical' => false,
		'rewrite' => array('slug' => 'equipe', 'with_front' => true),
		'query_var' => true,
		'supports' => array('title', 'editor', 'page-attributes','post-formats'),

		'labels' => array (
			'name' => 'Equipe',
			'singular_name' => 'Colaborador',
			'menu_name' => 'Equipe',
			'add_new' => 'Adicionar Novo',
			'add_new_item' => 'Adicionar Novo Colaborador',
			'edit' => 'Editar',
			'edit_item' => 'Editar Colaborador',
			'new_item' => 'Novo Colaborador',
			'view' => 'Ver Colaborador',
			'view_item' => 'Ver Colaborador',
			'search_items' => 'Procurar Colaborador',
			'not_found' => 'Nenhum Colaborador Encontrado',
			'not_found_in_trash' => 'Nenhum Colaborador Encontrado no Lixo',
		)
	));
}
add_action('init', 'custom_post_type_equipe');


?>