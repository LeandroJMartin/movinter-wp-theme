<?php

function check_amount($amount){

  if($amount['amount'] > 3) :

    return '<button data-type="' . $amount['type'] . '" class="text-zinc-400 inline-block ml-4 open_modal hover:underline" data-type="patrocinio">Ver todos</button>';
  
  endif;

}

function loop_images($type_post){

  foreach($type_post['images'] as $img) :

    echo '<img class="max-w-[100px] lg:max-w-[200px] 2xl:max-w-[250px] mr-0 sm:mr-3" src="' . $img . '" alt="Logo">';
    
  endforeach;

}

?>

<footer class="px-4 border-t-[1px] border-t-blue/20">
  <div class="container pt-7">
    <div class="block lg:flex">
      <div class="w-2/3">
        <p class="uppercase text-blue">
          <?php

            _e('Patrocínio');

            echo check_amount(get_imgs('imagens_pat'));

          ?>
        </p>
        <div class="flex items-center mt-4">
          <?php

            echo loop_images(get_imgs('imagens_pat'));
            
          ?>
        </div>
      </div>
      <div class="w-1/3 justify-end lg:flex flex-col mt-8 lg:mt-0">
        <p class="uppercase text-blue">
          <?php

            _e('Apoio');

            echo check_amount(get_imgs('imagens_apoio'));

          ?>
        </p>
        <div class="flex items-center w-full mt-4 relative">
          <?php

            echo loop_images(get_imgs('imagens_apoio'));

          ?>
        </div>
      </div>
    </div>
    <div class="lg:flex py-4 justify-center border-t-[1px] border-zinc-200 mt-7">
      <p class="text-xs">® <?php bloginfo( 'name' ); _e(' Todos os direitos reservados.', cts_add_theme_slug()); ?></p>
      <div class="flex lg:mt-0">
        <p class="text-xs">&nbsp<?php _e('Desenvolvido por', cts_add_theme_slug()); ?> &nbsp</p>
        <a href="https://mayacomunicacao.com.br" target="_blank" title="Maya Comunicação">
          <img alt="Maya Comunicação" class="w-5" src="<?php echo get_template_directory_uri()?>/assets/img/logo-maya.svg">
        </a>
      </div>
    </div>
  </div>
</footer>

<div id="imagens_pat" class="modal fixed top-0 left-0 z-50 w-full h-screen bg-black/75 hidden px-4 py-4">
  <?php

  $args = array('args' => 'imagens_pat');
  get_template_part('template-parts/modal-brands', 'post-logos', $args);

  ?>
</div>

<div id="imagens_apoio" class="modal fixed top-0 left-0 z-50 w-full h-screen bg-black/75 hidden px-4 py-4">
  <?php

  $args = array('args' => 'imagens_apoio');
  get_template_part('template-parts/modal-brands', 'post-logos', $args);

  ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
