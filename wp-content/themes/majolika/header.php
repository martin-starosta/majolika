<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package majolika
 */

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <?php wp_head(); ?>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Alegreya:400,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="<?= get_stylesheet_directory_uri(); ?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Majolika Main -->
    <link href="<?= get_stylesheet_directory_uri(); ?>/css/main.css" rel="stylesheet">
  </head>
  <body>

  <nav class="navbar navbar-inverse navbar-transparent navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?= get_site_url(); ?>">
            <img src="<?= get_stylesheet_directory_uri(); ?>/media/logo-majolika-menu.png"/>
          </a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
                    "container_class"=> "primary-menu-nav",
                    'menu_class' => 'nav navbar-nav'
									)
								);
							?>
          </ul>
          <ul class="nav navbar-nav">
          
        </div><!--/.nav-collapse -->
      </div>
   </nav>