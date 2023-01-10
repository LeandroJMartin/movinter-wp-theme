<!doctype html>
<html <?php language_attributes(); ?>>

<head>

  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
  <meta name="description" content="<?php bloginfo( 'name' ); ?>">
  <meta name="robots" content="index, follow" />
  <meta name="author" content="Maya Comunicação">
  <meta name="msapplication-TileColor" content="#2b5797">
  <meta name="theme-color" content="#013E7F">
  <title><?php the_title(); ?></title>

  <!-- Facebook -->
  <meta property="og:locale" content="pt-BR" />
  <meta property="og:title" content="<?php bloginfo( 'name' ); ?>" />
  <meta property="og:description" content="<?php bloginfo( 'description' ); ?>" />
  <meta property="og:url" content="<?php echo get_site_url(); ?>" />
  <meta property="og:site_name" content="<?php echo cts_add_theme_slug(); ?>" />
  <meta property="og:type" content="website">
  <meta property="og:image" content="assets/img/logo-do-tema.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="300">
  <meta property="og:image:height" content="160">

  <!-- IOS -->
  <meta name="mobile-web-app-capable" content="yes"/>
  <meta name="apple-mobile-web-app-title" content="Maya Comunicação"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="default"/>

  <link rel="shortcut icon" href="<?php echo get_template_directory_uri()?>/assets/img/favicon.ico" type="image/x-icon"/>

  <!-- Google -->
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel='dns-prefetch' href='//maps.googleapis.com' /> 
  <link rel='dns-prefetch' href='//fonts.googleapis.com' />

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/output.css">

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

  <header>
    <div class="py-9 container flex justify-between text-gray w-full">
      <a href="<?php echo get_home_url(); ?>">
        <img class="max-w-[180px] lg:max-w-[250px] 2xl:max-w-xs" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Logo Movinter">
      </a>
      <div class="flex items-center px-7">
        <span class="uppercase text-xs italic">Patrocinadores</span>
        <img class="max-w-[80px] lg:max-w-[100px] 2xl:max-w-[150px] mx-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/patrocinio/01.png" alt="Logo Sayerlack">
        <img class="max-w-[80px] lg:max-w-[100px] 2xl:max-w-[150px]" src="<?php echo get_template_directory_uri(); ?>/assets/img/patrocinio/02.png" alt="Logo Arauco">
      </div>
      <nav class="navbar">
        <?php
          wp_nav_menu(
            array(
              'menu'            => 'Menu Principal',
              'container_class' => 'menu-nav',
              'menu_class'      => 'item-menu'
          ));
        ?>
      </nav>
      <div class="flex items-center">
        <a href="https://facebook.com">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 382 382" class="w-4" xml:space="preserve"><path fill="#003460" d="M326.1,6H55.9C28.3,6,6,28.3,6,55.9v270.3C6,353.7,28.3,376,55.9,376h133.3l0.2-132.2H155 c-4.5,0-8.1-3.6-8.1-8.1l-0.2-42.6c0-4.5,3.6-8.1,8.1-8.1h34.3v-41.2C189.2,96,218.3,70,261,70h35c4.5,0,8.1,3.6,8.1,8.1V114 c0,4.5-3.6,8.1-8.1,8.1l-21.5,0c-23.2,0-27.7,11-27.7,27.2V185h50.9c4.9,0,8.6,4.2,8,9.1l-5.1,42.6c-0.5,4.1-3.9,7.2-8,7.2h-45.7 L246.8,376h79.3c27.5,0,49.9-22.3,49.9-49.9V55.9C376,28.3,353.7,6,326.1,6z"/></svg>
        </a>
        <a href="https://instagram.com" class="pl-2">
          <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="defaultColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
        </a>
      </div>
    </div>
  </header>
