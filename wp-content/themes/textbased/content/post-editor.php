<?php
if( have_rows('post_editor') ):
    while ( have_rows('post_editor') ) : the_row();

    echo '
    <canvas id="testCanvas" width="500" height="300">
      ' . get_sub_field("title") . '
    </canvas>

    </div>';

    endwhile;
endif;
?>
