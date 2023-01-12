<?php /* Template Name: [Template] Expositores */ get_header();

the_post_thumbnail('post-thumbnail', ['class' => 'class="mt-[110px]"']);

?>

<section class="container py-12 text-center">
  <h1 class="mb-12 text-2xl 2xl:text-3xl text-violet uppercase font-semibold block">Conheça os expositores já confirmados para 2023</h1>
  <div class="grid grid-cols-6 gap-6">
    <?php
    
    $expositores = get_content('expositores');

    while ( $expositores->have_posts() ) :
      $expositores->the_post();

      ?>

      <a href="<?php the_field('ex_link') ?>">
        <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
      </a>
      <a href="<?php the_field('ex_link') ?>">
        <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
      </a>
      <a href="<?php the_field('ex_link') ?>">
        <img src="<?php the_field('ex_imagem') ?>" alt="Image slide Movinter">
      </a>
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