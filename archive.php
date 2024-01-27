<?php echo get_header();?>

<main>
  <section class="l-NewsArchive">
  <?php while(have_posts()): the_post(); ?>
    <div class="p-NewsArchive__ItemWrapper">
        <span class="c-NewsArchive__Date"><?php echo the_date();?></span>
        <p class="c-NewsArchive__Category"><?php echo the_category();?></p>
        <a href="<?php the_permalink();?>" class="c-NewsArchive__Title"><?php echo the_title();?></a>
    </div>
    <?php endwhile; ?>
    <?php echo placetech_pagination(); // ページング ?>
  </section>
  <?php echo get_template_part('sections/sec-recruit-banner');?>
  <?php echo get_template_part('sections/sec-contact');?>

</main>
