<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Self Update View
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

<div class="account-container register">
	
	<div class="content clearfix">
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
		</div>
<?php

  if( isset( $validation_errors ) )
  {
    echo '
      <div class="feedback error_message" style="margin-bottom:10px;">
        <p class="feedback_header">
          Profile Update Contained The Following Errors:
        </p>
        <ul>
          ' . $validation_errors . '
        </ul>
        <p>
          PROFILE NOT UPDATED
        </p>
      </div>
    ';
  }
  else if( isset( $validation_passed ) )
  {
    echo '
      <div class="feedback confirmation" style="margin-bottom:10px;">
        <p class="feedback_header">
          Your profile has been successfully updated.
        </p>
      </div>
    ';
  }

  if( $user_data !== FALSE )
  {

  echo form_open_multipart( 'user/self_update', array( 'class' => 'std-form' ) ); 

  echo $role_specific_form;

  echo form_close();

  }
  else
  {
    echo 'Error: No user data available.';
  } ?>

		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<!-- Text Under Box -->
<div class="login-extra">
	Already have an account? <a href="login.html">Login to your account</a>
</div> <!-- /login-extra -->

<?php 
/* End of file self_update.php */
/* Location: /application/views/self_update.php */