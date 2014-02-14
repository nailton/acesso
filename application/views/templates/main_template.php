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
	
	echo link_tag( array( 'href' => 'css/style-basico-admin.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";
	
	echo link_tag( array( 'href' => 'css/pages/signin.css', 'media' => 'screen', 'rel' => 'stylesheet' ) ) . "\n";

	// Add any additional stylesheets
	if( isset( $style_sheets ) )
	{
		foreach( $style_sheets as $href => $media )
		{
			echo link_tag( array( 'href' => $href, 'media' => $media, 'rel' => 'stylesheet' ) ) . "\n";
		}
	}

	
	?>
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
	?>

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






<?php echo ( isset( $content ) ) ? $content : ''; ?>








<?php

// jQuery is always loaded
echo script_tag( '//ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js' ) . "\n";

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