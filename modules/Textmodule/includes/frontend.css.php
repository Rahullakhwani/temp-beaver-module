<?php


if ( ! empty( $settings->color ) ) {
	FlBuilderCSS::rule( array(
		'selector'=> ".fl-node-$id .fl-description",
		'props'    => array(
			'color' => $settings->color,
		),
	));
}
if(! empty($settings->padding)){
	FlBuilderCSS::rule( array(
		'selector'=> ".fl-node-$id .fl-textbox, .fl-node-$id .fl-textbox *, fl-node-$id .fl-dimension",
		$settings->padding_top,
		$settings->padding_bottom,
		$settings->padding_left,
		$settings->padding_right,
	));	
}

FLBuilderCSS::typography_field_rule( array(
	'settings'     => $settings,
	'setting_name' => 'typography',
	'selector'     => ".fl-node-$id .fl-textbox .fl-description",
) );

FLBuilderCSS::border_field_rule( array(
	'settings' 	=> $settings,
	'setting_name' 	=> 'my_border',
	'selector' 	=> ".fl-node-$id .bg-border",
) );

?>

	/* Heading Css */

.fl-node-<?php echo $id; ?> .fl-heading-container {
	text-align: <?php echo $settings->heading_align; ?>;
}

	/* Icon Css */ 
.fl-node-<?php echo $id; ?> .icon-wrap i {
	font-size: <?php echo $settings->icon_size; ?>px;
}

.fl-node-<?php echo $id; ?> .icon {
	text-align: <?php echo $settings->icon_align; ?>;
}

.fl-node-<?php echo $id; ?> .icon-wrap i,
.fl-node-<?php echo $id; ?> .icon-wrap i:before {

	<?php
		if ( ! empty( $settings->icon_color ) ) {
			/* Icon Color */
			echo 'color: ' . $settings->icon_color;
		}
	?>
	height: 60px;
	width: 60px;

	<?php 
		if ( 'simple' != $settings->icon_style ) { 
		// Rounded Styles. 
		echo 'background: ' .'#'. $settings->icon_bg_color; 
		}
	?>;

	<?php
		if ( 'circle' == $settings->icon_style ) {
	?>

		background: <?php echo '#'.$settings->icon_bg_color; ?>;
		border-radius: 100px;
	<?php 
	
		}
	?>
}
/* Icon Css End */

/* Background Property */

.fl-node-<?php echo $id; ?> .fl-bg-container {
	background: <?php echo '#'.$settings->bg_color; ?>;
}
