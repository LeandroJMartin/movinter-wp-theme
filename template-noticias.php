<?php /* Template Name: [Template] Notícias */ get_header(); ?>

<section class="container py-12 mt-[110px]">
  <a href="<?php the_permalink(); ?>" class="max-h-[400px] w-full flex-col sm:flex-row flex items-stretch">
    <div class="w-[100%] sm:w-[30%] bg-gradient-to-r from-blue to-violet px-6 py-6 flex items-start justify-center flex-col order-2 sm:order-1">
      <p class="text-white text-xl font-semibold mb-4 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
      <span class="italic underline text-white">Saiba mais</span>
    </div>
    <div class="w-[100%] sm:w-[70%] h-[400px] overflow-hidden order-1 sm:order-2">      
      <img class="object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="Notícia">
    </div>
  </a>

  <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-6 px-4 xl:px-0">
    <a href="<?php the_permalink(); ?>" class="max-h-[450px] w-full">
      <div class="w-full h-[250px] overflow-hidden">
        <img class="object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="Notícia">
      </div>
      <div class="w-full bg-gradient-to-r from-blue to-violet px-6 py-6">
        <p class="text-white text-sm font-semibold mb-4 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        <span class="italic underline text-white">Saiba mais</span>
      </div>      
    </a>

    <a href="<?php the_permalink(); ?>" class="max-h-[450px] w-full">
      <div class="w-full h-[250px] overflow-hidden">
        <img class="object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="Notícia">
      </div>
      <div class="w-full bg-gradient-to-r from-blue to-violet px-6 py-6">
        <p class="text-white text-sm font-semibold mb-4 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        <span class="italic underline text-white">Saiba mais</span>
      </div>      
    </a>
    <a href="<?php the_permalink(); ?>" class="max-h-[450px] w-full">
      <div class="w-full h-[250px] overflow-hidden">
        <img class="object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="Notícia">
      </div>
      <div class="w-full bg-gradient-to-r from-blue to-violet px-6 py-6">
        <p class="text-white text-sm font-semibold mb-4 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        <span class="italic underline text-white">Saiba mais</span>
      </div>      
    </a>
    <a href="<?php the_permalink(); ?>" class="max-h-[450px] w-full">
      <div class="w-full h-[250px] overflow-hidden">
        <img class="object-cover h-full w-full" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.jpg" alt="Notícia">
      </div>
      <div class="w-full bg-gradient-to-r from-blue to-violet px-6 py-6">
        <p class="text-white text-sm font-semibold mb-4 block">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        <span class="italic underline text-white">Saiba mais</span>
      </div>      
    </a>

  </div>

</section>

<?php

get_footer();