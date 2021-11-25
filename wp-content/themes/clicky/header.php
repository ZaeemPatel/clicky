<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
	<!-- Nav -->
	<div class="container">

		<div class="website_header xmb w-100">
			
			<div class="col-xs-6 col-sm-2 dib sptb">				
				<a href="/" class="logo_wrapper db smt rel">
					<img src="<?php echo get_bloginfo('stylesheet_directory'); ?>/assets/clicky_logo.svg" class="svg" alt="Clicky Logo" width="160">
				</a>
			</div>
			<div class="navbar-header visible-xs">						
				<button title="Open Mobile Menu" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
			</div>
			<div class="navbar navbar-default col-sm-10 col-md-10" role="navigation">
				<div class="nav_wrapper">					
					<div class="collapse navbar-collapse">
						<?php wp_nav_menu( array(
							'theme_location' => 'header-menu', 
							'menu' => 'Main', 
							'menu_class' => 'nav navbar-nav flex flex-row w-100', 
							'container'=> false, 
							'walker'=> new WP_Bootstrap_Navwalker)
						); ?>
					</div>
				</div>
			</div>

		</div>		

	</div>
</header>

<div id="main-container">