<?php get_header(); ?>
<div>
    <div class="container-main">
        <?php the_post_thumbnail(); ?>
        <h3><?php single_post_title(); ?></h3>

        <div class="row">
            <?php
            if (have_posts()):
                the_post();
                the_content();
            endif;
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
