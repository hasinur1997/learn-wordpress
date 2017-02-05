<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css" media="all" />
	<?php wp_head();?>
</head>

<body>
	<div class="space"></div>
	<nav class="navbar navbar-default "> 
	
		<div class="container-fluid">
		
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a href="<?php bloginfo('home'); ?>" class="navbar-brand"><?php bloginfo('name');?></a>
			
			</div>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php wp_nav_menu(array( 
			'theme_location' => 'mainmenu',
			'menu_class' => 'nav navbar-nav navbar-right'
			
		));?>
	  </div>
		</div>
		
	</nav>
	