<?php echo $wrapper_before; ?>
	<?php echo $field_label; ?>
	<?php echo $field_before; ?>
		<?php
			wp_editor( $field_value, $field_id, array( 
				'media_buttons' => false,
				'textarea_name' => $field_name
				)
			);
			wp_enqueue_script( 'cf-visual-editor-script', CF_THEEDITOR_URL . "handler.min.js", array('jquery'), null, true );
		?>
		<?php echo $field_caption; ?>
	<?php echo $field_after; ?>
<?php echo $wrapper_after; ?>
