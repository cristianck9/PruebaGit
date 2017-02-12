<h2>Viewing #<?php echo $Item->id; ?></h2>

<p>
	<strong>Id:</strong>
	<?php echo $Item->id; ?></p>
<p>
	<strong>Nombre items:</strong>
	<?php echo $Item->nombre_items; ?></p>
<p>
	<strong>Tinta items:</strong>
	<?php echo $Item->tinta_items; ?></p>
<p>
	<strong>Tinta gold items:</strong>
	<?php echo $Item->tinta_gold_items; ?></p>
<p>
	<strong>Url foto items:</strong>
	<?php echo $Item->url_foto_items; ?></p>
<p>
	<strong>Tipo items:</strong>
	<?php echo $Item->tipo_items; ?></p>
<p>
	<strong>Id arma:</strong>
	<?php echo $Item->id_arma; ?></p>
<p>
	<strong>Id skin:</strong>
	<?php echo $Item->id_skin; ?></p>
<p>
	<strong>Id escudo:</strong>
	<?php echo $Item->id_escudo; ?></p>

<?php echo Html::anchor('items/edit/'.$Item->id, 'Edit'); ?> |
<?php echo Html::anchor('items', 'Back'); ?>