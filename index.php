<?php get_header(); ?>

   <section class="main" id="main">
      <div class="container">
         <h1 class="main__title"><?php the_field('main__title'); ?> <span class="main__title-s">House</span></h1>
         <div class="main__wrapper">
            <div class="main__content">
               <p class="main__text"><?php the_field('main__text'); ?></p>
               <button class="main__btn btn">Free Consultation</button>
            </div>
            <img class="main__image" src="<?php the_field('main__image'); ?>" alt="">
         </div>
      </div>
   </section>

   <section class="galery" id="galery">
      <div class="container">
         <h2 class="galery__title title">Build professional valuable room for you</h2>
         <div class="galerry__wrapper">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img1.jpg" alt="">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img2.jpg" alt="">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img3.jpg" alt="">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img4.jpg" alt="">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img5.jpg" alt="">
            <img class="galery__image" src="<?php echo IMG_DIR; ?>/galery-img6.jpg" alt="">
         </div>
      </div>
   </section>

   <section class="needs" id="needs">
      <div class="container">
         <h2 class="needs__title title">Build your needs with Archmove</h2>
         <div class="needs__inner">
            <img class="needs__image" src="<?php echo IMG_DIR; ?>/needs-img.jpg" alt="">
            <div class="needs__offer offer">
               <!--<div class="offer__wrapper">-->

               <?php foreach(getNeeds() as $need): ?>
                  <div class="offer__item">
                     <div class="offer__icon-box">
                        <img class="offer__icon" src="<?php echo $need['img'] ?>" alt="">
                     </div>
                     <div class="offer__info">
                        <h3 class="offer__title"><?php echo $need['title'] ?></h3>
                        <p class="offer__text"><?php echo $need['text'] ?></p>
                     </div>
                  </div>
               <?php endforeach; ?>

                  <!--<div class="offer__item">
                     <div class="offer__icon-box">
                        <img class="offer__icon" src="<?php echo IMG_DIR; ?>/needs-2.svg" alt="">
                     </div>
                     <div class="offer__info">
                        <h3 class="offer__title">No additional fees</h3>
                        <p class="offer__text">There are no hidden costs. The value of the offer you get is the value you
                           paid.</p>
                     </div>
                  </div>
                  <div class="offer__item">
                     <div class="offer__icon-box">
                        <img class="offer__icon" src="<?php echo IMG_DIR; ?>/needs-3.svg" alt="">
                     </div>
                     <div class="offer__info">
                        <h3 class="offer__title">Get escort from the Team</h3>
                        <p class="offer__text">Monitor reports from the Arsitag team who check directly in the field.</p>
                     </div>
                  </div>-->
               <!--</div>   -->
               <button class="offer__btn btn"> CONSULTATION</button>
            </div>
         </div>
      </div>
   </section>

   <section class="true" id="true">
      <div class="container">
         <div class="true__top">
            <h2 class="true__title title">Sound Too Good To Be True?</h2>
            <div class="true-slider">
               <div class="true-slider__item">
                  <p class="true-slider__text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                  <div class="true__autor">
                     <span class="true__autor-name">Adam Morph</span> — <span class="true__autor-profession">CEO A lfatech</span>
                  </div>
               </div>
               <div class="true-slider__item">
                  <p class="true-slider__text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                  <div class="true__autor">
                     <span class="true__autor-name">Adam Morph</span> — <span class="true__autor-profession">CEO A lfatech</span>
                  </div>
               </div>
               <div class="true-slider__item">
                  <p class="true-slider__text">We just wanted to thank you for this fantastic website! We are so grateful for being able to advertise our Petite cabin and receive feedback from people from all over the U.S. and even further.</p>
                  <div class="true__autor">
                     <span class="true__autor-name">Adam Morph</span> — <span class="true__autor-profession">CEO A lfatech</span>
                  </div>
               </div>
            </div>
            <!--<div class="true__autor">
               <span class="true__autor-name">Adam Morph</span> — <span class="true__autor-profession">CEO A lfatech</span>
            </div>-->
         </div>
         <div class="true__bottom">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/project-img.png" alt="">
            <div class="true__bottom-content">
               <h2 class="true__bottom-title title">Realize your dream project with <span class="true__bottom-span">Archmove</span></h2>
               <button class="true__btn btn">FREE CONSULTATION</button>
            </div>
         </div>
      </div>
   </section>

   <section class="partners" id="partners">
      <div class="container">
         <h2 class="partners__title title">Our Partners</h2>
         <div class="partners__logo">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/partners-1.svg" alt="">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/partners-2.svg" alt="">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/partners-3.svg" alt="">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/partners-4.svg" alt="">
            <img class="true__bottom-img" src="<?php echo IMG_DIR; ?>/partners-5.svg" alt="">
         </div>
      </div>
   </section>

   <?php get_footer(); ?> 