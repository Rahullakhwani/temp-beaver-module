<?php

?>
<div class="fl-textbox">
		<div class="icon">
		<span class="icon-wrap">
			<i class="<?php echo $settings->icon_type; ?>">				
			</i>
		</span>
		</div>
	<<?php echo $settings->text_tag; ?> div class="fl-heading-container">
		<a href= "<?php echo $settings->text_link; ?>" >
		<span class="fl-textbox-heading"> <?php echo $settings->heading; ?></span>
		</a>
	</<?php echo $settings->text_tag; ?>>


<div class="fl-description"><?php echo $settings->text_editor; ?></div>
</div>
<div class="fl-separator"> </div>

<div class="dimension-bar fl-dimension">
</div>

<?php

// var_dump($settings);
?>
<div>
	<!-- <div><?php echo $settings->separator_position; ?></div> -->
	
	<?php echo $settings->icon; ?>
	
	<?php echo $settings->photo; ?>

</div>