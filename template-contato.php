<?php /* Template Name: [Template] Contato */ get_header(); ?>

<div class="mt-[135px] sm:mt-[110px]">
  <?php the_post_thumbnail('post-thumbnail');  ?>  
</div>

<section class="bg-gradient-to-r from-blue to-violet pt-16 pb-10">
  <div class="container text-center">
    <h1 class="text-2xl xl:text-3xl text-white uppercase font-semibold mb-8 block mx-4">Fale com a nossa equipe</h1>
    <div class="block mx-auto xl:w-1/2">
      <?php echo do_shortcode('[contact-form-7 id="55" title="Contato"]'); ?>
    </div>
  </div>  
</section>

<?php

get_footer();
