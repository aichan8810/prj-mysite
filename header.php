<?php $desc = get_bloginfo('description', 'display'); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_bloginfo('name', 'display'); ?></title>
  <meta name="description" content="<?php echo $desc; ?>">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/img/favicon.ico" type="image/x-icon">
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
      <a href="<?php home_url();?>"><img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="c-sec-Img"></a>
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
