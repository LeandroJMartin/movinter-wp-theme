<footer class="px-4 border-t-[1px] border-t-blue/20">
  <div class="container pt-7">
    <div class="block lg:flex">
      <div class="w-2/3">
        <p class="uppercase text-blue">Patrocínio</p>
        <div class="flex items-center">
          <img class="max-w-[100px] lg:max-w-[200px] 2xl:max-w-[250px]" src="<?php echo get_template_directory_uri(); ?>/assets/img/patrocinio/01.png" alt="Logo Sayerlack">
          <img class="max-w-[100px] lg:max-w-[200px] 2xl:max-w-[250px] ml-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/patrocinio/02.png" alt="Logo Arauco">
        </div>
      </div>
      <div class="w-1/3 justify-end lg:flex mt-8 lg:mt-0">
        <p class="uppercase text-blue">Apoio</p>
        <div class="flex items-center w-full">
          <img class="max-w-[70px] lg:max-w-[150px] 2xl:max-w-[250px]" src="<?php echo get_template_directory_uri(); ?>/assets/img/apoio/01.png" alt="Logo Poty">
          <img class="max-w-[70px] lg:max-w-[150px] 2xl:max-w-[250px] ml-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/apoio/02.png" alt="Logo Senai">
          <img class="max-w-[70px] lg:max-w-[150px] 2xl:max-w-[250px] ml-4" src="<?php echo get_template_directory_uri(); ?>/assets/img/apoio/03.png" alt="Logo Scavaseg">
        </div>
      </div>
    </div>
    <div class="lg:flex py-4 justify-center border-t-[1px] border-stone-300 mt-7">
      <p class="text-xs">® <?php bloginfo( 'name' ); echo ' '.date('Y').' | '; _e(' Todos os direitos reservados.', cts_add_theme_slug()); ?></p>
      <div class="flex mt-4 lg:mt-0">
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
