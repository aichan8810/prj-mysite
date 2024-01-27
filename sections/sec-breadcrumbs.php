<?php
function get_breadcrumb() {
  echo ' <li class="c-sec-BreadcrumbsItem"><a href="">TOP</a></li>';
  ;
	if (is_category() || is_single()){
		echo "  »  ";
		the_category (' • ');
			if (is_single()) {
				echo "  »  ";
				the_title();
			}
} elseif (is_page()) {
		echo'   »  <li class="c-sec-BreadcrumbsItem">';
    echo the_title();
    echo'</li>';
	}
}
?>


<ul class="l-sec-Breadcrumbs">
    <?php get_breadcrumb();?>
    <a href=""></a>
</ul>
