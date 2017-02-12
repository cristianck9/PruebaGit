<h2>Editing Item</h2>
<br>

<?php echo render('items/_form'); ?>
<p>
	<?php echo Html::anchor('items/view/'.$Item->id, 'View'); ?> |
	<?php echo Html::anchor('items', 'Back'); ?></p>
