<?php

if ( ! empty( $settings->color ) ) {
	FlBuilderCSS::rule( array(
		'selector'=> ".fl-node-$id .fl-textbox, .fl-node-$id .fl-textbox *",
		'props'    => array(
			'color' => $settings->color,
		),
	));
}

FlBuilderCSS::typography_field_rule(array(
		'settings'     => $settings,
		'settings_name' => 'typography',
		'selector' => ".fl-node-$id .fl-textbox, .fl-node-$id .fl-textbox *",


));


