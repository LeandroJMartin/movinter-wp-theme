<?php /* Template Name: [Template] Notícia */ get_header(); ?>

  <section class="container py-12 mt-[110px]">
    <div class="max-h-[400px] w-full flex flex-col sm:flex-row items-stretch">
      <div class="w-[100%] sm:w-[30%] bg-gradient-to-r from-blue to-violet px-6 py-6 flex items-start justify-center flex-col order-2 sm:order-1">
        <?php the_title('<p class="text-white text-2xl font-semibold mb-4 block">', '</p>'); ?>
      </div>
      <div class="w-[100%] sm:w-[70%] h-[400px] overflow-hidden order-1 sm:order-2">
        <?php the_post_thumbnail('post-thumbnail'); ?>
      </div>
    </div>

    <div class="mt-8 mx-4 xl:mx-0 blog-content">
      <?php the_content(); ?>
    </div>
  </section>

  <?php

get_footer();