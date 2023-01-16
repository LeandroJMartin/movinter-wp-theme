<?php

$primarias = array_slice(get_field('imagens_pat', 2), 0, 2);
$restantes = array_slice(get_field('imagens_pat', 2), 2);

$apoio_visiveis = array_slice(get_field('imagens_apoio', 2), 0, 3);
$apoio_restante = array_slice(get_field('imagens_apoio', 2), 3);

?>

<footer class="px-4 border-t-[1px] border-t-blue/20">
  <div class="container pt-7">
    <div class="block lg:flex">
      <div class="w-2/3">
        <p class="uppercase text-blue">
          <?php 
          
            _e('Patrocínio');
            
            if($restantes) :
              
              ?>
              <button class="text-zinc-400 inline-block ml-4 open_logos" data-type="patrocinio">Ver todos</button>
              <?php

            endif;

          ?>
        </p>
        <div class="flex items-center mt-4 ">

          <?php

          foreach($primarias as $img) :

            ?>
            <img class="max-w-[100px] lg:max-w-[200px] 2xl:max-w-[250px] mr-0 sm:mr-3" src="<?php echo $img; ?>" alt="Logo Sayerlack">
            <?php

          endforeach;

          if($restantes) :

          ?>          
          <div class="patrocinio absolute bottom-0 left-0 z-20 hidden">
            <div class="grid grid-cols-4 gap-4 px-4 py-4 bg-white rounded">
              <?php

                foreach($restantes as $img) :

                  ?>
                  <img class="max-w-[90px] lg:max-w-[150px] 2xl:max-w-[200px]" src="<?php echo $img; ?>" alt="Logo Sayerlack">
                  <?php
                  
                endforeach;

              ?>
            </div>
          </div>
          <?php

            endif;

          ?>
        </div>
      </div>
      <div class="w-1/3 justify-end lg:flex flex-col mt-8 lg:mt-0">
        <p class="uppercase text-blue">
          <?php
          
            _e('Apoio');

            if($apoio_restante) :
            
              ?>
              <button class="text-zinc-400 inline-block ml-4 open_logos" data-type="apoio">Ver todos</button>
              <?php
  
            endif;
          ?>
        </p>
        <div class="flex items-center w-full mt-4 relative">
          <?php

            foreach($apoio_visiveis as $img) :
              
              ?>
              <img class="max-w-[70px] lg:max-w-[150px] 2xl:max-w-[250px] ml-4" src="<?php echo $img; ?>" alt="Logo Poty">
              <?php

            endforeach;

            if($apoio_restante) :

              ?>
              <div class="apoio absolute bottom-0 right-0 z-20 hidden">
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 px-4 py-4 bg-white rounded">
                  <?php

                  foreach($apoio_restante as $img) :

                    ?>
                    <img class="max-w-[90px] lg:max-w-[150px] 2xl:max-w-[200px]" src="<?php echo $img; ?>" alt="Logo Sayerlack">
                    <?php
                    
                  endforeach;

                  ?>
                </div>
              </div>
              <?php

            endif;
            
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

<?php wp_footer(); ?>

</body>
</html>
