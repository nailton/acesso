<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Registration Settings View
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
	$reg_mode = array(
		'0' => 'Capacidade de novos registros desabilitados',
		'1' => 'Habilitado registro por verificação',
		'2' => 'Habilitado registro por verificação no email',
		'3' => 'Habilitado registro por verificação do administrador'
		);

	if( isset( $confirmation ) )
	{
		echo '<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Atualizado!</strong> O modo de registro foi atualizado. O modo agora é:
		<p style="margin:.6em 0 0 0;">
			<b>' . $reg_mode["$reg_setting"] . '</b>
		</p>
	</div>';
}
?>

<?php echo form_open( '', array( 'class' => 'std-form', 'style' => 'margin-top:24px;' ) ); ?>

<ul class="nav nav-tabs">
	<li  class="active">
		<a href="#formcontrols" data-toggle="tab">Tipos</a>
	</li>
</ul>

<br>


<div id="edit-profile" class="form-horizontal">

	<div class="control-group">
		<?php
		echo form_label('Desligado', 'setting-off', array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php
                // FIRST RADIO
			$radio_data = array(
				'name'    => 'reg_setting',
				'id'    => 'setting-off',
				'value'   => '0',
				'checked' => (isset($reg_setting) && $reg_setting == '0')? 'checked' : '',
				'class'   => 'radio inline'
				);
			echo form_radio($radio_data);
			?>

		</div> <!-- /controls -->
	</div> <!-- /control-group -->

	<div class="control-group">
		<?php
		echo form_label('Imediato', 'setting-instant', array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php
                // SECOND RADIO
			$radio_data = array(
				'name'    => 'reg_setting',
				'id'    => 'setting-instant',
				'value'   => '1',
				'checked' => (isset($reg_setting) && $reg_setting == '1')? 'checked' : '',
				'class'   => 'radio inline'
				);

			echo form_radio($radio_data);
			?>

		</div> <!-- /controls -->
	</div> <!-- /control-group -->

	<div class="control-group">
		<?php
		echo form_label('Verificação por email', 'setting-email', array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php
                // THIRD RADIO
			$radio_data = array(
				'name'    => 'reg_setting',
				'id'    => 'setting-email',
				'value'   => '2',
				'checked' => (isset($reg_setting) && $reg_setting == '2')? 'checked' : '',
				'class'   => 'radio inline'
				);

			echo form_radio($radio_data);
			?>

		</div> <!-- /controls -->
	</div> <!-- /control-group -->

	<div class="control-group">
		<?php
		echo form_label('Pelo administrador', 'setting-admin', array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php
                // THIRD RADIO
			$radio_data = array(
				'name'    => 'reg_setting',
				'id'    => 'setting-admin',
				'value'   => '3',
				'checked' => (isset($reg_setting) && $reg_setting == '3')? 'checked' : '',
				'class'   => 'radio inline'
				);

			echo form_radio($radio_data);
			?>

		</div> <!-- /controls -->
	</div> <!-- /control-group -->

	<div class="form-actions">
		<?php
          // SUBMIT BUTTON **************************************************************
		$input_data = array(
			'name'    => 'reg_submit',
			'id'    => 'submit_button',
			'class'   => 'btn btn-primary',
			'value'   => 'Salvar'
			);
		echo form_submit($input_data);
		?>

	</div> <!-- /form-actions -->
</form>

</div><!-- /form-horizontal -->


</div> <!-- /widget-content -->


<?php
/* End of file settings.php */
/* Location: .system/application/views/register/settings.php */
