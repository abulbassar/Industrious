<?php 
	/* for Indusries theme */

?>

<?php
	
vc_map(array(
		'name'						=>__('First Section','industrious'),
		'description'				=>__('This is for First Section','industrious'),
		'base'						=>'sec_one',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Industries_theme','industrious'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Heading Title',
			  'param_name' => 'sec_one_heading',
			  ),
			  array(
			  'type' => 'textarea',
			  'value' => '',
			  'heading' => 'Description',
			  'param_name' => 'sec_one_head_desc',
			  ),
		
				array(
					'type' => 'param_group',
					'heading'=> 'Icon Box Heading',
					'param_name' => 'sec_one_group',
					'params'	=> array(
							array(
							  'type' => "iconpicker",
							  "admin_label" => true,
							  "heading" => __( "Icon name", "industrious" ),
							  "param_name" => "sec_one_icon"
							),
							array(
							  'type' => "textfield",
							  'admin_label' => true,
							  'heading' => __( 'heading', 'industrious' ),
							  'param_name' => 'sec_one_box_head'
							),
							array(
							  'type' => "textarea",
							  'admin_label' => true,
							  'heading' => __( 'Description', 'industrious' ),
							  'param_name' => 'sec_one_box_desc'
							),
							
					),	
				),
		),
	));	
	
	
// heading
	vc_map(array(
		'name'						=>__('industries heading','industries'),
		'description'				=>__('This is for heading section','theory'),
		'base'						=>'industries_heading',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Industries_theme','industries'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Feature heading", "industries" ),
					  "param_name" => "industries_head"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "head description", "theory" ),
					  "param_name" => "industries_head_desc"
					),
		),
		
	));
	
	//testimonial
	vc_map(array(
		'name'						=>__('industries testimonial Info','industries'),
		'description'				=>__('This is for testimonial section','theory'),
		'base'						=>'industries_testimonial',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('Industries_theme','industries'),
		'params'					=>array(
					
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Team heading", "industries" ),
					  "param_name" => "industries_testi_head"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Team head description", "theory" ),
					  "param_name" => "industries_testi_head_desc"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Per Page Testimonial qty", "industries" ),
					  "param_name" => "industries_testi_qty"
					),
		),
		
	));
	
	
	
	
	


?>