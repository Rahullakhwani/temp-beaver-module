<?php

?>
<div class="fl-textbox">

	<<?php echo $settings->text_tag; ?> div class="fl-heading-container">
		<a href= "<?php echo $settings->text_link; ?>" >
		<span class="fl-textbox-heading"> <?php echo $settings->heading; ?></span>
		</a>
	</<?php echo $settings->text_tag; ?>>


<div class="fl-textbox"> <?php echo $settings->text_editor; ?> </div>
</div>
<div class="fl-separator"> </div>

<?php

// var_dump($settings);
?>
<div>
	<div><?php echo $settings->separator_position; ?></div>
	
	<?php echo $settings->icon; ?>
	<?php echo $settings->icon_size; ?>
	<?php echo $settings->photo; ?>

</div>