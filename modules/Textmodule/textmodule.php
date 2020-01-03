<?php
/**
 * This is an example module that will show textbox.
 *
 * @class textmodule
 */

class textmodule extends FLBuilderModule{

	/*
	* The module construct.
	*/

	public function __construct(){


		parent::__construct( array(
			'name'            => __( 'Text box', 'fl-builder' ),							//displayed name of module
			'description'     => __( 'An basic example module for text box.', 'fl-builder' ),
			'category'        => __( 'Example Modules', 'fl-builder' ),
			'dir'             => __DIR__,
			'partial_refresh' => true,
			'url'             => plugins_url( '', __FILE__ ),
		));

	}
}

/**
 * Register the module and its form settings.
 * We are using a very simple form here with only two options, photo_one and photo_two.
 */
FLBuilder::register_module( 'textmodule', array(
	'general' => array(
		'title' => __( 'General', 'fl-builder' ),
		'sections' => array(
			'general' => array(
				'title' => __( 'Section Title', 'fl-builder' ),
				'fields' => array(
					'heading' => array(
						'type' => 'text',
						'label' => __('Heading', 'fl-builder'),
						'preview' => array(
							'type'=> 'text',
							'selector'=>'',
						),
					),
					'text_link' =>array(
						'type'  => 'link',
						'label' => __('Text Link', 'fl-builder'),
						'preview' => array(
							'type'=> 'none',
							'selector'=> '',
						),
					),
					'text_editor' =>array(
						'type'  => 'editor',
						'label' => __('Text Box', 'fl-builder'),
						'preview' => array(
							'type'=> 'text',
							'selector'=> '.fl-textbox',
						),
					),
				),
			),
		),
	),
	'styling' => array(
		'title'=> __( 'Style tab', 'fl-builder' ),
		'sections'=> array(
			'style' => array(
				'title' => __( 'Section2 Title', 'fl-builder' ),
				'fields' => array(
					'color'      => array(
						'type'        => 'color',
						'label'       => __( 'Color', 'fl-builder' ),
						'show_reset'  => true,
						'show_alpha'  => true,
						'preview'     => array(
							'type'     => 'css',
							'selector' => '.fl-textbox, .fl-textbox *',
							'property' => 'color',
						),
					),
					'text_tag' => array(
						'type' =>'select',
						'label'=> __( 'Heading Tag', 'fl-builder' ),
						'default' => 'h2',
						'options' => array(
							'h1' => 'h1',
							'h2' => 'h2',
							'h3' => 'h3',
							'h4' => 'h4',
							'h5' => 'h5',
							'h6' => 'h6',
						),
					),
					'typography' => array(
						'type'       => 'typography',
						'label'      => __( 'Text Typography', 'fl-builder' ),
						'preview'     => array(
							'type'	=> 'css',
							'selector'=> '.fl-textbox, .fl-textbox *',
						),
					),
					'separator' => array(
						'type'  => 'select',
						'label' => __( 'Separator', 'fl-builder' ),
						'default' => 'none',
						'options' => array(
							'none'       => __( 'None', 'fl-builder' ),
							'line'       => __( 'Separator-Line', 'fl-builder' ),
							'line_icon'  => __( 'Separator-Line With Icon', 'fl-builder' ),
							'line_image' => __( 'Separator-Line With Image', 'fl-builder' ),
							'line_text'  => __( 'Separator-Line With Text', 'fl-builder' ),
						),
						'toggle'  => array(
							'line'  => array(
								'fields' => array('separator_position'),
							),
							'line_icon' => array(
								'fields' => array('separator_position'),
							),
							'line_image' => array(
								'fields' => array('separator_position'),
							),
							'line_text' => array(
								'fields' => array('separator_position'),
							),
						),
					),
					'separator_position' => array(
						'type'    => 'select',
						'label'   => __( 'Separator Position', 'fl-builder' ),
						'default' => 'center',
						'options' => array(
							'center' => __( 'Between Heading & Description', 'fl-builder' ),
							'top'    => __( 'Top', 'fl-builder' ),
							'bottom' => __( 'Bottom', 'fl-builder' ),
						),
					),	
				),

			),
		),
	)));