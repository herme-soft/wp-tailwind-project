<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

   <header>
        <nav class="px-10 bg-red-700">
            <!-- <ul>
                <li><a class="font-bold" href="accueil.html">Accueil</a></li>
                <li><a href="serviceshtml">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul> -->

            <?php
                /** Navigation */
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class' => 'top-bar'
                    )
                ); 
            ?>
        </nav>
   </header>
    
