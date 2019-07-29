<?php get_header(); ?>
<div class="post-container">
    <div class="post-header">
        <div class="post-thumb">
            <?php the_post_thumbnail(); ?>
            <div class="background-shadow"></div>
        </div>
        <div class="post-intro">
            <div class="container-main">
                <span class='call-to-action'>
                    <i class='material-icons'>keyboard_arrow_down</i>
                    Detalhes sobre o projetos
                </span>


                <div class="post-info">

                    <div class="post-resume">
                        <h1>
                            <?php single_post_title(); ?>
                        </h1>


                        <?php echo get_post_meta(get_the_ID(), 'descricao', true); ?>
                    </div>

                    <div class="post-data">
                        <div class="info-group">
                            <h5>Cliente</h5>
                            <p><?php echo get_post_meta(get_the_ID(), 'cliente', true); ?></p>
                        </div>
                        <div class="info-group">
                            <h5>Work</h5>

                            <?php foreach (get_the_tags() as $item): ?>
                                <span><?php echo $item->name; ?></span>
                            <?php endforeach ?>
                        </div>
                        <div class="info-group">
                            <h5>Compartilhar</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-main">
        <?php
        if (have_posts()):
            the_post();
            the_content();

        endif;
        ?>

        <!--        <div class="padding-t-60 padding-b-40 height-auto">-->
        <!--            <h1>Problems with your web host</h1>-->
        <!--            <p>There are configuration issues between the plugin and the server. Check the version of the plugin and the-->
        <!--                modules required for this plugin.</p>-->
        <!--        </div>-->
    </div>
</div>
<?php get_footer(); ?>

<script>
    var header = document.getElementsByTagName('header');

    if (header[0]) {
        header[0].classList.add('menu-absolute');
    }
</script>