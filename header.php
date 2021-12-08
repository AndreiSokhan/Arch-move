<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--<link rel="stylesheet" href="./css/normalize.css">-->
   <!--<link rel="stylesheet" href="./css/style.css">-->

   <?php wp_head(); ?>

   <title><?php bloginfo( 'description' ); ?>
</title>
</head>

<body>
   <header class="header">
      <div class="header__wrapper">
         <a href="<?php bloginfo( 'url' ); ?>" class="header__logo-link"><img class="header__logo logo" src="<?php bloginfo( 'template_url' ) ?>./assets/images/logo.svg" alt=""></a>

         <!-- кусок php кода, который отвечает за меню в шапке -->
         <?php
         wp_nav_menu( [
            'theme_location'  => 'top_menu',
            'container'       => 'nav',
            'container_class' => 'header__nav nav',
            'menu_class'      => 'nav__list',
         ] );
         ?>

         <!--<nav class="header__nav nav">
            <ul class="nav__list">
               <li class="nav__item"><a href="#" class="nav__link">Design Gallery</a></li>
               <li class="nav__item"><a href="#" class="nav__link">List of Architect</a></li>
               <li class="nav__item"><a href="#" class="nav__link">Articles</a></li>
               <li class="nav__item"><a href="#" class="nav__link">How it Works</a></li>
            </ul>
         </nav>-->

      </div>
         <div class="header__registration">
            <img class="header__search" src="./assets/images/search.svg" alt="">
            <button class="header__btn btn header__btn--sign-in">Sign In</button>
            <button class="header__btn btn header__btn--sign-up">Sign Up</button>
         </div>
      
   </header>