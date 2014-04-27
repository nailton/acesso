<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

		$this->load->database();

		$this->load->library('grocery_CRUD');

	}

	// List all your items
	public function index( $offset = 0 )
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
				'title' => 'Clientes',
				'content' => $this->load->view( 'cliente/cliente',$view_data, TRUE ),
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

	$crud = new grocery_CRUD();

	$crud->set_table('cliente');
	$crud->columns('nome_fantasia','email','responsavel');
	$crud->display_as('nome_fantasia','Empresa')
			 ->display_as('telefone', 'Telefone')
			 ->display_as('email','E-mail')
			 ->display_as('responsavel', 'Responsável')
			 ->display_as('data_aniversario','Data de Aniversário')
			 ->display_as('site','Site')
			 ->display_as('descricao','Descrição');
	$crud->set_subject('Cliente');
	$crud->required_fields('nome_fantasia','email','telefone');

	//Gerar export completo
	// $crud->add_action('Export', '', '','',array($this,'export_all'));
	$output = $crud->render();

	return $output;
}

// function export_all()
// {
// 	$crud = new grocery_CRUD();
// 		 $crud->set_table('cliente');
// 	$output = $crud->render();

// 	// return $output;
// }
}

/* End of file cliente.php */
/* Location: ./application/controllers/cliente.php */
?>
