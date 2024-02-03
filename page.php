<?php get_header() ?>
<main class="l-main">
<section class="l-MainVisual l-sec-MainVisual">
      <h2 class="c-sec-Title p-sec-CommonPageName">
      NEWS
      </h2>
      <span class="c-sec-SubTitle p-sec-CommonPageSubName">
      お知らせ
      </span>
  </section>


  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p><?php the_content(); ?></p>
  <?php endwhile; else : ?>
  <?php endif; ?>
</main>
<?php get_footer() ?>
