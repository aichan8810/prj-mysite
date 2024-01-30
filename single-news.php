<?php get_header() ?>
<main class="l-main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p><?php the_content(); ?></p>
  <?php endwhile; else : ?>
  <?php endif; ?>
</main>
<?php get_footer() ?>
