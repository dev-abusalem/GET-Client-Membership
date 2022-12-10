<?php get_header(); ?>

<?php
require_once('./template-parts/slider.php')

?>

<?php

// if (have_posts()) :
//   while (have_posts()) :

//     the_post();
//   // get_template_part('template-parts/post/content');

//   endwhile;

// endif;


if (is_archive() || is_home()) {
  if (!$is_elementor_theme_exist || !getclientmem_theme_do_location('archive')) {
    get_template_part('template-parts/archive');
  }
} elseif (is_search()) {
  if (!$is_elementor_theme_exist || !getclientmem_theme_do_location('archive')) {
    get_template_part('template-parts/search');
  }
} else {
  if (!$is_elementor_theme_exist || !getclientmem_theme_do_location('single')) {
    get_template_part('template-parts/404');
  }
}


?>


<?php get_footer(); ?>