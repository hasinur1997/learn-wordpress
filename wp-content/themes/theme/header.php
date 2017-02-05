<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	
	<title><?php bloginfo('title');?></title>
	
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" media="all" />
	
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head() ;?>
</head>

<body>
	<section id="menu" class="navbar-fixed-top">
		<div class="slider-overlay">
		
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="logo"> 
							<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo" />
						</div>
					</div>
					<div class="col-md-8">
						<nav id="nav"> 
							<ul class="list-inline pull-right ">
								<li class="active"><a href="#slider">Home</a></li>
								<li><a href="#about">About US</a></li>
								<li><a href="#service">Services</a></li>
								<li><a href="#portfolio">Our Portfolio</a></li>
								<li><a href="#pricing">Our Pricing</a></li>
								<li><a href="#contact">Contact</a></li>
								
							</ul>
						</nav>
					</div>
				</div>
			</div>

		</div>

	</section>