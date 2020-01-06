<?php

if ( ! empty( $settings->color ) ) {
	FlBuilderCSS::rule( array(
		'selector'=> ".fl-node-$id .fl-textbox, .fl-node-$id .fl-textbox *, fl-node-$id  .fl-separator",
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


?>
.fl-node-<?php echo $id; ?> .fl-separator{
	border: 2px solid black;
}