<?php echo form_open( '', array( 'class' => 'std-form', 'style' => 'margin-top:24px;' ) ); ?>

<ul class="nav nav-tabs">
	<li  class="active">
		<a href="#formcontrols" data-toggle="tab">Perfil Cliente</a>
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
				'id'    => 'username',
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
		echo form_label('E-mail','user_email',array('class'=>'control-label'));

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
	
	<div class="control-group">                     
		<?php 
   // STREET ADDRESS LABEL AND INPUT ***********************************
		echo form_label('Endereço','street_address',array('class'=>'control-label'));

		?>
		<div class="controls">
			<?php

			$input_data = array(
				'name'    => 'street_address',
				'id'    => 'street_address',
				'class'   => 'span4',
				'value'   => set_value('street_address'),
				'maxlength' => '60',
				);

			echo form_input($input_data);

			?>

		</div> <!-- /controls -->       
	</div> <!-- /control-group -->

	<div class="control-group">                     
		<?php 
      // CITY LABEL AND INPUT ***********************************
		echo form_label('Cidade','city',array('class'=>'control-label'));

		?>
		<div class="controls">
			<?php

			$input_data = array(
				'name'    => 'city',
				'id'    => 'city',
				'class'   => 'span4',
				'value'   => set_value('city'),
				'maxlength' => '60',
				);

			echo form_input($input_data);

			?>

		</div> <!-- /controls -->       
	</div> <!-- /control-group -->
	
	<div class="control-group">                     
		<?php 
          // STATE LABEL AND INPUT ***********************************
		echo form_label('Estado','state',array('class'=>'control-label'));

		?>
		<div class="controls">
			<?php

			$input_data = array(
				'name'    => 'state',
				'id'    => 'state',
				'class'   => 'span4',
				'value'   => set_value('state'),
				'maxlength' => '50',
				);

			echo form_input($input_data);

			?>

		</div> <!-- /controls -->       
	</div> <!-- /control-group -->

	<div class="control-group">                     
		<?php 
           // ZIP LABEL AND INPUT ***********************************
		echo form_label('CEP','zip',array('class'=>'control-label'));

		?>
		<div class="controls">
			<?php

			$input_data = array(
				'name'    => 'zip',
				'id'    => 'zip',
				'class'   => 'span4',
				'value'   => set_value('zip'),
				'maxlength' => '10',
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

/* End of file create_customer.php */
/* Location: /application/views/administration/create_user/create_customer.php */