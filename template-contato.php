<?php /* Template Name: [Template] Contato */ 

get_header();
the_post_thumbnail('post-thumbnail', ['class' => 'class="mt-[110px]"']);

?>

<section class="bg-gradient-to-r from-blue to-violet pt-16 pb-10">
  <div class="container text-center">
    <h1 class="text-2xl xl:text-3xl text-white uppercase font-semibold mb-8 block">Fale com a nossa equipe</h1>
    <div class="block mx-auto xl:w-1/2">
      <?php echo do_shortcode('[contact-form-7 id="55" title="Contato"]'); ?>
    </div>
  </div>  
</section>

<?php

get_footer();
