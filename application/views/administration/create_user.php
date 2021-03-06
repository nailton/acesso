<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Create User View
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.1.3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
?>
<div class="widget-content">

	<?php
	// echo '<h1>' . ( isset( $type ) ? ucfirst( $type ) . ' Criação' : 'Criação do usuário' ) . '</h1>';

	// $type = ($type == 'customer') ? 'Cliente' : 'Gerente';
	if( isset( $validation_passed, $user_created ) )
	{
		echo '
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			O novo <strong>usuário</strong> foi criado com sucesso.
		</div>';
	}
	else if( isset( $validation_errors ) )
	{
		echo '
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Erros durante a criação:</strong>
			<ul>
				' . $validation_errors . '
			</ul>
			<p>Não foi possível criar o usuário.</p>
		</div>';
	}

	if( isset( $level, $type ) )
	{
		echo $user_creation_form;
	}
	else
	{
		echo '
		<p>Por favor, escolha um tipo de usuário para criar:</p>
		<ul class="std-list">
			';

			foreach( $roles as $k => $v )
			{
				if( $k < $auth_level )
				{
					$v1=array(1=>'Cliente', 6=>'Gerente', 9=>'Admin');
					echo '<li>' . secure_anchor( 'administration/create_user/' . $v, $v1[$k] ) . '</li>';
				}
			}

			echo '</ul>';
		}
		?>
	</div> <!-- /widget-content -->


	<?php
	/* End of file create_user.php */
	/* Location: /application/views/administration/create_user.php */
