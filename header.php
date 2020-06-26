<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Mees Postma">
    <title><?php bloginfo('name') ?></title>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-primary" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Mees Postma</a> <img src=" <?php echo get_template_directory_uri() . '/img/Logotest.png' ?>" alt="Logo van Mees" style="max-width: 64px; border-radius: 24px">
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'main-menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker(),
            ));
            ?>
            <form role="search" method="get" id="searchform" class="form-inline my-2 my-lg-0" action="http://localhost/wordpress/">
                <div>
                    <label class="screen-reader-text" for="s">Zoeken naar:</label>
                    <input class="form-control mr-sm-2" type="search" placeholder="Zoeken" aria-label="Zoeken" value="" name="s" id="s" />
                    <input type="submit" id="searchsubmit" value="Zoeken" class="btn btn-outline-success my=2 my-sm-0" />
                </div>
            </form>
        </div>
    </nav>
    <div class="jumbotron" style="background-image: url(<?php echo get_template_directory_uri() . '/img/header.jpg' ?>);">
        <div class="container">
            <h1 class="display-4"><a href="<?php echo home_url(); ?>"><?php bloginfo('name') ?></a></h1>
            <p class="lead"><?php bloginfo('description') ?></p>
        </div>
    </div>