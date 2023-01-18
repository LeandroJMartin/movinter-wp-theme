<?php /* Template Name: [Template] Expositores */ get_header(); ?>

<div class="mt-[135px] sm:mt-[110px]">
  <?php the_post_thumbnail('post-thumbnail'); ?>
</div>

<section class="container py-12 text-center px-4">
  <h1 class="mb-12 text-xl 2xl:text-3xl text-violet uppercase font-semibold block">Conheça os expositores já confirmados para 2023</h1>
  <div class="grid grid-cols-2 sm:grid-cols-4 xl:grid-cols-6 gap-4 xl:gap-6">
    <?php
    
    $expositores = get_content('expositores');

    while ( $expositores->have_posts() ) :
      $expositores->the_post();

      ?>

      <a href="<?php the_field('ex_link') ?>">
        <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
      </a>
    
    <?php

    endwhile;
    wp_reset_postdata();

    ?>
  </div>
</section>

<?php

get_template_part('./template-parts/form', 'form');

get_footer();