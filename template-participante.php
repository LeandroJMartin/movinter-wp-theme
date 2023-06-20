<?php /* Template Name: [Template] Participante */ get_header();

if (isset($_GET['id'])) :

  include $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/theme-maya/inc/api-connect.php';
  $user = GetUserQR(htmlspecialchars($_GET['id']));

  if ($user) :

?>
    <div class="mt-[110px] w-full relative">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/topo-participante.jpg" alt="Imagem Movinter">
      <div class="absolute top-0 left-0 w-full h-full">
        <div class="container flex flex-col justify-center h-full text-white">
          <h1 class="text-6xl">Olá,</h1>
          <p class="text-xl"><?php echo $user['razao_social']; ?></p>
        </div>
      </div>
    </div>
    <section class="container py-12 px-4 2xl:px-0">
      <div>
        <h2 class="text-xl">Bem-vindo a maior feira de móveis do interior paulista!</h2>
        <p>Estamos muito animados por você estar aqui conosco e esperamos que você tenha uma experiência incrível.</p>

        <ul class="my-4">
          <li>
            <h3 class="font-bold text-lg mb-3">Segue seus dados</h3>
          </li>
          <li><b>Razão Social:</b> <?php echo $user['razao_social']; ?></li>
          <li><b>Eu Sou:</b> <?php echo $user['voce_cred']; ?></li>
          <li><b>CNPJ:</b> <?php echo $user['cnpj_cred']; ?></li>
          <li><b>CPF:</b> <?php echo $user['cpf']; ?></li>
          <li><b>Telefone:</b> <?php echo $user['fone']; ?></li>
          <li><b>Cidade:</b> <?php echo $user['cidade']; ?></li>
          <li><b>E-mail:</b> <?php echo $user['email']; ?></li>
        </ul>

        <p class="block mt-8">Esperamos que você aproveite cada momento que passar aqui e que saia com muitas ideias interessantes e novas conexões!</p>
        <p class="block mt-4">
          Atenciosamente,<br>
          Equipe Movinter 2023.
        </p>
      </div>
    </section>

  <?php

  else :

  ?>
    <div class="container py-10 w-full my-6 min-h-[250px] text-center mt-[110px]">
      <p class="uppercase text-lg">Participante não encontrado.</p>
      <a href="<?php echo get_home_url(); ?>" class="bg-zinc-600 text-white py-2 px-6 rounded-sm inline-block mt-2">
        <?php _e('Voltar a Home', cts_add_theme_slug()); ?>
      </a>
    </div>
<?php

  endif;
else :
  echo '<script>
  window.location.href = "' . get_home_url() . '";
  </script>';
endif;


get_footer();
