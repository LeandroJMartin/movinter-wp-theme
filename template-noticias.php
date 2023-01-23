<?php /* Template Name: [Template] Notícias */ get_header();

$query = get_content('post', '');
$get_the_lest_post = $query->posts[0];

  ?>

  <section class="container py-12 mt-[110px] px-4 2xl:px-0">
    <a href="<?php the_permalink($get_the_lest_post->ID); ?>" class="max-h-[400px] w-full flex-col sm:flex-row flex items-stretch">
      <div class="w-[100%] sm:w-[30%] bg-gradient-to-r from-blue to-violet px-6 py-6 flex items-start justify-center flex-col order-2 sm:order-1">
        <p class="text-white text-xl font-semibold mb-4 block"><?php echo $get_the_lest_post->post_title; ?></p>
        <span class="italic underline text-white"><?php _e('Saiba mais'); ?></span>
      </div>
      <div class="w-[100%] sm:w-[70%] h-[400px] overflow-hidden order-1 sm:order-2">
        <?php echo get_the_post_thumbnail( $get_the_lest_post->ID, 'large', array( 'class' => 'object-cover h-full w-full object-center' )); ?>
      </div>
    </a>

    <div class="grid gap-4 sm:gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 mt-6 px-4 xl:px-0">

    <?php

    while ( $query->have_posts() ) :
      $query->the_post();

      ?>

      <a href="<?php the_permalink(); ?>" class="h-[450px] w-full block">
        <div class="w-full h-[250px] overflow-hidden">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'object-cover h-full w-full object-center']); ?>
        </div>
        <div class="w-full h-[200px] bg-gradient-to-r from-blue to-violet px-6 py-6">
          <p class="text-white text-sm font-semibold mb-4 block"><?php the_title(); ?></p>
          <span class="italic underline text-white"><?php _e('Saiba mais'); ?></span>
        </div>
      </a>
      <?php

    endwhile;
    wp_reset_postdata();

    ?>

    </div>
  </section>

  <?php

get_footer();
