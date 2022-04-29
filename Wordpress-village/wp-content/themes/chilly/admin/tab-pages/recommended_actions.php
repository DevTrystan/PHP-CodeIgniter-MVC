<?php 
	$actions = $this->recommended_actions;
	$actions_todo = get_option( 'recommended_actions', false );
?>
<div id="recommended_actions" class="chilly-tab-pane panel-close">
<div class="action-list">
	<?php if($actions): foreach ($actions as $key => $chilly_val): ?>
	<div class="col-md-6">
	<div class="action" id="<?php echo esc_attr($chilly_val['id']); ?>">
		<div class="action-watch">
		<?php if(!$chilly_val['is_done']): ?>
			<?php if(!isset($actions_todo[$chilly_val['id']]) || !$actions_todo[$chilly_val['id']]): ?>
				<span class="dashicons dashicons-visibility"></span>
			<?php else: ?>
				<span class="dashicons dashicons-hidden"></span>
			<?php endif; ?>
		<?php else: ?>
			<span class="dashicons dashicons-yes"></span>
		<?php endif; ?>
		</div>
		<div class="action-inner">
			<h3 class="action-title"><?php echo esc_html($chilly_val['title']); ?></h3>
			<div class="action-desc"><?php echo esc_html($chilly_val['desc']); ?></div>
			<?php echo wp_kses_post($chilly_val['link']); ?>
		</div>
	</div>
	</div>
	<?php endforeach; endif; ?>
</div>
</div>