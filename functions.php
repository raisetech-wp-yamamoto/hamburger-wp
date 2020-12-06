<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support('admin-bar');
    add_theme_support( 'post-thumbnails' );
    /*↓を入れると管理画面のメニューからナビゲーションメニューを管理できるようになる。*/
    register_nav_menus(array(
        'footer_nav'=>esc_html__('footer navigation', 'rtbread'),
        'category_nav'=>esc_html__('category navigation', 'rtbread'),
    ));

    //タイトル出力
    function hamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
            return $title;
        }
    add_filter( 'pre_get_document_title', 'hamburger_title' );

    function hamburger_script() {
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'style-hamburger', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array(), '3.4.1' );
        wp_enqueue_script( 'menu-js', get_template_directory_uri() . '/menu.js', array());
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    /* 検索結果から固定ページを除外 */
    function SearchFilter($query) {
        if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
            $query->set( 'post_type', 'post' );
        }
    }
    add_action( 'pre_get_posts','SearchFilter' );

    /* ページによって表示件数を変化させる */
    function change_posts_per_page($query) {
        if ( is_admin() || ! $query->is_main_query() )
            return;
     
        if ( $query->is_archive() ) { /* アーカイブページの時に表示件数を3件にセット */
            $query->set( 'posts_per_page', '3' );
        }

        if ( $query->is_search() ) { /* 検索ページの時に表示件数を3件にセット */
            $query->set( 'posts_per_page', '5' );
        }
    }
    add_action( 'pre_get_posts', 'change_posts_per_page' );

    /* the_excerptで取得できる文字数を変更する */
    function wpdocs_custom_excerpt_length( $length ) {
        return 200;
    }
    add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

    /* the_archive_titleで取得したカテゴリー名やタグ名の前に「カテゴリー：」とか「タグ：」とかが付くのを外す処理 */
    function custom_archive_title($title){
        $titleParts=explode(': ',$title);
        if($titleParts[1]){
            return $titleParts[1];
        }
        return $title;
    }
    add_filter('get_the_archive_title','custom_archive_title');
    