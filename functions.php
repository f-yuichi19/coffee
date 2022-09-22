<?php
    function change_old( $query ) {
        $query->set('order', 'ASC');
        $query->set('orderby', 'date' );
    }
    add_action( 'pre_get_posts', 'change_old' );

    //アイキャッチ画像を利用
    add_theme_support( 'post-thumbnails' );
?>