<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>RAFDesign</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <?php wp_head(); ?>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
</head>

<body  style="display: none">

<div class="load-container">
    <div class="container-main">
        <div class="logo-container">
            <img src="<?php printf('%s/assets/img/logo.png', get_template_directory_uri()); ?>" class="logo-img" alt="">
        </div>
        <div class="load-gif">
            <p>Loading</p>

            <div class="circle-container">
                <span class="circle"></span>
                <span class="circle"></span>
            </div>
        </div>
    </div>
</div>

<?php $current_slug = add_query_arg(array(), $wp->request); ?>

<header class="<?php echo(($current_slug == 'sobre-nos') ? 'menu-absolute' : '') ?>">
    <nav class="container-main">
        <div class="flex justify-content-between">

            <a href="<?php echo get_home_url() ?>" class="logo">
                <img src="<?php printf('%s/assets/img/logo.png', get_template_directory_uri()); ?>" alt="">
            </a>

            <?php wp_nav_menu(); ?>

            <div class="menu-mobile d-lg-none d-md-none ">
                <div class="btn btn-sm">
                    <i class="material-icons">menu</i>
                </div>
            </div>
        </div>
    </nav>
</header>