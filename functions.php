<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

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
        wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css', array(), '5.6.1' );
        wp_enqueue_style( 'style', get_template_directory_uri() . './scss/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_script' );

    function hamburger_scripts() {
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/scripts/script.js', array( 'jquery' ) );
    }
    add_action( 'wp_enqueue_scripts', 'hamburger_scripts' );

    //サイドバー
    function hamburger_widgets_init(){
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar',
        ));
    }
    add_action('widgets_init','hamburger_widgets_init');

    //引用タグのクラス変更
    function my_replace_to_custom_tags( $postarr ) {
        $postarr['post_content'] = str_replace('<blockquote>', '<blockquote class="p-article--quote">', $postarr['post_content'] );
        return $postarr;
    }
    add_filter('wp_insert_post_data', 'my_replace_to_custom_tags');
