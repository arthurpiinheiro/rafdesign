<?php
/**
 * Created by PhpStorm.
 * User: arthurpinheiro
 * Date: 30/05/2019
 * Time: 02:12
 */


function my_mp_scripts()
{
    wp_enqueue_script('bundle', sprintf('%s/assets/js/bundle.js',
        get_template_directory_uri()),
        ['jquery'],
        null,
        true
    );
}

add_action('wp_enqueue_scripts', 'my_mp_scripts');

add_theme_support('post-thumbnails');

function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));

}

add_action('widgets_init', 'arphabet_widgets_init');

function show_all_posts()
{
    $posts = null;

    foreach (get_posts() as $item) {
        if ($item->{'post_status'} === 'publish') {
            $posts .= "<div class='post-item'>
                            <a href='" . get_post_permalink($item->{"ID"}) . "' class='post-info'>
                                    <span class='post-date'>" . get_the_date('d/m/Y', $item->{'ID'}) . "</span>
                                    <h3>" . $item->{"post_title"} . "</h3>
                                    <span class='call-to-action'>
                                        <i class='material-icons'>keyboard_arrow_right</i>
                                    </span>
                                </a>
                                <img src='" . get_the_post_thumbnail_url($item->{"ID"}) . "' alt=''>
                            </div>";

        }
    }

    return '<section id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container-main">
                        <div class="container-index">
                            <div class="intro">
                                <h1>Nulla porttitor ult vitae</h1>
                                <p>
                                    Há mais de 10 anos ajudamos clientes nacionais e internacionais na construção de marcas
                                    notáveis e no desenvolvimento de produtos e embalagens de sucesso.
                                </p>
                            </div>
                            <div class="social-media">
                                <a href="https://instagram.com/rafdesign/" target="_blank">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://www.facebook.com/pages/-RAFdesign-/121837424537886" target="_blank">
                                    <i class="icon-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="container-main padding-none">
                        <div class="posts-container">
                        ' . $posts . '
                        </div>
                    </div>
                </main><!-- .site-main -->
            </section><!-- .content-area -->';
}

add_shortcode('all_posts', 'show_all_posts');
