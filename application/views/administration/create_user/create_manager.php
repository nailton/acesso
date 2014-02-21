<?php echo form_open( '', array( 'class' => 'std-form', 'style' => 'margin-top:24px;' ) ); ?>

<ul class="nav nav-tabs">
	<li  class="active">
		<a href="#formcontrols" data-toggle="tab">Perfil Gerente</a>
	</li>
</ul>

<br>

<div id="edit-profile" class="form-horizontal">

	<div class="control-group">                     
		<?php       
    // USERNAME LABEL AND INPUT ***********************************
		echo form_label('Usuário','user_name',array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php      
			$input_data = array(
				'name'    => 'user_name',
				'id'    => 'user_name',
				'class'   => 'span4',
				'value'   => set_value('user_name'),
				'maxlength' => MAX_CHARS_4_USERNAME,
				);

			echo form_input( $input_data );
			?>
		</div> <!-- /controls -->       
	</div> <!-- /control-group -->
	
	<div class="control-group">                     
		<?php 
          // PASSWORD LABEL AND INPUT ***********************************
		echo form_label('Senha','user_pass',array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php 
			$input_data = array(
				'name'    => 'user_pass',
				'id'    => 'user_pass',
				'class'   => 'span4',
				'value'   => set_value('user_pass'),
				);

			echo form_password( $input_data );
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

	<div class="control-group">                     
		<?php 
          // EMAIL ADDRESS LABEL AND INPUT ******************************
		echo form_label('Email','user_email',array('class'=>'control-label'));
		?>
		<div class="controls">
			<?php 
			$input_data = array(
				'name'    => 'user_email',
				'id'    => 'user_email',
				'class'   => 'span4',
				'value'   => set_value('user_email'),
				'maxlength' => '255',
				);

			echo form_input( $input_data );
			?>
		</div> <!-- /controls -->       
	</div> <!-- /control-group -->

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
				'value'   => set_value('first_name'),
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
				'value'   => set_value('last_name'),
				'maxlength' => '20',
				);

			echo form_input($input_data);
			?>
		</div> <!-- /controls -->       
	</div> <!-- /control-group -->

	<div class="control-group" style="display:none;">                     
		<?php 
          // LICENSE NUMBER LABEL AND INPUT ***********************************
		echo form_label('License Number','license_number',array('class'=>'control-label'));

		?>
		<div class="controls">
			<?php 
			$input_data = array(
				'name'    => 'license_number',
				'id'    => 'license_number',
				'class'   => 'span4',
				'value'   => set_value('license_number'),
				'maxlength' => '8',
				);

				echo form_input($input_data); ?>
			</div> <!-- /controls -->       
		</div> <!-- /control-group -->

		<div class="control-group">                     
			<?php 
          // PHONE NUMBER LABEL AND INPUT ***********************************
			echo form_label('Telefone','phone_number',array('class'=>'control-label'));
			?>
			<div class="controls">
				<?php 
				$input_data = array(
					'name'    => 'phone_number',
					'id'    => 'phone_number',
					'class'   => 'span4',
					'value'   => set_value('phone_number'),
					'maxlength' => '20',
					);

				echo form_input($input_data);
				?>
			</div> <!-- /controls -->       
		</div> <!-- /control-group -->


		<div class="form-actions">
			<?php
          // SUBMIT BUTTON **************************************************************
			$input_data = array(
				'name'    => 'form_submit',
				'id'    => 'submit_button',
				'value'   => 'Criar usuário',
				'class'   => 'btn btn-primary'
				);
			echo form_submit($input_data);
			?>
		</div> <!-- /form-actions -->

	</form>
</div><!-- /form-horizontal -->
<?php

/* End of file create_manager.php */
/* Location: /application/views/administration/create_user/create_manager.php */