<?php /* Template Name: [Template] Sobre */ get_header();

the_post_thumbnail('post-thumbnail', ['class' => 'class="mt-[110px]"']);

?>

<section class="container pt-10 pb-4">
  <?php
  
    the_field('descricao_sobre');
  
    if(get_field('imagem_sobre')) :

      ?>
      <img class="py-6" src="<?php the_field('imagem_sobre'); ?>" alt="Imagem sobre a Movinter">
      <?php
      
    endif;

  ?>  
</section>

<?php

get_template_part('./template-parts/form', 'form');

get_footer();