<?php

namespace Fuel\Migrations;

class Create_items
{
	public function up()
	{
		\DBUtil::create_table('items', array(
			'id' => array('constraint' => 11, 'type' => 'int'),
			'nombre_items' => array('constraint' => 255, 'type' => 'varchar'),
			'tinta_items' => array('constraint' => 11, 'type' => 'int'),
			'tinta_gold_items' => array('constraint' => 11, 'type' => 'int'),
			'url_foto_items' => array('constraint' => 255, 'type' => 'varchar'),
			'tipo_items' => array('constraint' => 255, 'type' => 'varchar'),
			'id_arma' => array('constraint' => 11, 'type' => 'int'),
			'id_skin' => array('constraint' => 11, 'type' => 'int'),
			'id_escudo' => array('constraint' => 11, 'type' => 'int'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('items');
	}
}