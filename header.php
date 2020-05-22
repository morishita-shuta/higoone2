<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" href="<?php  echo get_template_directory_uri(); ?>/css/page.css">
  <title><?php bloginfo('name'); ?></title>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <div class="header__info">
        <div class="inner">
          <h1 class="logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
              <img src="<?php  echo get_template_directory_uri(); ?>/img/logo.png" alt="">
            </a>
          </h1>
          <div class="header-contact">
            <p class="header-contact-text">受付時間 平日10:00〜18:00<br>お気軽にお問い合わせください。</p>
            <a href='tel:0120-914-326' class="header-contact-tel">0120-914-326</a>
          </div>
        </div>
      </div>
<?php wp_head(); ?>
