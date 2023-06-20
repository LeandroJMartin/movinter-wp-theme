<?php

function check_amount($amount, $quantit)
{

  if ($amount['amount'] > $quantit) :

    return '<button data-type="' . $amount['type'] . '" class="text-zinc-400 inline-block ml-4 open_modal hover:underline" data-type="patrocinio">Ver todos</button>';

  endif;
}

function loop_images($type_post)
{

  foreach ($type_post['images'] as $img) :

    echo '<img class="w-full h-auto" src="' . $img . '" alt="Logo">';

  endforeach;
}

?>

<footer class="px-4 border-t-[1px] border-t-blue/20">
  <div class="container pt-7">
    <div class="grid grid-cols-1 lg:grid-cols-2">
      <div class="">
        <p class="uppercase text-blue">
          <?php

          _e('Patrocínio');

          $quantit_patrocinio = 3;

          echo check_amount(get_imgs('imagens_pat', $quantit_patrocinio), $quantit_patrocinio);

          ?>
        </p>
        <div class="grid grid-cols-2 sm:grid-cols-3 gap-6 items-center mt-4">
          <?php

          echo loop_images(get_imgs('imagens_pat', $quantit_patrocinio));

          ?>
        </div>
      </div>
      <?php

      $quantit_apoio = 4;
      $get_quantit = get_imgs('imagens_apoio', $quantit_apoio);

      $quantit = $get_quantit['amount'] < $quantit_apoio ? $get_quantit['amount'] : $quantit_apoio;

      ?>
      <div class="justify-end mt-8 lg:mt-0">
        <p class="uppercase text-blue">
          <?php

          _e('Apoio');


          echo check_amount(get_imgs('imagens_apoio', $quantit_apoio), $quantit_apoio);

          ?>
        </p>
        <div class="grid grid-adjust-cols-mobi grid-adjust-cols-<?php echo $quantit; ?> gap-6 items-center mt-4 relative">
          <?php

          echo loop_images(get_imgs('imagens_apoio', $quantit_apoio), $quantit_apoio);

          ?>
        </div>
      </div>
    </div>
    <div class="lg:flex py-4 justify-center border-t-[1px] border-zinc-200 mt-7">
      <p class="text-xs">® <?php bloginfo('name');
                            _e(' Todos os direitos reservados.', cts_add_theme_slug()); ?></p>
      <div class="flex lg:mt-0">
        <p class="text-xs">&nbsp<?php _e('Desenvolvido por', cts_add_theme_slug()); ?> &nbsp</p>
        <a href="https://mayacomunicacao.com.br" target="_blank" title="Maya Comunicação">
          <img alt="Maya Comunicação" class="w-5" src="<?php echo get_template_directory_uri() ?>/assets/img/logo-maya.svg">
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
<script>
  $(".formcnpj").mask("00.000.000/0000-00");
  $(".formcpf").mask("000.000.000-00");
</script>
</body>

</html>