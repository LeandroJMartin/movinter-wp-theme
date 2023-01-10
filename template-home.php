<section class="mt-[110px]">

  <?php

  $data = get_content('banner_home', '-1');
  $args = array( 'data' => $data );
  get_template_part('./template-parts/slide', 'banner-home', $args);

  ?>

</section>