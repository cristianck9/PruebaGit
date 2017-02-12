<h2>Listing Items</h2>
<br>
<?php if ($Items): ?>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nombre items</th>
			<th>Tinta items</th>
			<th>Tinta gold items</th>
			<th>Url foto items</th>
			<th>Tipo items</th>
			<th>Id arma</th>
			<th>Id skin</th>
			<th>Id escudo</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($Items as $item): ?>		<tr>

			<td><?php echo $item->id; ?></td>
			<td><?php echo $item->nombre_items; ?></td>
			<td><?php echo $item->tinta_items; ?></td>
			<td><?php echo $item->tinta_gold_items; ?></td>
			<td><?php echo $item->url_foto_items; ?></td>
			<td><?php echo $item->tipo_items; ?></td>
			<td><?php echo $item->id_arma; ?></td>
			<td><?php echo $item->id_skin; ?></td>
			<td><?php echo $item->id_escudo; ?></td>
			<td>
				<?php echo Html::anchor('items/view/'.$item->id, 'View'); ?> |
				<?php echo Html::anchor('items/edit/'.$item->id, 'Edit'); ?> |
				<?php echo Html::anchor('items/delete/'.$item->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Items.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('items/create', 'Add new Item', array('class' => 'btn btn-success')); ?>

</p>
