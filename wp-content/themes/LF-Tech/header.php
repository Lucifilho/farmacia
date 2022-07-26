<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= wp_title(); ?></title>
    <link rel="stylesheet" href="<?= bloginfo('stylesheet_url' );?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header"  style="background-image: url('<?php !empty(the_field('fundo')) ? the_field('fundo') : ""; ?>')">

    <div class="container">

        <div class="menu_container">

            <div class="left_menu">
		        <?php get_custom_logo() ?>
            </div>
            <div class="right_menu">

		        <?php

		        wp_nav_menu(
			        array('theme_location' => 'menu-principal',
			              'container' =>  'menu-principal' )
		        );

		        ?>
            </div>
        </div>


    </div>

</header>