<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Admin's Self Update View
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
<div class="control-group">                     
	<?php 
                                  // FIRST NAME LABEL AND INPUT ***********************************
	echo form_label('Primeiro nome','first_name',array('class'=>'control-label'));
	?>
	<div class="controls">
		<?php

		// echo input_requirement();

		$input_data = array(
			'name'    => 'first_name',
			'id'    => 'firstname',
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
    // echo input_requirement('*');

		$input_data = array(
			'name'    => 'last_name',
			'id'    => 'lastname',
			'class'   => 'span4',
			'value'   => set_value('last_name', $user_data->last_name),
			'maxlength' => '20',
			);

		echo form_input($input_data);

		?>                  	
	</div> <!-- /controls -->       
</div> <!-- /control-group -->



<div class="control-group">                     
<?php         // EMAIL ADDRESS *************************************************
echo form_label('E-mail','user_email',array('class'=>'control-label'));
?>
<div class="controls">
	<?php
    // echo input_requirement('*');

	$input_data = array(
		'name'    => 'user_email',
		'id'    => 'useremail',
		'class'   => 'span4',
		'maxlength' => 255,
		'value'   => set_value('user_email', $user_data->user_email )
		);

	echo form_input($input_data);
	?>
</div> <!-- /controls -->       
</div> <!-- /control-group -->

<br /><br />



<div class="control-group">  
	<!-- <h6 class="bigstats">Deixe em branco para manter a senha atual:</h6>                    -->
	<?php  
       // PASSWORD LABEL AND INPUT ********************************
	echo form_label('Alterar senha','user_pass',array('class'=>'control-label'));
	?>
	<div class="controls">
		<?php
     // echo input_requirement();

		$input_data = array(
			'name'       => 'user_pass',
			'id'         => 'user_pass',
			'class'      => 'form_input password',
			'placeholder'=>'Senha',
			'max_length' => MAX_CHARS_4_PASSWORD
			);

		echo form_password($input_data);
		?>
		<p class="help-block">Deixe em branco para manter a senha atual</p>
	</div> <!-- /controls -->       
</div> <!-- /control-group -->

<div class="control-group">                     
	<?php 
        // CONFIRM PASSWORD LABEL AND INPUT ******************************
	echo form_label('Confirme a nova senha','user_pass_confirm',array('class'=>'control-label'));
	?>
	<div class="controls">
		<?php
     // echo input_requirement();

		$input_data = array(
			'name'       => 'user_pass_confirm',
			'id'         => 'user_pass_confirm',
			'class'      => 'form_input password',
			'placeholder'      => 'Confirme a senha',
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
        // echo input_requirement();

		$checkbox_data = array(
			'id' => 'show-password'
			);

		echo form_checkbox( $checkbox_data );
		?>

	</div> <!-- /controls -->       
</div> <!-- /control-group -->

<div class="control-group">                     
	<label class="control-label" for="lastname">Imagem do perfil</label>
	<div class="controls">
		<?php
        // PROFILE IMAGE
		echo img(
			( ! empty( $user_data->profile_image ) ) ? $user_data->profile_image : 'img/default-profile-image.jpg',
			FALSE,
			( $upload_destination == 'database' && ! empty( $user_data->profile_image ) ) ? TRUE : FALSE
			);

        // DELETE PROFILE IMAGE LINK
		$attrs['id'] = 'delete-profile-image';

        // If there is no profile image uploaded, hide the delete link
		if( empty( $user_data->profile_image ) )
		{
			$attrs['style'] = 'display:none;';
		}

		echo '<br />' . secure_anchor('user/delete_profile_image','Delete Profile Image', $attrs);

        // Get upload config array for display to user
		$upload_config = config_item('upload_configuration_profile_image');
		?>
		<br>
		<?php
            // PROFILE IMAGE UPLOAD BUTTON
		$button_data = array(
			'id'   => 'file-input',
			'name' => 'userfile'
			);

		echo form_upload( $button_data );
		?>
		<div class="uploader-activity-container" style="display:none">
			<img id="uploader-activity" src="img/network_activity.gif" style="display:none"/>
		</div>
	</div> <!-- /controls -->       
</div> <!-- /control-group -->

<div class="control-group">                     
	<label class="control-label" for="lastname">Requisitos de upload</label>
	<div class="controls">
		<table class="simple_table">
			<!-- <caption style="text-align: left;">Requisitos de upload:</caption> -->
			<tbody>
				<tr>
					<td>Máxima tamanho da imagem</td>
					<td class="align-right"><?php echo $upload_config['max_size']; ?> kb</td>
				</tr>
				<tr>
					<td>Largura máxima da Imagem</td>
					<td class="align-right"><?php echo $upload_config['max_width']; ?> px</td>
				</tr>
				<tr>
					<td>Altura máxima da Imagem</td>
					<td class="align-right"><?php echo $upload_config['max_height']; ?>px</td>
				</tr>
				<tr>
					<td>Tipos de arquivo permitidos</td>
					<td class="align-right"><?php echo str_replace('|',' &bull; ', $upload_config['allowed_types'] ); ?></td>
				</tr>
			</tbody>
		</table>

	</div> <!-- /controls -->       
</div> <!-- /control-group -->

<input type="hidden" id="user_id" name="user_id" value="<?php echo $user_data->user_id; ?>" />
<input type="hidden" id="allowed_types" value="<?php echo $upload_config['allowed_types']; ?>" />
<input type="hidden" id="ci_csrf_token_name" value="<?php echo config_item('csrf_token_name'); ?>" />
<input type="hidden" id="upload_url" value="<?php echo secure_site_url('uploads_manager/bridge_' . $upload_destination . '/profile_image'); ?>" />
<input type="hidden" id="delete_url" value="<?php echo secure_site_url('user/delete_profile_image'); ?>" />

<div class="form-actions">
	<?php
        // SUBMIT BUTTON ***********************
	$input_data = array(
		'name'    => 'submit',
		'id'    => 'submit_button',
		'value'   => 'Atualizar',
		'class'   => 'btn btn-primary'
		);

	echo form_submit($input_data);
	?>

</div> <!-- /form-actions -->
<?php
/* End of file self_update_admin.php */
/* Location: /application/views/user/self_update/self_update_admin.php */