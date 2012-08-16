<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

<link href='http://fonts.googleapis.com/css?family=Revalia' rel='stylesheet' type='text/css'>

<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />

<link href="/(directory)/menuAccordion.css" rel="stylesheet" type="text/css" />
 <script src="/(directory)/menuAccordion.js" type="text/javascript"></script>

 <!--[if lt IE 9]>

 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

  <![endif]-->

  <!--[if !IE 7]>

	<style type="text/css">

		#wrap {display:table;height:100%}

	</style>

<![endif]-->

<title><?php wp_title ( '|', true,'right' ); ?></title>

 

<link rel="profile" href="http://gmpg.org/xfn/11" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />





 

<?php

    if ( is_singular() && get_option( 'thread_comments' ) )

        wp_enqueue_script( 'comment-reply' );

 

    wp_head();

     

    wp_get_archives('type=monthly&format=link');

?>

</head>

                        <?php //Assigns class to body tag

$page = $_SERVER['REQUEST_URI']; 

$page = str_replace('/', '', $page); 

$page = str_replace('.php', '', $page); 

$page = str_replace('?s=', '', $page); 

$page = $page ? $page : 'index'; 

?>



<body id="<?php echo $page ?>">



	<div id="wrapper">



<div id="container">







      		<div id="header">



 





        <a href="<?php echo get_option('home'); ?>"id="logo"><?php bloginfo('name'); ?></a>

        <h1 id="tagline">"<?php bloginfo('description'); ?>"</h1>





<nav><?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'nav', 'theme_location' => 'primary-menu' ) ); ?></nav>

<div id="callus">028 2827 2827</div>

</div>



