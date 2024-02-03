<?php
$args = array(
    'post_type' => 'works'
);
$the_query = new WP_Query( $args );


?>
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
  <section class="bg-white dark:bg-gray-900 mt-10">
      <div class="container px-6 py-10 mx-auto">
          <h1 class="c-sec-Title font-semibold text-center text-gray-800 capitalize dark:text-white">
            実績一覧
          </h1>
          <p class="mt-4 text-center c-sec-Txt">
              今までのサイト制作実績をご確認いただき、もしご興味がございましたらご連絡ください。
          </p>

          <?php while($the_query->have_posts()): $the_query->the_post(); ?>
          <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>
                <div class="overflow-hidden bg-cover rounded-lg cursor-pointer h-96 group"
                    style="background-image:url('<?php echo $url ;?>');">
                    <div
                        class="flex flex-col justify-center w-full h-full px-8 py-4 transition-opacity duration-700 opacity-0 backdrop-blur-sm bg-gray-800/60 group-hover:opacity-100">
                        <h2 class="mt-4 text-xl font-semibold text-white capitalize"><?php the_title();?></h2>
                        <p class="mt-4 c-sec-Txt text-white dark:text-white">
                        <?php the_taxonomies(array(
                        'before' => '',
                        'sep' => '｜',
                        'after' => '',
                        'template' => '%2$l',
                        'term_template' => '%2$s',));?>
                        </p>

                        <a  href="<?php the_permalink();?>"class="mt-2 text-lg tracking-wider text-blue-400 uppercase ">VIEW DETAILS</a>
                    </div>
                </div>
          </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
          <div class="flex">
            <?php echo placetech_pagination(); // ページング ?>
          </div>
      </div>
  </section>
  <?php echo get_template_part('sections/sec-recruit-banner');?>
  <?php echo get_template_part('sections/sec-contact');?>
</main>
