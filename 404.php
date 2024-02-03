<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php wp_head();?>
</head>
<body>
<header class="l-Header mod-404">
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
<main>
  <h1 class="c-sec-Title">404 Not Found</h1>
  <p class="c-sec-Txt">
    お問い合わせいただきありがとうございました。<br>お問い合わせを受け付けました。
  </p>
  <p class="c-sec-Txt">
  折り返し、担当者よりご連絡いたしますので、<br>恐れ入りますが、しばらくお待ちください。
  </p>
  <p class="c-sec-Txt">
    なお、ご入力いただいたメールアドレス宛に受付完了メールを配信しております。<br>完了メールが届かない場合、処理が正常に行われていない可能性があります。<br>大変お手数ですが、再度お問い合わせの手続きをお願い致します。
  </p>
  <a href="<?php home_url();?>" class="c-Btn">View TOP</a>
</main>

<?php echo get_footer();?>

<style>
  .mod-404{
    position: static;
    background: #21054D;
  }
  main{
    margin: 10rem auto;
    display: flex;
    flex-direction: column;
    gap: 30px;
    justify-content: center;
    align-items: center;
    max-width: 1380px;
    width: 95.833vw;
    text-align: center;
  }
</style>
