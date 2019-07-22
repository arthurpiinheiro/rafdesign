<?php get_header(); ?>
<div>
    <?php
    if (have_posts()) : the_post();
        the_content();
    endif
    ?>
</div>
<?php get_footer(); ?>
