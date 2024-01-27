<?php
function get_breadcrumb() {
	echo '<a href=""’.home_url().’"" rel=""nofollow"">Home</a>';
	if (is_category() || is_single()){
		echo "  »  ";
		the_category (' • ');
			if (is_single()) {
				echo "  »  ";
				the_title();
			}
} elseif (is_page()) {
		echo "  »  ";
		echo the_title();
	}
}
