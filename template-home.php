<section class="mt-[110px]">

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
</section>

<section class="my-16 bg-bg-about bg-[length:40%_100%] bg-no-repeat">
  <div class="container flex items-center">
    <div class="w-2/4 pt-12">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/a-feira.png" alt="Imagem sobre">
    </div>
    <div class="w-2/4 p-4 sm:pl-24">
      <h1 class="text-2xl xl:text-3xl text-violet uppercase font-semibold mb-4">A feira</h1>
      <p class="text-xs xl:text-sm">A Movinter é a maior feira do setor moveleiro do interior paulista, reunindo em um só espaço, as maiores marcas de todo o Brasil.<br>
      A edição passada foi mais um evento de grande sucesso, uma oportunidade para grandes negócios e divulgar tendências e inovações. </p>
      <span class="h-[3px] bg-violet w-full my-8 block"></span>
      <div class="grid grid-cols-3 gap-8 text-center">
        <div class="border 2xl:border-2 border-blue rounded-3xl p-5">
          <img class="h-[60px] block m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-1.png" alt="icone">
          <span class="text-blue text-sm font-semibold mt-3 block">4 mil pessoas presentes</span>
        </div>
        <div class="border 2xl:border-2 border-blue rounded-3xl p-5">
          <img class="h-[60px] block m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-2.png" alt="icone">
          <span class="text-blue text-sm font-semibold mt-3 block">Importadores de 6 países </span>
        </div>
        <div class="border 2xl:border-2 border-blue rounded-3xl p-5">
          <img class="h-[60px] block m-auto" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-3.png" alt="icone">
          <span class="text-blue text-sm font-semibold mt-3 block">R$32 milhões em negócios fechados</span>
        </div>
      </div>
      <div class="mt-10 flex">
        <button class="uppercase w-[200px] py-2 bg-violet text-white rounded-2xl">Seja um expositor</button>
        <button class="uppercase w-[200px] py-2 border border-violet text-violet rounded-2xl xl:ml-3">Visite a feira</button>
      </div>
    </div>
  </div>
</section>

<section class="container text-center pt-16 pb-8">
  <h1 class="text-2xl xl:text-3xl text-violet uppercase font-semibold mb-8 block">Conheça os expositores já confirmados para 2023</h1>

  <div id="expositores" class="owl-carousel owl-theme">
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

<section class="relative h-8 truncate mb-5 block">
  <div class="absolute top-0 -left-10 w-[calc(100%+100px)]">
    <span class="text-blue uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-violet uppercase text-xl lett tracking-[1rem]">Movinter23</span>
    <span class="text-blue uppercase text-xl lett tracking-[1rem]">Movinter23</span>
  </div>
</section>

<?php

  get_template_part('./template-parts/form', 'form');