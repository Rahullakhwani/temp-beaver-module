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


		parent::__construct(array(
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
				'title' => __( 'Image style', 'fl-builder' ),
				'fields' => array(
					'slider_bg_overlay'      => array(
						'type'        => 'color',
						'label'       => __( 'Slider Overlay Color', 'fl-builder' ),
						'show_reset'  => true,
						'show_alpha'  => true,
					),
				),
			)
		)

	),

));