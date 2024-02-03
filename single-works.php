<?php get_header() ?>
<main class="l-main">
  <section class="l-MainVisual l-sec-MainVisual">
      <h2 class="c-sec-Title p-sec-CommonPageName">
      WORKS
      </h2>
      <span class="c-sec-SubTitle p-sec-CommonPageSubName">
      実績一覧
      </span>
  </section>

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <section class="p-WorksContent">
      <?php the_content(); ?>
    </section>
  <?php endwhile; else : ?>
  <?php endif; ?>
  <a href="<?php home_url();?>/works" class="c-Btn">View All</a>

</main>
<?php get_footer() ?>
