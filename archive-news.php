<?php echo get_header();?>

<main>
  <section class="l-MainVisual l-sec-MainVisual">
      <h2 class="c-sec-Title p-sec-CommonPageName">
      NEWS
      </h2>
      <span class="c-sec-SubTitle p-sec-CommonPageSubName">
      お知らせ
      </span>
  </section>

  <section class="l-NewsArchive">
  <?php while(have_posts()): the_post(); ?>
    <div class="p-NewsArchive__ItemWrapper">
      <a href="<?php the_permalink();?>">
        <span class="c-NewsArchive__Date div1"><?php echo the_time('Y/m/d');?></span>
        <p class="c-NewsArchive__Category div2"><?php echo the_category();?></p>
        <p class="c-NewsArchive__Title div3"> <?php echo the_title();?></p>
      </a>
    </div>
    <?php endwhile; ?>
    <?php echo placetech_pagination(); // ページング ?>
  </section>
  <?php echo get_template_part('sections/sec-recruit-banner');?>
  <?php echo get_template_part('sections/sec-contact');?>

</main>
