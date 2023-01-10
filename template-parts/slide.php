<div id="slide" class="owl-carousel owl-theme">

  <?php

  $data = $args['data'];

  while ( $data->have_posts() ) :
    $data->the_post();

    the_field('link');

    ?>
    <div class="item">
      <a href="<?php// echo $item['link']; ?>">
        <img src="<?php //echo $item['imagem']; ?>" alt="Image slide Movinter">
        <?php
        
        // if ($item['imagem_mobile']) :
          
          ?>          
          <img src="<?php// echo $item['imagem_mobile']; ?>" alt="Image slide Movinter">
          <?php

        // endif;

        ?>
      </a>
    </div>
    <?php
    
  endwhile;
    
  ?>
</div>