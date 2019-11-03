<?php global $redux_indust;?>
<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<?php wp_head();?>
		<style type="text/css">
			#banner{			
				background-image: url(<?php echo esc_url($redux_indust['banner']['url']);?>);
			}
		</style>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" style="height:80px;" href="<?php echo home_url();?>"><img src="<?php echo esc_url($redux_indust['logo']['url']);?>" alt="<?php echo $redux_indust['alt'];?>" /></a>
				<nav>
					<a href="#menu">Menu</a>
					
				</nav>
			</header>

		<!-- Nav -->
				<?php 
					wp_nav_menu(array(
						'theme_location'=>'primary-menu',
						'menu_class'=>'links',
						'container'=>'nav',
						'container_id'=>'menu',
					));
				?>
		<!-- Banner -->
		<?php if(is_page('home')){?>
			<section id="banner">
				<div class="inner">
					<h1><?php bloginfo('name');?></h1>
					<p><?php bloginfo('description');?></p>
				</div>
				<video autoplay loop muted playsinline src="<?php echo $redux_indust['banner']['url'];?>"></video>
			</section>
		<?php }else{ ?>
			
			<div id="heading" >
				<h1><?php echo get_the_title();?> Page</h1>
			</div>
		<?php }  ?>
