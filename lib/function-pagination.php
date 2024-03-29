<?php
/**
 * ページネーション系
 */

if(!function_exists('placetech_pagination')):
  /**
   * ページネーションのリンクを作成します。
   * @todo HTML直したい
   * @param  string  $pages 全ページ数
   * @param  integer $range 範囲
   * @return string
   * @example <?php echo placetech_pagination(); ?>
   */
  function placetech_pagination($pages='', $range=2) {
    //表示するページ数
    $showitems=($range*2)+1;
    //現在のページ値
    global $paged;
    //デフォルトのページ
    if(empty($paged)) $paged = 1;
    if($pages == '')
    {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      //全ページ数が空の場合は1とする
      if(!$pages)
      {
        $pages=1;
      }
    }
    //全ページが1でない場合はページネーションを表示する
    if(1 != $pages)
    {
      //Prev：現在のページ値が1より大きい場合は表示
      if($paged > 1) echo "<a class=\"flex items-center px-4 py-2 mx-1 text-gray-500 bg-white rounded-md cursor-not-allowed dark:bg-gray-800 dark:text-gray-600\" rel=\"prev\" href='".get_pagenum_link($paged - 1)."'>Previous</a>\n";
      for ($i=1; $i <= $pages; $i++)
      {
        if(1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems))
        {
          echo ($paged == $i)? "<a class=\"items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:flex dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200\" href='".get_pagenum_link($i)."'>".$i."</a>\n":"<a class=\"items-center hidden px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md sm:flex dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200\" href='".get_pagenum_link($i)."'>".$i."</a>\n";
        }
      }

      if ($paged < $pages) echo "<a class=\"flex items-center px-4 py-2 mx-1 text-gray-700 transition-colors duration-300 transform bg-white rounded-md dark:bg-gray-800 dark:text-gray-200 hover:bg-blue-600 dark:hover:bg-blue-500 hover:text-white dark:hover:text-gray-200\" rel=\"next\" href=\"".get_pagenum_link($paged + 1)."\">Next</a>\n";
    }
  }
endif;
