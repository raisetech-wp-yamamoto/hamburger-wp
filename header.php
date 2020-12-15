<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="l-wrapper">
        <div class="l-wrapper__left">
            <div class="l-bg"></div>
            <header class="l-header">
                <h2 id="menu" class="c-title c-title--side-menu">Menu</h2>
                <h2 class="c-title c-title--header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h2>
                <?php get_search_form(); ?>
            </header>