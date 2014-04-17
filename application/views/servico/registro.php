<?php if( ! defined('BASEPATH') ) exit('No direct script access allowed');

//CSS e JS do grocery
foreach($css_files as $file): ?>
<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<?php

if( isset( $auth_level ) ){ ?>
<div class="widget">
	<div class="widget-content">

		<?php echo $output; ?>

	</div>
	<!-- widget-content -->
</div>
<!-- widget -->
<?php   } else {

	header('Location: index.php/user');

} ?>
