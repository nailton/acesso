<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Home View
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

<?php

if( isset( $auth_level ) ){ ?>
<div class="main">
	<div class="main-inner">
		<div class="container">
			<div class="row">
				<div class="span6">



					<div class="widget">
						<div class="widget-header"> <i class="icon-bookmark"></i>
							<h3>Ferramentas</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">
							<div class="shortcuts"> 
								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-globe"></i>
									<span class="shortcut-label">Registro BR</span> 
								</a> 

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-link"></i>
									<span class="shortcut-label">Hospedagem</span> 
								</a>

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-upload-alt"></i>
									<span class="shortcut-label">FTP</span> 
								</a>

								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-cogs"></i>
									<span class="shortcut-label">SSH</span> 
								</a> 

								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-cloud"></i>
									<span class="shortcut-label">Bancos dados</span> 
								</a>

								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-cog"></i>
									<span class="shortcut-label">Administrações</span> 
								</a> 

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-group"></i>
									<span class="shortcut-label">Clientes</span> 
								</a>

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-envelope"></i> 
									<span class="shortcut-label">E-mail</span> 
								</a>

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-user"></i>
									<span class="shortcut-label">Usuários</span> 
								</a>

								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-truck"></i>
									<span class="shortcut-label">Terceirizado</span> 
								</a> 

								<a href="javascript:;" class="shortcut"> 
									<i class="shortcut-icon icon-bar-chart"></i>
									<span class="shortcut-label">Admin estatística</span> 
								</a> 

								<a href="javascript:;" class="shortcut">
									<i class="shortcut-icon icon-phone"></i>
									<span class="shortcut-label">Telefônico</span> 
								</a>
								
							</div>
							<!-- /shortcuts --> 
						</div>
						<!-- /widget-content --> 
					</div>
					<!-- /widget -->

					<div class="widget widget-table action-table">
						<div class="widget-header"> <i class="icon-th-list"></i>
						<h3>Link úteis</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">
							<table class="table table-striped table-bordered">
								<thead>
									<tr>
										<th> Descrição </th>
										<th> Link</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td> Locaweb login </td>
										<td> <a href="http://www.locaweb.com.br/" target="_blank">
										<i class="btn-icon-only icon-external-link"> </i>http://www.locaweb.com.br/</a> </td>
									</tr>
									<tr>
										<td> Status Locaweb </td>
										<td> <a href="http://statusblog.locaweb.com.br/" target="_blank">
										<i class="btn-icon-only icon-external-link"> </i>http://statusblog.locaweb.com.br/</a> </td>
									</tr>
									<tr>
										<td> Google Apps Status </td>
										<td> <a href="http://www.google.com/appsstatus" target="_blank">
										<i class="btn-icon-only icon-external-link"> </i>http://www.google.com/appsstatus</a> </td>
									</tr>
									<tr>
										<td> Registro BR </td>
										<td> <a href="https://registro.br/" target="_blank">
										<i class="btn-icon-only icon-external-link"> </i>https://registro.br/</a> </td>
									</tr>
									<tr>
										<td> phpMyadmin Locaweb</td>
										<td> <a href="https://phpmyadmin.locaweb.com.br/" target="_blank">
										<i class="btn-icon-only icon-external-link"> </i>https://phpmyadmin.locaweb.com.br/</a> </td>
									</tr>

								</tbody>
							</table>
						</div>
						<!-- /widget-content --> 
					</div>
					<!-- /widget --> 

				</div>
				<!-- /span6 -->
				<div class="span6">


					<div class="widget widget-nopad">
						<div class="widget-header"> <i class="icon-list-alt"></i>
							<h3> Estatísticas de hoje</h3>
						</div>
						<!-- /widget-header -->
						<div class="widget-content">
							<div class="widget big-stats-container">
								<div class="widget-content">
									<h6 class="bigstats">O volume de itens gerenciados.</h6>
									<div id="big_stats" class="cf">
										<!-- <div class="stat"> <i class="icon-globe"></i> <span class="value">2</span> </div> -->
										<!-- .stat -->

										<div class="stat"> <i class="icon-link"></i> <span class="value">35</span> </div>
										<!-- .stat -->

										<div class="stat"> <i class="icon-upload-alt"></i> <span class="value">43</span> </div>
										<!-- .stat -->

										<div class="stat"> <i class=" icon-cogs"></i> <span class="value">26</span> </div>
										<!-- .stat --> 

										<div class="stat"> <i class="icon-cloud"></i> <span class="value">56</span> </div>
										<!-- .stat --> 
									</div>

									<div id="big_stats" class="cf">

										<div class="stat"> <i class=" icon-cog"></i> <span class="value">19</span> </div>
										<!-- .stat --> 

										<div class="stat"> <i class="icon-group"></i> <span class="value">18</span> </div>
										<!-- .stat --> 

										<div class="stat"> <i class="icon-truck"></i> <span class="value">7</span> </div>
										<!-- .stat --> 
										<div class="stat"> <i class="icon-bar-chart"></i> <span class="value">27</span> </div>
										<!-- .stat --> 
									</div>

									<!-- <div id="big_stats" class="cf"> -->
									<!-- <div class="stat"> <i class="icon-phone"></i> <span class="value">25%</span> </div> -->
									<!-- .stat --> 
									<!-- </div> -->
								</div>
								<!-- /widget-content --> 

							</div>
						</div>
					</div>
					<!-- /widget -->

				</div>
				<!-- /span6 --> 
			</div>
			<!-- /row --> 
		</div>
		<!-- /container --> 
	</div>
	<!-- /main-inner --> 
</div>
<!-- /main -->



<?php 	} else { 

	header('Location: index.php/user');

} ?>


<?php

/* End of file home.php */
/* Location: /application/views/home/home.php */