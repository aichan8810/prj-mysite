<?php get_header() ?>
<main class="l-main">
  <?php echo get_template_part('sections/sec-breadcrumbs');?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p><?php the_content(); ?></p>
  <?php endwhile; else : ?>
  <?php endif; ?>
</main>
<?php get_footer() ?>
