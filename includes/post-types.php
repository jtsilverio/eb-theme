<?php

//*******************************
//***VISITAS
//******************************
function create_visita_post_type(){
	$labels = array(
				'name' => 'Visitas',
				'singular_name' => 'Visita',
				'add_new' => 'Adicionar nova Visita',
				'add_new_item' => 'Adicionar nova Visita',
				'edit' => 'Editar',
				'edit_item' => 'Editar Visita',
				'new_item' => 'Nova Visita',
				'view' => 'Visualizar Visita',
				'view_item' => 'Visualizar Visita',
				'search_items' => 'Procurar Visita',
				'not_found' => 'Nenhuma Visita encontrada',
				'not_found_in_trash' => 'Nenhuma Visita encontrado na lixeira'
	);	
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'supports' => array('title','editor','thumbnail'),
		'public_queryable' => true,
		'show_ui' => true,          
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null

	);
	register_post_type('visita',$args);
}
add_action('init', 'create_visita_post_type');

function create_atividade_post_type(){
	$labels = array(
				'name' => 'Atividades',
				'singular_name' => 'Atividade',
				'add_new' => 'Adicionar nova Atividade',
				'add_new_item' => 'Adicionar nova Atividade',
				'edit' => 'Editar',
				'edit_item' => 'Editar Atividade',
				'new_item' => 'Nova Atividade',
				'view' => 'Visualizar Atividade',
				'view_item' => 'Visualizar Atividade',
				'search_items' => 'Procurar Atividade',
				'not_found' => 'Nenhuma Atividade encontrada',
				'not_found_in_trash' => 'Nenhuma Atividade encontrado na lixeira'
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'supports' => array('title','editor','thumbnail','excerpt'),
		'public_queryable' => true,
		'show_ui' => true,          
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => null,
		'taxonomies' => array('category')

	);
	register_post_type('atividade',$args);
}
add_action('init', 'create_atividade_post_type');

?>