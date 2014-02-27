<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');
/**
 * Community Auth - Template Content View
 *
 * Community Auth is an open source authentication application for CodeIgniter 2.1.3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2014, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php echo ( isset( $title ) ) ? $title : WEBSITE_NAME; ?></title>
	<?php
	// Add any keywords
	echo ( isset( $keywords ) ) ? meta('keywords', $keywords) : '';

	// Add a discription
	echo ( isset( $description ) ) ? meta('description', $description) : '';

	// Add a robots exclusion
	echo ( isset( $no_robots ) ) ? meta('robots', 'noindex,nofollow') : '';

	echo meta('viewport', 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no');

	echo meta('apple-mobile-web-app-capable', 'yes');


	?>
	<base href="<?php echo if_secure_base_url(); ?>" />
	<?php
	// Always add the main stylesheet

	echo link_tag( array( 'href' => 'css/bootstrap.min.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	echo link_tag( array( 'href' => 'css/bootstrap-responsive.min.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	echo link_tag( array( 'href' => 'css/font-awesome.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	echo link_tag( array( 'href' => 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	echo link_tag( array( 'href' => 'css/style.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	// echo link_tag( array( 'href' => 'css/pages/signin.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	// echo link_tag( array( 'href' => 'css/pages/dashboard.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	// Add any additional stylesheets
	if( isset( $style_sheets ) )
	{
		foreach( $style_sheets as $href => $media )
		{
			echo link_tag( array( 'href' => $href, 'media' => $media, 'rel' => 'stylesheet' ) ) . "\n";
		}
	}


	?>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>
    <body id="<?php echo $this->router->fetch_class() . '-' . $this->router->fetch_method(); ?>" class="<?php echo $this->router->fetch_class(); ?>-controller <?php echo $this->router->fetch_method(); ?>-method">



     <?php
       // Check if the user is logged in and on HTTPS
     if( isset( $auth_first_name ) )
     {
      $_user_first_name = $auth_first_name;
    }

       // Show the login / logout ...
       // echo ( isset( $_user_first_name ) ) ? 'Welcome, ' . $_user_first_name . ' &bull; ' . secure_anchor('user','User Index') . ' &bull; ' . secure_anchor('user/logout','Logout') : secure_anchor('register','Register') . ' &bull; ' . secure_anchor('user','Login');

    if (empty($_SERVER['HTTP_REFERER'])) {
      $http_referer = "index.php";
    } else {
     $http_referer = $_SERVER['HTTP_REFERER'];
   }

   ?>
   <?php if(isset( $_user_first_name )){ ?>
   <!-- TOPO 1-->
   <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> </a>
          <!-- <a class="brand" href="#">Controle de Acessos </a> -->
          <?php
          echo anchor('/', 'Gestão de acessos', array( 'id' => 'active', 'class'=>'brand' ));
          ?>
          <div class="nav-collapse">
            <ul class="nav pull-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-cog"></i> Conta <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="index.php/register/settings">Modo de registro</a></li>
                    <li><a href="javascript:;">Ajuda</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="icon-user"></i>  <?php echo $_user_first_name ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><?php echo secure_anchor('user/self_update','Perfil') ?></li>
                      <li><?php echo secure_anchor('user/logout','Logout') ?></li>
                    </ul>
                  </li>
                </ul>
                <form class="navbar-search pull-right">
                  <input type="text" class="search-query" placeholder="Search">
                </form>
              </div>
              <!--/.nav-collapse -->
            </div>
            <!-- /container -->
          </div>
          <!-- /navbar-inner -->
        </div>
        <div class="subnavbar">
          <div class="subnavbar-inner">
            <div class="container">
              <ul class="mainnav">
                <li class="active"><a href="index.php"><i class="icon-dashboard"></i><span>Geral</span> </a> </li>
                <li><a href="<?php echo $http_referer; ?>"><i class="icon-arrow-left"></i><span>Voltar</span> </a> </li>
                  <!--  <li><a href="index.php"><i class="icon-facetime-video"></i><span>App Tour</span> </a></li>
                  <li><a href="index.php"><i class="icon-bar-chart"></i><span>Charts</span> </a> </li>
                  <li><a href="index.php"><i class="icon-code"></i><span>Shortcodes</span> </a> </li>
                  <li class="dropdown"><a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-long-arrow-down"></i><span>Drops</span> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <li><a href="index.php">Icons</a></li>
                      <li><a href="index.php">FAQ</a></li>
                      <li><a href="index.php">Pricing Plans</a></li>
                      <li><a href="index.php">Login</a></li>
                      <li><a href="index.php">Signup</a></li>
                      <li><a href="index.php">404</a></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
              <!-- /container -->
            </div>
            <!-- /subnavbar-inner -->
          </div>
          <!-- /subnavbar -->
          <?php }else{ ?>


          <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

              <div class="container">

                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </a>


                <div class="nav-collapse">
                  <ul class="nav pull-right">

                    <li class="">
           <?php        // Show the login / logout ...
           echo ( isset( $_user_first_name ) ) ? '<a>Usuário: ' . $_user_first_name . '</a></li><li>' . secure_anchor('user/logout','Logout') : secure_anchor('register','Registro') . '</li><li class=""> ' . secure_anchor('user','Login'); ?>
         </li>
         <?php  if(!isset( $_user_first_name )): ?>
          <li><a href="<?php echo secure_site_url('user/recover'); ?>">Recuperar senha</a></li>
        <?php endif; ?>
      </ul>

    </div><!--/.nav-collapse -->

  </div> <!-- /container -->

</div> <!-- /navbar-inner -->

</div> <!-- /navbar -->
<?php } ?>
<!-- TOPO -->



<!-- Conteúdo -->

<div class="main">
  <div class="main-inner">
    <div class="container">
      <?php if($this->router->fetch_class() . '-' . $this->router->fetch_method() !='static_pages-index' &&
      $this->router->fetch_class() . '-' . $this->router->fetch_method() !='user-index'): ?>
      <div class="row">
        <div class="span12">
          <div class="widget">
            <div class="widget-header">
              <i class="icon-list-alt"></i>
              <h3><?php echo $title; ?></h3>
            </div> <!-- /widget-header -->
          <?php endif; ?>

          <?php echo ( isset( $content ) ) ? $content : ''; ?>

          <?php if($this->router->fetch_class() . '-' . $this->router->fetch_method() !='static_pages-index' &&
          $this->router->fetch_class() . '-' . $this->router->fetch_method() !='user-index' ): ?>
        </div> <!-- /widget -->
      </div> <!-- /spa12 -->
    </div> <!-- /row -->
  <?php endif;  ?>
  <!-- /Conteúdo -->

  <!-- Rodapé -->
</div> <!-- /container -->
</div> <!-- /main-inner -->
</div> <!-- /main -->
<!-- /Rodapé -->

<?php
// jQuery is always loaded
echo script_tag( '//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' ) . "\n";
echo script_tag( 'js/bootstrap.js' ) . "\n";

	// Add any additional javascript
if( isset( $javascripts ) )
{
 for( $x=0; $x<=count( $javascripts )-1; $x++ )
 {
  echo script_tag( $javascripts["$x"] ) . "\n";
}
}

	// Add anything else to the head
echo ( isset( $extra_head ) ) ? $extra_head : '';

	// Add Google Analytics code if available in config
if( ! empty( $tracking_code ) ) echo $tracking_code;

	// Insert any HTML before the closing body tag if desired
if( isset( $final_html ) )
{
 echo $final_html;
}

	// Add the cookie checker
if( isset( $cookie_checker ) )
{
 echo $cookie_checker;
}

	// Add any javascript before the closing body tag
if( isset( $dynamic_extras ) )
{
 echo '<script>
 ';
 echo $dynamic_extras;
 echo '</script>
 ';
}
?>
</body>
</html>
<?php

/* End of file main_template.php */
/* Location: /application/views/templates/main_template.php */
