<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Manage Users View
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
	<ul class="nav nav-tabs">
		<li  class="active">
			<a href="#formcontrols" data-toggle="tab">Pesquisa e lista de usuários</a>
		</li>
	</ul>

	<br>
	<div id="network-activity-indicator">
		<div class="alert alert-info" id="network-activity">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Pesquisando...</strong> Aguarde um momento. <br>
			<?php
			echo img( array( 'src' => 'img/network_activity.gif', 'id' => 'network-activity', 'width' => 200, 'height' => 13 ) );
			?>
		</div>
	</div>
	<div class="alert" id="delete-confirmation">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>Atenção!</strong> Linhas marcadas foram apagados.
	</div>
	<div id="edit-profile" class="form-horizontal">
		<form id="search-controls">
			<div class="control-group">                     
				<label class="control-label" for="search_in">Pesquisar</label>
				<div class="controls">
					<select id="search_in">
						<?php
						foreach( config_item('manage_users_search_options') as $k => $v )
						{
							echo '<option value="' . $k . '">' . $v . '</option>';
						}
						?>
					</select>
				</div> <!-- /controls -->       
			</div> <!-- /control-group -->

			<div class="control-group">                     
				<label class="control-label" for="search_for">Procurar</label>
				<div class="controls">
					<input type="text" id="search_for" value=""/>
				</div> <!-- /controls -->       
			</div> <!-- /control-group -->

			<div class="control-group">                     
				<div class="controls">
					<button id="search-button" class="btn btn-primary">Buscar</button>
					<button id="reset-button" class="btn">Limpar</button>
				</div> <!-- /controls -->       
			</div> <!-- /control-group -->

			<div class="control-group">                     
				<div class="controls">
					<div id="pagination" class="pagination">
						<p><?php echo $pagination_links; ?></p>
					</div>
				</div> <!-- /controls -->       
			</div> <!-- /control-group -->

		</form>
	</div> <!-- /form-horizontal -->

	<table class="table table-striped table-bordered">
		<thead>
			<tr>
				<th> Usuários </th>
				<th> Email</th>
				<th> Regras</th>
				<th class="td-actions" style="text-align: center;"> Apagar </th>
				<th class="td-actions" style="text-align: center;"> Editar </th>
			</tr>
		</thead>
		<tbody>
			<?php
			echo $table_content;
			?>
		</tbody>
	</table>

</div>
<!-- /widget --> 



<?php echo form_open(); ?>
<input type="hidden" id="ci_csrf_token_name" value="<?php echo config_item('csrf_token_name'); ?>" />
<input type="hidden" id="buttons_url" value="<?php echo secure_site_url('administration/manage_users'); ?>" />
</form>



</div><!-- /widget-content -->


<?php
/* End of file manage_users.php */
/* Location: /application/views/administration/manage_users.php */