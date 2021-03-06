<footer class="footer">
      <div class="container">
         <div class="footer__wrapper">

         <?php
         wp_nav_menu( [
            'theme_location'  => 'bottom_menu',
            'container'       => 'nav',
            'container_class' => 'footer__nav nav',
            'menu_class'      => 'nav__list',
         ] );
         ?>

            <!--<ul class="footer__list">
               <li class="footer__item"><a href="#" class="footer__link">About Us</a></li>
               <li class="footer__item"><a href="#" class="footer__link">How it Works</a></li>
               <li class="footer__item"><a href="#" class="footer__link">FAQ</a></li>
               <li class="footer__item"><a href="#" class="footer__link">Contact Us</a></li>
               <li class="footer__item"><a href="#" class="footer__link">Privacy Policy</a></li>
            </ul>-->
               <a href="<?php echo home_url(); ?>" class="footer__logo-link"><img class="footer__logo logo" src="<?php echo IMG_DIR; ?>/logo.svg" alt=""></a>
         </div>
      </div>
   </footer>

   <?php wp_footer(); ?>

   <!-- подключаем файлы .js -->
   <!-- подключаем библиотеку для слайдера Jquery -->
   <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
   <!-- подключаем файл слайдера -->
   <!--<script src="js/slick.min.js"></script>-->
   <!-- подключаем файл скрипты нашего слайдера-->
   <!--<script src="js/script.js"></script>-->
</body>

</html>