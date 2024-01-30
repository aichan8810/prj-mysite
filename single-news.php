<?php echo get_header() ?>
<main>
  <section class="l-MainVisual l-sec-MainVisual">
      <h2 class="c-sec-Title p-sec-CommonPageName">
      NEWS
      </h2>
      <span class="c-sec-SubTitle p-sec-CommonPageSubName">
      お知らせ
      </span>
  </section>
  <section class="l-NewsContainer">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <!-- <p><?php the_content(); ?></p> -->
      <h1 class="c-NewsTitle">
        <?php the_title();?>
      </h1>
      <div class="p-NewsInfo">
        <span class="c-NewsDate"><?php the_date();?></span>
        <p class="c-NewsCat"><?php the_category();?></p>
      </div>
      <div class="p-NewsThumbnailWrapper">
        <?php if (has_post_thumbnail()) : /* もしアイキャッチが登録されていたら */ ?>
          <?php the_post_thumbnail(); ?>
        <?php else: /* 登録されていなかったら */ ?>
          <img src="https://placehold.jp/750x400.png" alt="thumbnail" class="c-sec-Img">
        <?php endif; ?>

      </div>
      <div class="p-NewsContent">
        <?php the_content();?>
      </div>
      <div class="p-News__NavBtnWrapper">
          <div class="p-News__Prev">
            <?php previous_post_link(); ?>
          </div>
          <span class="c-Line"></span>
          <div class="p-News__Next">
            <?php next_post_link(); ?>
          </div>
      </div>
      <a href="<?php site_url();?>/news" class="c-News__toIndex">NEWS一覧</a>
    <?php endwhile; else : ?>
    <?php endif; ?>
  </section>
  <?php echo get_template_part('sections/sec-recruit-banner');?>
  <?php echo get_template_part('sections/sec-contact');?>

</main>
<?php get_footer() ?>
