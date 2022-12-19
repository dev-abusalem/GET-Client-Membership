<?php get_header(); ?>


<?php
// $args = array('post_type'           => 'post');


// $the_query = new WP_Query($args);




// while ($the_query->have_posts()) :
//   $the_query->the_post();


$is_getclientmem_theme_exist = function_exists('getclientmem_theme_do_location');

if (is_singular()) {
  if (!$is_getclientmem_theme_exist || !getclientmem_theme_do_location('single')) {
    get_template_part('template-parts/single');
  }
} elseif (is_archive() || is_home()) {
  if (!$is_getclientmem_theme_exist || !getclientmem_theme_do_location('archive')) {
    get_template_part('template-parts/archive');
  }
} elseif (is_search()) {
  if (!$is_getclientmem_theme_exist || !getclientmem_theme_do_location('archive')) {
    get_template_part('template-parts/search');
  }
} else {
  if (!$is_getclientmem_theme_exist || !getclientmem_theme_do_location('single')) {
    get_template_part('template-parts/404');
  }
}

// endwhile;


// wp_reset_postdata();
//
?>






<?php get_footer(); ?>