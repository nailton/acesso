<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');




?>

<div class="account-container">
  <?php     if( ! isset( $on_hold_message ) )
  {
    if( isset( $login_error_mesg ) )
    {
      echo '
      <div class="alert">
       <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Login erro!</strong> Usuário, E-mail ou senha inálida.
       <p>Letras maiúsculas e minúsculas interfe no acesso.</p>
     </div>
     ';
   }

   if( $this->input->get('logout') )
   {
    echo '
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      Você se desconectou com sucesso.
    </div>
    ';
  } ?>
  <div class="content clearfix">
    <?php   
    echo form_open( '', array( 'class' => 'std-form') ); 
    ?>


    <h1>Login</h1>   

    <div class="login-fields">

      <p>Por favor entre com detalhes da sua conta</p>

      <div class="field">
        <label for="username">Usuário</label>
        <input type="text" name="login_string" id="login_string" class="form_input login username-field" autocomplete="off" maxlength="255" placeholder="Usuário" />
      </div> <!-- /field -->

      <div class="field">
        <label for="password">Senha:</label>
        <input type="password" name="login_pass" id="login_pass" class="form_input password login password-field" autocomplete="off" maxlength="<?php echo MAX_CHARS_4_PASSWORD; ?>" placeholder="Senha"/>
      </div> <!-- /password -->

    </div> <!-- /login-fields -->

    <div class="login-actions">

     <?php
     if( config_item('allow_remember_me') )
     {
      ?> 
      <span class="login-checkbox">
        <input type="checkbox" id="remember_me" name="remember_me" value="yes" class="field login-checkbox" tabindex="4" />
        <label class="choice" for="Field">Manter logado</label>
      </span>
      <?php
    }
    ?>

    <!-- <button >Entrar</button> -->
    <input type="submit" class="button btn btn-success btn-large" name="submit" value="Login" id="submit_button"  />
  </div> <!-- .actions -->

</form>

</div> <!-- /content -->

</div> <!-- /account-container -->



<!-- <div class="login-extra"> -->
<!-- <a href="<?php echo secure_site_url('user/recover'); ?>">Recuperar senha</a> -->

<!-- </div> /login-extra -->






<?php

}
else
{
    // EXCESSIVE LOGIN ATTEMPTS ERROR MESSAGE
  echo '
  <div class="alert alert-block">
    <h4>O excesso de tentativas de login!</h4>
    Você excedeu o número máximo de falha de login.<br>
    Seu acesso ao login e conta a recuperação foi bloqueado para ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutos.<br>
    Por favor use o  ' . secure_anchor('user/recover','Recuperar conta') . ' depois de ' . ( (int) config_item('seconds_on_hold') / 60 ) . ' minutos passados ou ' . secure_anchor('contact','Contate') . ' ' . WEBSITE_NAME . ', se você precisar de assistência para acessar a sua conta. 
  </div> ';
}


/* End of file login_form.php */
/* Location: ./application/views/auth/login_form.php */