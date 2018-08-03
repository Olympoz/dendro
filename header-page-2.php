<!doctype html>
<html <? language_attributes(); ?>>
<head>
	<meta charset="<? bloginfo( 'charset' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<? bloginfo( 'pingback_url' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title><? wp_title(''); ?><? if(wp_title('', false)) { echo ' :'; } ?> <? bloginfo('name'); ?></title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

	<link rel="apple-touch-icon" sizes="57x57" href="<? bloginfo('template_url'); ?>/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<? bloginfo('template_url'); ?>/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<? bloginfo('template_url'); ?>/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<? bloginfo('template_url'); ?>/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<? bloginfo('template_url'); ?>/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<? bloginfo('template_url'); ?>/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<? bloginfo('template_url'); ?>/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<? bloginfo('template_url'); ?>/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<? bloginfo('template_url'); ?>/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<? bloginfo('template_url'); ?>/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<? bloginfo('template_url'); ?>/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<? bloginfo('template_url'); ?>/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<? bloginfo('template_url'); ?>/img/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<? bloginfo('template_url'); ?>/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
<link rel="stylesheet" href="<? bloginfo('template_url') ?>/css/style.css">
	<!-- [if lt IE 9]>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv-printshiv.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif] -->
	<? wp_head(); ?>



	</script>

	</head>
	<body <? body_class(); ?>>


		<header class="header_page_2">



			<a href="<? site_url() ?>/dendrotech/">
					<div class="logo_header">  Dendrotech</div>
				</a>

				<div class="logo_menu" >

					<div class="bar1"></div>
					<div class="bar2"></div>
					<div class="bar3"></div>

				</div>


				<nav class="menu-principal">


					<ul id="menu-menu-de-navigation" class="menu">

						<li><a href="<? echo site_url('notre-approche')  ?>">Notre Approche</a></li>
						<li><a href="<? echo site_url('nos-moyens')  ?>">Nos moyens</a></li>
						<li id="sub_menu"><a href="">Nos prestations</a>
								<ul >
									<li><span class="sub_menu_dotted_lign"></span> <a href="<? echo site_url('bois-de-charpente')  ?>"> Bois de Charpente</a> </li>
									<li> <a href="<? echo site_url('bois-gorge-deau') ?>"> Bois Gorgé d'eau</a></li>
								</ul>
						</li>
						<li class="cross_nav"></li>
						<li class="second_menu"><a href="<? echo site_url('contact') ?>">Contact</a></li>
						<li class="second_menu"><a href="<? echo site_url('actualites')  ?>">Actualités</a></li>

					</ul>

				</nav>


			 <!-- wp_nav_menu(array( 'theme_location' => 'menu-principal', 'container' => 'nav', 'container_class' => 'menu-principal'));  -->
		</header>
