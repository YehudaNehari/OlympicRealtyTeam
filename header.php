<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<title>Document</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="header" id="myHeader">
		<div class="main-header">
			<div class="logo-img">
				<img src="http://127.0.0.1/wp-content/uploads/2022/11/logo-removebg-preview.png" alt="Logo Image" />
			</div>
			<div class="header-title">
				<h1>Olympic Realty Team</h1>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'menu_id'=>'6', 'container_class' => 'main-nav', ) ); ?>
				<a class="toggle-nav" href=“#">&#9776;</a>
			</nav>
		</div>
	</div>