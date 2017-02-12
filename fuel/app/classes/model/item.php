<?php
class Model_Item extends Model_Crud
{
	protected static $_table_name = 'items';
	
	public static function validate($factory)
	{
		$val = Validation::forge($factory);
		$val->add_field('id', 'Id', 'required|valid_string[numeric]');
		$val->add_field('nombre_items', 'Nombre Items', 'required|max_length[255]');
		$val->add_field('tinta_items', 'Tinta Items', 'required|valid_string[numeric]');
		$val->add_field('tinta_gold_items', 'Tinta Gold Items', 'required|valid_string[numeric]');
		$val->add_field('url_foto_items', 'Url Foto Items', 'required|max_length[255]');
		$val->add_field('tipo_items', 'Tipo Items', 'required|max_length[255]');
		$val->add_field('id_arma', 'Id Arma', 'required|valid_string[numeric]');
		$val->add_field('id_skin', 'Id Skin', 'required|valid_string[numeric]');
		$val->add_field('id_escudo', 'Id Escudo', 'required|valid_string[numeric]');

		return $val;
	}

}
