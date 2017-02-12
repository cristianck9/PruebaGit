<?php echo Form::open(array("class"=>"form-horizontal")); ?>

	<fieldset>
		<div class="form-group">
			<?php echo Form::label('Id', 'id', array('class'=>'control-label')); ?>

				<?php echo Form::input('id', Input::post('id', isset($Item) ? $Item->id : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Nombre items', 'nombre_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('nombre_items', Input::post('nombre_items', isset($Item) ? $Item->nombre_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Nombre items')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tinta items', 'tinta_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('tinta_items', Input::post('tinta_items', isset($Item) ? $Item->tinta_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tinta items')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tinta gold items', 'tinta_gold_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('tinta_gold_items', Input::post('tinta_gold_items', isset($Item) ? $Item->tinta_gold_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tinta gold items')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Url foto items', 'url_foto_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('url_foto_items', Input::post('url_foto_items', isset($Item) ? $Item->url_foto_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Url foto items')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Tipo items', 'tipo_items', array('class'=>'control-label')); ?>

				<?php echo Form::input('tipo_items', Input::post('tipo_items', isset($Item) ? $Item->tipo_items : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Tipo items')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Id arma', 'id_arma', array('class'=>'control-label')); ?>

				<?php echo Form::input('id_arma', Input::post('id_arma', isset($Item) ? $Item->id_arma : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id arma')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Id skin', 'id_skin', array('class'=>'control-label')); ?>

				<?php echo Form::input('id_skin', Input::post('id_skin', isset($Item) ? $Item->id_skin : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id skin')); ?>

		</div>
		<div class="form-group">
			<?php echo Form::label('Id escudo', 'id_escudo', array('class'=>'control-label')); ?>

				<?php echo Form::input('id_escudo', Input::post('id_escudo', isset($Item) ? $Item->id_escudo : ''), array('class' => 'col-md-4 form-control', 'placeholder'=>'Id escudo')); ?>

		</div>
		<div class="form-group">
			<label class='control-label'>&nbsp;</label>
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn btn-primary')); ?>		</div>
	</fieldset>
<?php echo Form::close(); ?>