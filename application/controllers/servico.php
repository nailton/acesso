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
				'title' => 'Registros de domínios',
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

    // $crud->unset_columns('senha');
		// $crud->unset_read_field('senha');

		//Cuidando da senha.
		$crud->field_type('senha', 'password', '');
		$crud->callback_before_insert(array($this,'encrypt_password_callback'));
		$crud->callback_before_update(array($this,'encrypt_password_callback'));
		$crud->callback_edit_field('senha',array($this,'decrypt_password_callback'));


		//não mostrar botão adicionar, editar e deletar.
		// $crud->unset_add();
		// $crud->unset_edit();
		// $crud->unset_delete();

		$output = $crud->render();

		return $output;
	}

	function encrypt_password_callback($post_array, $primary_key = null)
	{
		$this->load->library('encrypt');

		$key = 'super-secret-key';
		$post_array['senha'] = $this->encrypt->encode($post_array['senha'], $key);
		return $post_array;
	}

	function decrypt_password_callback($value)
	{
		$this->load->library('encrypt');

		$key = 'super-secret-key';
		$decrypted_password = $this->encrypt->decode($value, $key);
		return "<input type='password' name='senha' value='$decrypted_password' />";
	}

}



/* End of file servico.php */
/* Location: ./application/controllers/servico.php */
