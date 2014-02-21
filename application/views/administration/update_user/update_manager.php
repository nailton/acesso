<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Update Manager View
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



	<div class="tabbable">
		<ul class="nav nav-tabs">
			<li  class="active">
				<a href="#formcontrols" data-toggle="tab">Perfil Gerente</a>
			</li>
			<li ><a href="#jscontrols" data-toggle="tab">Atividades</a></li>
		</ul>

		<br>

		<div class="tab-content">
			<div class="tab-pane active" id="formcontrols">
				<div id="edit-profile" class="form-horizontal">
					<fieldset>

						<?php

						if( isset( $validation_errors ) )
						{
							echo '
							<div class="alert">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								<strong>Atualização,</strong> do perfil contém os seguintes erros:
								<ul>
									' . $validation_errors . '
								</ul>
								<p>
									Perfil não atualizado
								</p>
							</div>';
						}
						else if( isset( $validation_passed ) )
						{
							echo '
							<div class="alert alert-success">
								<button type="button" class="close" data-dismiss="alert">&times;</button>
								Perfil atualizado com sucesso.
							</div>';
						}
						?>
						<div class="control-group">

							<div class="controls">
								<?php
// PROFILE IMAGE
								$upload_destination = config_item('profile_image_destination');

								echo img(
									( ! empty( $user_data->profile_image ) ) ? $user_data->profile_image : 'img/default-profile-image.jpg',
									FALSE,
									( $upload_destination == 'database' && ! empty( $user_data->profile_image ) ) ? TRUE : FALSE
									);
									?>

								</div> <!-- /controls -->
							</div> <!-- /control-group -->

							<?php echo form_open( 'administration/update_user/' . $user_data->user_id, array( 'class' => 'std-form' ) ); ?>

							<div class="control-group">
								<?php
// FIRST NAME LABEL AND INPUT ***********************************
								echo form_label('Primeiro nome','first_name',array('class'=>'control-label'));

								?>
								<div class="controls">
									<?php

									$input_data = array(
										'name'    => 'first_name',
										'id'    => 'first_name',
										'class'   => 'span4',
										'value'   => set_value('first_name', $user_data->first_name),
										'maxlength' => '20',
										);
									echo form_input($input_data);

									?>

								</div> <!-- /controls -->
							</div> <!-- /control-group -->

							<div class="control-group">
								<?php
// LAST NAME LABEL AND INPUT ***********************************
								echo form_label('Sobrenome','last_name',array('class'=>'control-label'));

								?>
								<div class="controls">
									<?php

									$input_data = array(
										'name'    => 'last_name',
										'id'    => 'last_name',
										'class'   => 'span4',
										'value'   => set_value('last_name', $user_data->last_name),
										'maxlength' => '20',
										);
									echo form_input($input_data);

									?>

								</div> <!-- /controls -->
							</div> <!-- /control-group -->

							<div class="control-group">
								<?php
// EMAIL ADDRESS LABEL AND INPUT **********************************************
								echo form_label('Email','user_email',array('class'=>'control-label'));
								?>
								<div class="controls">
									<?php

									$input_data = array(
										'name'    => 'user_email',
										'id'    => 'user_email',
										'class'   => 'span4',
										'value'   => set_value('user_email', $user_data->user_email),
										'maxlength' => '255',
										);
									echo form_input($input_data);

									?>

								</div> <!-- /controls -->
							</div> <!-- /control-group -->

							<div class="control-group">
								<?php
          // PHONE NUMBER LABEL AND INPUT **********************************************
								echo form_label('Telefone','phone_number',array('class'=>'control-label'));

								?>
								<div class="controls">
									<?php

									$input_data = array(
										'name'    => 'phone_number',
										'id'    => 'phone_number',
										'class'   => 'form_input max_chars',
										'value'   => set_value('phone_number', $user_data->phone_number),
										'maxlength' => '20',
										);
									echo form_input($input_data);

									?>

								</div> <!-- /controls -->
							</div> <!-- /control-group -->

							<div class="control-group">
								<label class="control-label">Banido</label>

								<div class="controls">
									<?php

