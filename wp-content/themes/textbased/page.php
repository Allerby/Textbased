<?php
get_header();
the_post();

    echo '<div class="wrapper">';

        the_content();
        standard_page();

    echo '</div>';

get_footer(); ?>
