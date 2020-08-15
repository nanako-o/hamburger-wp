<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="l-wrap" id="wrap">
        <div class="l-main">
            <header class="l-header">
                <div class="p-header">
                <h1>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
                </h1>
                <p class="header__descrition"><?php bloginfo( 'description' ); ?></p>

                <?php get_search_form(); ?>

                <div class="p-header__hamburger" id="open_nav">
                    <span>Menu</span>
                  </div>
                </div>
            </header>