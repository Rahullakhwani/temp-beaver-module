<?php
/**
 * This is an example module that will show infobox.
 *
 * @class infoboxmodule
 */

class infoboxmodule extends FLBuilderModule{

	/*
	* The module construct.
	*/

	public function __construct(){


		parent::__construct( array(
			'name'            => __( 'Info box', 'fl-builder' ),							//displayed name of module
			'description'     => __( 'An basic example module for information box.', 'fl-builder' ),
			'category'        => __( 'Example Modules', 'fl-builder' ),
			'dir'             => __DIR__,
			'partial_refresh' => true,
			'url'             => plugins_url( '', __FILE__ ),
		));

		/**
		 * Now we include our js and css files using the module classes built in methods.
		 */
		$this->add_js( 'jquery-event-move',   $this->url . 'assets/js/jquery.event.move.js',   array( 'jquery' ) );
		$this->add_js( 'jquery-twentytwenty', $this->url . 'assets/js/jquery.twentytwenty.js', array( 'jquery' ) );
		$this->add_css( 'twentytwenty',       $this->url . 'assets/css/twentytwenty.css' );

	}
}

/**
 * Register the module and its form settings.
 * We are using a very simple form here with only two options, photo_one and photo_two.
 */

FLBuilder::register_module( 'infoboxmodule', array(
	'general' => array(
		'title' => __( 'General', 'fl-builder' ),
		'sections' => array(
			'general' => array(
				'title' => __( 'Section Title', 'fl-builder' ),
				'fields' => array(
					'photo_one' => array(
						'type' => 'photo',
						'label' => __( 'Photo One', 'fl-builder' ),
						'preview' => array(
							'type' => 'none',
						),
					),
					'photo_two' => array(
						'type' => 'photo',
						'label' => __( 'Photo Two', 'fl-builder' ),
						'preview' => array(
							'type' => 'none',
						),
					),	
				),
			),
		),

	),
	'style' => array(
		'title' => __('Style tab', 'fl-builder' ),
		'sections' => array(
			'styling_options'=> array(
				'title' => __( 'Image Style', 'fl-builder' ),
				'fields' => array(
					'slider_bg_overlay'      => array(
						'type'        => 'color',
						'label'       => __( 'Slider Overlay Color', 'fl-builder' ),
						'show_reset'  => true,
						'show_alpha'  => false,
					),
				),
			),
			'styling_text'=> array(
				'title'=> __('Text Style','fl-builder'),
				'fields' => array(
					'before_img_text' => array(
						'type'=>'text',
						'label'       => __( 'Before Label Text', 'fl-builder' ),
						'placeholder' => __( 'Before image text', 'fl-builder' ),
						'help'          => __( 'Text displayed in the help tooltip', 'fl-builder' ),
						'connections' => array( 'string', 'html' ),
						'preview' => array(
							

						),
					),
					'after_img_text' => array(
						'type'=>'text',
						'label'       => __( 'After Label Text', 'fl-builder' ),
						'placeholder' => __( 'After image text', 'fl-builder' ),
						'help'          => __( 'Text displayed in the help tooltip', 'fl-builder' ),
					),
				),
			),

		),

	),
	'typo' => array(
		'title' => __('Typo tab', 'fl-builder' ),
		'sections' => array(
			'typo_options'=> array(
				'title' => __('Label Typography', 'fl-builder'),
				'fields'=> array(
					'label_typo'=> array(
						'type'=> 'typography',
						'label'=> __('Typography', 'fl-builder' ),
						'responsive' => true,
					),
					'label_typo_color'=> array(
						'type'=> 'color',
						'label'=> __('Text Color', 'fl-builder' ),
						'responsive' => true,
						'show_reset'  => true,
						'show_alpha'  => false,
					),
					'label_typo_color'=> array(
						'type'=> 'align',
						'label'=> __('Text Color', 'fl-builder' ),
						'default'   => 'center',
					),
				),
			),
		),
	),

)
);