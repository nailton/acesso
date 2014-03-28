<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Deny Access View
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

	if( config_item('deny_access') > 0 )
	{
		if( isset( $confirm_add_denial ) )
		{
			echo '
			<div class="feedback confirmation">
				<p class="feedback_header">
					O endereço IP foi adicionado à lista de negações.
				</p>
			</div>
			';
		}
		else if( isset( $confirm_removal ) )
		{
			echo '
			<div class="feedback confirmation">
				<p class="feedback_header">
					O endereço de IP especificada (s) foram removidos da lista de negação.
				</p>
			</div>
			';
		}
		else if( isset( $validation_errors ) )
		{
			echo '
			<div class="feedback error_message">
				<p class="feedback_header">
					Sua tentativa de atualizar a lista de negar continha os seguintes erros:
				</p>
				<ul>
					' . $validation_errors . '
				</ul>
				<p>
					NENHUMA MUDANÇA DE NEGAR LISTA
				</p>
			</div>
			';
		}
		echo form_open( '', array( 'class' => 'std-form', 'style' => 'margin-top:24px;' ) ); ?>

		<ul class="nav nav-tabs">
			<li  class="active">
				<a href="#formcontrols" data-toggle="tab">Adicionar Negação</a>
			</li>
		</ul>

		<br>


		<div id="edit-profile" class="form-horizontal">

			<div class="control-group">
				<?php
        			 // IP ADDRESS ***********************************
				echo form_label('Endereço IP','ip_address',array('class'=>'control-label'));

				?>
				<div class="controls">
					<?php

					$input_data = array(
						'name'    => 'ip_address',
						'id'    => 'ip_address',
						'class'   => 'span4',
						'value'   => set_value('ip_address'),
						'maxlength' => '39'
						);

					echo form_input( $input_data );

					?>

				</div> <!-- /controls -->
			</div> <!-- /control-group -->

			<div class="control-group">
				<?php
          // DENIAL REASON SELECTION ***************************************
				echo form_label('Motivo da negação','reason_code',array('class'=>'control-label'));

				?>
				<div class="controls">
					<?php

					foreach( config_item('denied_access_reason') as $num => $text)
					{
						$options[$num] = $text;
					}

					echo form_dropdown('reason_code', $options, set_value('reason_code', '0'), 'id="reason_code" class="form_select"');


					?>

				</div> <!-- /controls -->
			</div> <!-- /control-group -->


			<div class="form-actions">
				<?php
          // SUBMIT BUTTON **************************************************************
				$input_data = array(
					'name'    => 'add_denial',
					'id'    => 'submit_button',
					'value'   => 'Negar acesso',
					'class'   => 'btn btn-primary'
					);
				echo form_submit($input_data);
				?>

			</div> <!-- /form-actions -->
		</form>

  <div id="table-wrapper">
    <h2>Negar lista</h2>
    <div id="table-wrapper">
      <table id="myTable" class="tablesorter table table-striped">
        <thead>
          <tr>
            <th></th>
            <th>Endereço IP</th>
            <th>Motivo da negação</th>
            <th>Data da negação</th>
          </tr>
        </thead>
        <tbody>

  <?php

  if( ! empty( $deny_list ) )
  {
    $denial_reasons = config_item('denied_access_reason');

    foreach( $deny_list as $row )
    {
      echo '
        <tr>
          <td>
            <input type="checkbox" name="ip_removals[]" value="' . $row->IP_address . '" />
          </td>
          <td>
            ' . $row->IP_address . '
          </td>
          <td>'
            . $denial_reasons[ $row->reason_code ] .
          '</td>
          <td>'
            . date( "M j, Y", $row->time ) .
          '</td>
        </tr>
      ';
    }
  }

  ?>

          </tbody>
        </table>
      </div>
      <div id="decision_buttons">
        <input type="submit" class="form_button btn" name="remove_selected" value="Remover selecionado"  style="margin-top:10px;"/>
      </div>
    </div>
  </form>

<?php

}
else
{
  echo '
    <p>
      Deny Access functionality has been disabled in the authentication configuration. If you wish to enable this functionality, please update <br /><b>/application/config/authentication.php</b>.
    </p>
  ';
}
?>
	</div><!-- /form-horizontal -->


</div> <!-- /widget-content -->
<?php
/* End of file deny_access.php */
/* Location: /application/views/administration/deny_access.php */
