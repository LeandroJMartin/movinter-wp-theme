<section class="mt-[135px] sm:mt-[110px]">

  <?php

  $banner = get_content('banner_home');

  ?>

  <div id="banner" class="owl-carousel owl-theme">

    <?php

      while ( $banner->have_posts() ) :
        $banner->the_post();

        ?>
        <div class="item">
          <a href="<?php the_field('link') ?>">
            <img src="<?php the_field('img_desk') ?>" alt="Image slide Movinter">
            <?php
            
            if (get_field('img_mobile')) :
              
              ?>          
              <img src="<?php the_field('img_mobile') ?>" alt="Image slide Movinter">
              <?php

            endif;

            ?>
          </a>
        </div>
          
        <?php

      endwhile;
      wp_reset_postdata();

    ?>
  </div>      
</section>

<section class="my-16 bg-bg-about bg-contain lg:bg-[length:40%_100%] bg-no-repeat">
  <div class="container lg:flex items-center">
    <div class="lg:w-2/4 pt-12">
      <img class="w-[87%] lg:w-full block m-auto" src="<?php the_field('imagem_sh'); ?>" alt="Imagem sobre">
    </div>
    <div class="lg:w-2/4 p-4 sm:pl-24">
      <h1 class="text-2xl xl:text-3xl text-violet uppercase font-semibold mb-4"><?php the_field('titulo_sh'); ?></h1>
      <p class="text-xs xl:text-sm"><?php the_field('descricao_sh'); ?></p>
      <span class="h-[3px] bg-violet w-full my-8 block"></span>
      <div class="grid grid-cols-3 gap-2 lg:gap-8 text-center">
        <div class="border 2xl:border-2 border-blue rounded-3xl p-2 lg:p-5">
          <img class="h-[35px] lg:h-[60px] block m-auto" src="<?php the_field('icone_bloco_1_sh'); ?>" alt="icone">
          <span class="text-blue text-xs lg:text-sm font-semibold mt-3 block"><?php the_field('nome_sh'); ?></span>
        </div>
        <div class="border 2xl:border-2 border-blue rounded-3xl p-2 lg:p-5">
          <img class="h-[35px] lg:h-[60px] block m-auto" src="<?php the_field('icone_bloco_2_sh'); ?>" alt="icone">
          <span class="text-blue text-xs lg:text-sm font-semibold mt-3 block"><?php the_field('nome_2_sh'); ?></span>
        </div>
        <div class="border 2xl:border-2 border-blue rounded-3xl p-2 lg:p-5">
          <img class="h-[35px] lg:h-[60px] block m-auto" src="<?php the_field('icone_bloco_3_sh'); ?>" alt="icone">
          <span class="text-blue text-xs lg:text-sm font-semibold mt-3 block"><?php the_field('nome_3_sh'); ?></span>
        </div>
      </div>
      <div class="mt-10 flex">
        <button class="btn-form uppercase text-xs lg:text-base w-auto lg:w-[200px] px-4 py-2 bg-violet text-white rounded-2xl"><?php _e('Seja um expositor'); ?></button>
        <button class="btn-form uppercase text-xs lg:text-base w-auto lg:w-[200px] px-4 py-2 border border-violet text-violet rounded-2xl ml-3 "><?php _e('Visite a feira'); ?></button>
      </div>
    </div>
  </div>
</section>

<section class="container text-center pt-0 lg:pt-16 pb-8">
  <h1 class="text-xl xl:text-3xl text-violet uppercase font-semibold mb-8 block"><?php _e('Conheça os expositores já confirmados para 2023'); ?></h1>

  <div id="expositores" class="owl-carousel owl-theme px-2">
  <?php

    $expositores = get_content('expositores');
    
    while ( $expositores->have_posts() ) :
      $expositores->the_post();      

      ?>
      <div class="item">
        <a href="<?php the_field('ex_link') ?>">
          <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
        </a>
      </div>
      <div class="item">
        <a href="<?php the_field('ex_link') ?>">
          <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
        </a>
      </div>
      <div class="item">
        <a href="<?php the_field('ex_link') ?>">
          <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
        </a>
      </div>
    
    <?php

    endwhile;
    wp_reset_postdata();
  
  ?>

  </div>
</section>

<section class="relative h-6 lg:h-8 truncate mb-5 block">
  <div class="absolute top-0 -left-10 w-[calc(100%+100px)]">
    <span class="text-blue uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-base lg:text-xl tracking-[0.4rem] lg:tracking-[1rem]">Movinter23</span>
  </div>
</section>

<?php

  get_template_part('./template-parts/form', 'form');