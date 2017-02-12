<?php
class Controller_Items extends Controller_Template
{

	public function action_index()
	{
		$data['Items'] = Model_Item::find_all();
		$this->template->title = "Items";
		$this->template->content = View::forge('items/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('items');

		$data['Item'] = Model_Item::find_by_pk($id);

		$this->template->title = "Item";
		$this->template->content = View::forge('items/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Item::validate('create');

			if ($val->run())
			{
				$Item = Model_Item::forge(array(
					'id' => Input::post('id'),
					'nombre_items' => Input::post('nombre_items'),
					'tinta_items' => Input::post('tinta_items'),
					'tinta_gold_items' => Input::post('tinta_gold_items'),
					'url_foto_items' => Input::post('url_foto_items'),
					'tipo_items' => Input::post('tipo_items'),
					'id_arma' => Input::post('id_arma'),
					'id_skin' => Input::post('id_skin'),
					'id_escudo' => Input::post('id_escudo'),
				));

				if ($Item and $Item->save())
				{
					Session::set_flash('success', 'Added Item #'.$Item->id.'.');
					Response::redirect('items');
				}
				else
				{
					Session::set_flash('error', 'Could not save Item.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Items";
		$this->template->content = View::forge('items/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('items');

		$Item = Model_Item::find_one_by_id($id);

		if (Input::method() == 'POST')
		{
			$val = Model_Item::validate('edit');

			if ($val->run())
			{
				$Item->id = Input::post('id');
				$Item->nombre_items = Input::post('nombre_items');
				$Item->tinta_items = Input::post('tinta_items');
				$Item->tinta_gold_items = Input::post('tinta_gold_items');
				$Item->url_foto_items = Input::post('url_foto_items');
				$Item->tipo_items = Input::post('tipo_items');
				$Item->id_arma = Input::post('id_arma');
				$Item->id_skin = Input::post('id_skin');
				$Item->id_escudo = Input::post('id_escudo');

				if ($Item->save())
				{
					Session::set_flash('success', 'Updated Item #'.$id);
					Response::redirect('items');
				}
				else
				{
					Session::set_flash('error', 'Nothing updated.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->set_global('Item', $Item, false);
		$this->template->title = "Items";
		$this->template->content = View::forge('items/edit');

	}

	public function action_delete($id = null)
	{
		if ($Item = Model_Item::find_one_by_id($id))
		{
			$Item->delete();

			Session::set_flash('success', 'Deleted Item #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete Item #'.$id);
		}

		Response::redirect('items');

	}

}
