<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            clifford: '#da373d',
          }
        }
      }
    }
  </script>
  <?php wp_head();?>
</head>
<body>
<header class="l-Header">
  <nav class="p-Header__Container">
    <div class="c-Header__logo">
      <a href="<?php home_url();?>">Ckisai</a>
    </div>
    <?php
    if (has_nav_menu('header-navigation')) {
      wp_nav_menu(
        array(
          "container" => false,
          'menu_class' => 'p-Header__MenuWrapper',
          'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        )
      );
    } ?>
  </nav>
</header>
