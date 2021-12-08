<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--<link rel="stylesheet" href="./css/normalize.css">-->
   <!--<link rel="stylesheet" href="./css/style.css">-->

   <?php wp_head(); ?>

   <title>Arch-move</title>
</head>

<body>
   <header class="header">
         <a href="#" class="header__logo-link"><img class="header__logo logo" src="<?php bloginfo( 'template_url' ) ?>./assets/images/logo.svg" alt=""></a>
      <div class="header__wrapper">
         <nav class="header__nav nav">
            <ul class="nav__list">
               <li class="nav__item"><a href="#" class="nav__link">Design Gallery</a></li>
               <li class="nav__item"><a href="#" class="nav__link">List of Architect</a></li>
               <li class="nav__item"><a href="#" class="nav__link">Articles</a></li>
               <li class="nav__item"><a href="#" class="nav__link">How it Works</a></li>
            </ul>
         </nav>
         <div class="header__registration">
            <img class="header__search" src="./assets/images/search.svg" alt="">
            <button class="header__btn btn header__btn--sign-in">Sign In</button>
            <button class="header__btn btn header__btn--sign-up">Sign Up</button>
         </div>
      </div>
   </header>