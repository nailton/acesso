<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Servico extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('grocery_CRUD');
	}

	public function registro()
	{

if( $this->input->get('logout') && config_item('show_login_form_on_logout') == FALSE )
		{
			$data = array(
				'title' => WEBSITE_NAME . ' User Logout Confirmation',
				'content' => $this->load->view( 'auth/logout_confirmation', '', TRUE )
				);

			$this->load->view( $this->template, $data );
		}

		// Check if a user of any level is logged in
		else if( $this->require_min_level(1) )
		{


			$view_data = $this->registro_crud();
			$data = array(
				'title' => 'Registros',
				'content' => $this->load->view( 'servico/registro',$view_data, TRUE ),
				'javascripts' => array(),
				'style_sheets' => array(
					'css/pages/dashboard.css' => 'screen',
					),
				);
			$this->load->view( $this->template, $data );


		}

}

	/**
	 * Lista dos registros
	 */
	public function registro_crud()
	{
		// die("ola");
		$crud = new grocery_CRUD();

		$crud->set_table('registro');
		$crud->columns('dominio','titular','documento',
			'c_titular','c_admin');
		$crud->set_subject('registro');

		//não mostrar botão adicionar, editar e deletar.
		// $crud->unset_add();
		// $crud->unset_edit();
		// $crud->unset_delete();

		$output = $crud->render();

		return $output;
	}

}
/* End of file servico.php */
/* Location: ./application/controllers/servico.php */
