<?php

?>
<div class="fl-textbox">
	<div class="fl-bg-container bg-border">
		<div class="my-icon-wrap">
			<span class="temp">
				<i class="<?php echo $settings->icon_type; ?>"></i>		
			</span>
		</div>
			<<?php echo $settings->text_tag; ?> div class="fl-heading-container">
			<a href= "<?php echo $settings->text_link; ?>" >
				<span class="fl-textbox-heading"> <?php echo $settings->heading; ?></span>
			</a>
			</<?php echo $settings->text_tag; ?>>
			<div class="fl-my-separator-parent">
				<div class="fl-my-separator"></div>		
			</div>
		<div class="fl-description"><?php echo $settings->text_editor; ?></div>
		<div class="dimension-bar fl-dimension"></div>

	</div>
</div>

	<?php

// var_dump($settings);
	?>
	<div>
		<?php echo $settings->icon; ?>

		<?php echo $settings->photo; ?>

	</div>