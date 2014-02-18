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
<div class="main">

  <div class="main-inner">

    <div class="container">

      <div class="row">

        <div class="span12">          

          <div class="widget ">

            <div class="widget-header">
              <i class="icon-user"></i>
              <h3>Sua conta</h3>
            </div> <!-- /widget-header -->

            <div class="widget-content">



              <div class="tabbable">
                <ul class="nav nav-tabs">
                  <li  class="active">
                    <a href="#formcontrols" data-toggle="tab">Perfil</a>
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

                      </fieldset>
                    </form>
                  </div>

                </div>

              </div>       

            </div> <!-- /widget-content -->

          </div> <!-- /widget -->

        </div> <!-- /span8 -->



      </div> <!-- /row -->

    </div> <!-- /container -->

  </div> <!-- /main-inner -->

</div> <!-- /main -->


<?php 
/* End of file self_update.php */
/* Location: /application/views/self_update.php */