<?php

/**
 * Activate Add-ons
 * Here you can enter your activation codes to unlock Add-ons to use in your theme. 
 * Since all activation codes are multi-site licenses, you are allowed to include your key in premium themes.
 */ 

function my_acf_settings( $options )
{
    // activate add-ons
    $options['activation_codes']['repeater'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['options_page'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['flexible_content'] = 'XXXX-XXXX-XXXX-XXXX';
    $options['activation_codes']['gallery'] = 'XXXX-XXXX-XXXX-XXXX';
    
    // setup other options (http://www.advancedcustomfields.com/docs/filters/acf_settings/)
    
    return $options;
    
}
add_filter('acf_settings', 'my_acf_settings');


/**
 * Registra grupos de campos
 * A função register_field_group aceita 1 array que contém a informação relevante para registrar o grupo de campo
 * Você pode editar o array como você quiser. Entretanto, isso pode resultar em erros se o array não for compatível com o ACF
 * Esse código precisa rodar toda vez que o functions.php é lido
 */

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => '512c08405aa3c',
		'title' => 'Visita',
		'fields' => 
		array (
			0 => 
			array (
				'key' => 'field_3',
				'label' => 'Data da Visita',
				'name' => 'data_visita',
				'type' => 'date_picker',
				'order_no' => 0,
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 
				array (
					'status' => 0,
					'rules' => 
					array (
						0 => 
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'date_format' => 'dd-M',
				'display_format' => 'dd/mm/yy',
			),
		),
		'location' => 
		array (
			'rules' => 
			array (
				0 => 
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'visita',
					'order_no' => 0,
				),
			),
			'allorany' => 'all',
		),
		'options' => 
		array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => 
			array (
			),
		),
		'menu_order' => 0,
	));
}

?>