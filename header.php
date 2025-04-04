<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset=" UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- サイトのアイコンを設定します -->
  <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
  <!-- 検索で出てこないようにする -->
  <meta name="robots" content="noindex" />
  

  <!-- サイトのタイトルを記述します -->
  <title>NATURAL KITCHEN</title>
  <!-- サイトの概要を記述します -->
  <meta name="description" content="natural kitchenのホームページです。" />
  <!-- Google Fontsを読み込むための記述です -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Averia+Serif+Libre:wght@300&display=swap" rel="stylesheet">

  <!-- スタイルシートの読み込みのための記述です -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ress.css" <?php echo get_template_directory_uri(); ?>/>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
  
  <!-- slick -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css" />
   <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header">
    <div class="header-inner">
      <h1 class="logo"><a href="<?php echo home_url(); ?>">NATURAL KITCHEN</a></h1>
      <!-- ハンバーガーメニュー -->
      <div class="header-menu">
        <!-- メニュー -->
        <nav class="header_nav" id="js-nav">
          <ul>
            <li><a class="header-nav-item" href="<?php echo home_url(); ?>">TOP</a></li>
            <li><a class="header-nav-item" href="<?php echo home_url('/menu'); ?>">Menu</a></li>
            <li><a class="header-nav-item" href="<?php echo home_url('/blog'); ?>">Blog</a></li>
            <li><a class="header-nav-item" href="<?php echo home_url('/healthyfood'); ?>">Healthy Food</a></li>
            <li><a class="header-nav-item" href="<?php echo home_url('/about'); ?>">About</a></li>
            <li><a class="header-nav-item" href="<?php echo home_url('/recruit'); ?>">Recruit</a></li>
            <li class="header-sns">
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-facebook.png" alt="facebook" class="header-icon"></a>
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-instagram.png" alt="Instagram" class="header-icon"></a>
              <a><img src="<?php echo get_template_directory_uri(); ?>/img/ico-twitter.png" alt="Twitter" class="header-icon"></a>
            </li>
            <li><button class="header-contact slide-btn" href="<?php echo home_url('/contact'); ?>"><span>CONTACT</span></button></li>
          </ul>
        </nav>
        <!-- ボタン -->
        <button class="header-hum hum-color" id="js-hamburger" >
          <span></span>
          <span></span>
        </button>
      </div>
    </div>
  </header>

  