// BANNED LABELS AND BUTTONS **************************
/*
* GET VALUE OF RADIOS GROUP AND APPLY CHECKED = CHECKED
*/
$radio_selection = set_value('user_banned', $user_data->user_banned );

$radio_checked = array(
	'0' => '',
	'1' => ''
	);

$radio_checked[$radio_selection] = 'checked';
?>
<label class="radio inline">
	<?php
// FIRST RADIO
	$radio_data = array(
		'name'    => 'user_banned',
		'id'    => 'no-banned',
		'value'   => '0',
		'checked' => $radio_checked['0'],
		'class'   => 'form_radio'
		);

	echo form_radio($radio_data);
	?>
	<?php
	echo form_label('Não', 'no-banned', array('class'=>'radio_label'));
	?>
</label>
<label class="radio inline">
	<?php
// SECOND RADIO
	$radio_data = array(
		'name'    => 'user_banned',
		'id'    => 'yes-banned',
		'value'   => '1',
		'checked' => $radio_checked['1'],
		'class'   => 'form_radio'
		);

	echo form_radio($radio_data);
	?>
	<?php
	echo form_label('Sim', 'yes-banned', array('class'=>'radio_label'));
	?>
</label>

</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
	<!-- <label class="control-label">Deixe em branco para manter a senha atual</label>              -->
	<?php
// NEW PASSWORD LABEL AND INPUT ***********************************************
	echo form_label('Alterar senha','user_pass',array('class'=>'control-label'));

	?>
	<div class="controls">
		<?php

		$input_data = array(
			'name'       => 'user_pass',
			'id'         => 'user_pass',
			'class'      => 'span4',
			'max_length' => MAX_CHARS_4_PASSWORD
			);

		echo form_password($input_data);
		?>
		<p class="help-block">Deixe em branco para manter a senha atual</p>
	</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
	<?php
// CONFIRM PASSWORD LABEL AND INPUT *******************************************
	echo form_label('Confirme a nova senha','user_pass_confirm',array('class'=>'control-label'));

	?>
	<div class="controls">
		<?php

		$input_data = array(
			'name'       => 'user_pass_confirm',
			'id'         => 'user_pass_confirm',
			'class'      => 'span4',
			'max_length' => MAX_CHARS_4_PASSWORD
			);

		echo form_password($input_data);
		?>
	</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="control-group">
	<?php
// SHOW PASSWORD CHECKBOX
	echo form_label('Mostrar senha','show-password',array('class'=>'control-label'));

	?>
	<div class="controls">
		<?php

		$checkbox_data = array(
			'id' => 'show-password'
			);

		echo form_checkbox( $checkbox_data );
		?>
	</div> <!-- /controls -->
</div> <!-- /control-group -->

<div class="form-actions">
	<?php
// SUBMIT BUTTON **************************************************************
	$input_data = array(
		'name'    => 'form_submit',
		'id'    => 'submit_button',
		'value'   => 'Atualizar usuário',
		'class'   => 'btn btn-primary'
		);
	echo form_submit($input_data);
	?>
</div> <!-- /form-actions -->



</fieldset>
</div>
</div>

<div class="tab-pane" id="jscontrols">
	<form id="edit-profile2" class="form-vertical">
		<fieldset>
			<div id="user_info">
				<label for="firstname">Usuário: <?php echo $user_data->user_name; ?></label>
				<ul style="list-style: none;">
					<li><i class="icon-calendar"></i>
						Data de registro: <?php echo  date('F j, Y, g:i a',$user_data->user_date); ?>
					</li>
					<li><i class="icon-refresh"></i>
						Última modificação: <?php echo  date('F j, Y, g:i a',$user_data->user_modified); ?>
					</li>
					<li><i class="icon-time"></i>
						Último login: <?php echo ($user_data->user_last_login != FALSE)? date('F j, Y, g:i a',$user_data->user_last_login) : '<span class="redfield">Nunca logado</span>'; ?>
					</li>
				</ul>

			</form>
		</fieldset>
	</form>
</div>

</div>

</div>

</div> <!-- /widget-content -->

<?php

/* End of file update_manager.php */
/* Location: /application/views/update_manager.php */
