<footer>
  <div class="container">
    <div class="">
      <!-- Something -->
    </div>
    <div class="bg-slate-500 flex">
      <p>® <?php bloginfo( 'name' ); echo ' '.date('Y').' | '; _e(' Todos os direitos reservados.', cts_add_theme_slug()); ?></p>
      <p>&nbsp<?php _e('Desenvolvido por', cts_add_theme_slug()); ?> &nbsp</p>
      <a href="https://mayacomunicacao.com.br" target="_blank" title="Maya Comunicação">
          <img alt="Maya Comunicação" class="w-5" src="<?php echo get_template_directory_uri()?>/assets/img/logo-maya.svg">
      </a>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
