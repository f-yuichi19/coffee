<?php
/*
Template Name: メニュー
Template Post Type: post
*/
?>
<?php get_header();?>
    <section class="menu_section">
        <div class="main_menu_block">
        <h2 class="menu_title">DRINK</h2>
            <div class="menu_block">
                <?php    
                    $query = new WP_Query(array(
                    'post_type' => "post",
                    'category_name' => 'menu',
                    'order' => 'ASC',
                    'orderby' => 'modified',
                    ));
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                ?>
            <div class="sample3">
                <img src="<?php the_field('sub_image'); ?>" class="menu_img" alt="フルーツ寄せ集め" />
                <div class="mask">
                    <div class="caption">
                        <dl>
                            <dt><?php the_title(); ?></dt>
                            <dd>&yen;<?php the_field('yen'); ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
                <?php
                    } //記事の繰り返しの終了
                    }else{
                    echo '随時更新中';//記事が無かった場合の内容
                    } //記事の有無の分岐終了
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
    
        <section class="menu_sub_section">
            <div class="main_menu_block">
            <h2 class="menu_title">FOOD</h2>
                <div class="menu_block">
                    <?php    
                        $query = new WP_Query(array(
                        'post_type' => "post",
                        'category_name' => 'food',
                        'order' => 'ASC',
                        'orderby' => 'modified',
                        ));
                        if($query->have_posts()){
                        while($query->have_posts()){
                        $query->the_post();
                    ?>
                <div class="sample3">
                    <img src="<?php the_field('sub_image'); ?>" class="menu_img" alt="フルーツ寄せ集め" />
                    <div class="mask">
                        <div class="caption">
                            <dl>
                                <dt><?php the_title(); ?></dt>
                                <dd>&yen;<?php the_field('yen'); ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
                    <?php
                        } //記事の繰り返しの終了
                        }else{
                        echo '随時更新中';//記事が無かった場合の内容
                        } //記事の有無の分岐終了
                        wp_reset_postdata();
                    ?>
                </div>
        </section>
    
    <section class="menu_sub_section">
            <div class="main_menu_block">
        <h2 class="menu_title">SWEETS</h2>
            <div class="menu_block">
                <?php    
                    $query = new WP_Query(array(
                    'post_type' => "post",
                    'category_name' => 'sweets',
                    'order' => 'ASC',
                    'orderby' => 'modified',
                    ));
                    if($query->have_posts()){
                    while($query->have_posts()){
                    $query->the_post();
                ?>
            <div class="sample3">
                <img src="<?php the_field('sub_image'); ?>" class="menu_img"  alt="フルーツ寄せ集め" />
                <div class="mask">
                    <div class="caption">
                        <dl>
                            <dt><?php the_title(); ?></dt>
                            <dd>&yen;<?php the_field('yen'); ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
                <?php
                    } //記事の繰り返しの終了
                    }else{
                    echo '随時更新中';//記事が無かった場合の内容
                    } //記事の有無の分岐終了
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>