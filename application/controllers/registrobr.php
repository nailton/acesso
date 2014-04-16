<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrobr extends MY_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->library('grocery_CRUD');
	}

	public function index()
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


			$view_data = $this->fornecedor();
			$data = array(
				'title' => 'Lista de fornecedor',
				'content' => $this->load->view( 'servicos/registrobr',$view_data, TRUE ),
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
	public function fornecedor()
	{
		$crud = new grocery_CRUD();

		$crud->set_table('novo_fornecedor');
		$crud->columns('nome_fantasia','nome_venda','telefone_venda',
			'email_venda','site_ramo_atividade');
		$crud->set_subject('Fornecedores');

		//não mostrar botão adicionar, editar e deletar.
		$crud->unset_add();
		$crud->unset_edit();
		$crud->unset_delete();

		$output = $crud->render();

		return $output;
	}

/* End of file registrobr.php */
/* Location: ./application/controllers/registrobr.php */
