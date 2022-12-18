<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main" role="main">
    <?php if (apply_filters('GET_CLIENT_MEMBERSHIP', true)) : ?>
        <header class="page-header">
            <h1 class="entry-title"><?php esc_html_e('The page can&rsquo;t be found.', 'getclientmem'); ?></h1>
        </header>
    <?php endif; ?>
    <div class="page-content">
        <p><?php esc_html_e('It looks like nothing was found at this location.', 'getclientmem'); ?></p>
    </div>

</main>