<?php
/*
Template Name: 見出し
Template Post Type: post
*/
?>

<?php get_header();?>

    <main>
      <section id="menu">
        <div class="menu-img fixed-bg">
          <h2 class="sec-title">MENU</h2>
        </div>

        <div class="menu-content wrapper">
          <div class="menu-item">
            <h3 class="item-title">COFFEE</h3>
            <dl>
            <?php    
                      $query = new WP_Query(array(
                      'post_type' => "post",
                      'category_name' => 'coffee',
                      'order' => 'ASC',
                      'orderby' => 'modified',
                      ));
                      if($query->have_posts()){
                      while($query->have_posts()){
                      $query->the_post();
                  ?>
              <dt><?php the_content(); ?></dt>
              <dd>&yen;<?php the_field('yen'); ?></dd>
              <?php
                          } //記事の繰り返しの終了
                          }else{
                          echo '随時更新中';//記事が無かった場合の内容
                      } //記事の有無の分岐終了
                      wp_reset_postdata();
                      ?>
            </dl>
          </div>
          <div class="menu-item">
            <h3 class="item-title">FOOD</h3>
            <dl class="food">
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
              <dt><?php the_content(); ?></dt>
              <dd>&yen;<?php the_field('yen'); ?></dd>
              <?php
                          } //記事の繰り返しの終了
                          }else{
                          echo '随時更新中';//記事が無かった場合の内容
                      } //記事の有無の分岐終了
                      wp_reset_postdata();
                      ?>
            </dl>
            <h3 class="item-title">SWEETS</h3>
            <dl>
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
              <dt><?php the_content(); ?></dt>
              <dd>&yen;<?php the_field('yen'); ?></dd>
              <?php
                          } //記事の繰り返しの終了
                          }else{
                          echo '随時更新中';//記事が無かった場合の内容
                      } //記事の有無の分岐終了
                      wp_reset_postdata();
                      ?>
            </dl>
          </div>
        </div>
      </section>

      <section id="about">
        <div class="about-img fixed-bg">
          <h2 class="sec-title">ABOUT</h2>
        </div>

        <div class="about-content wrapper">
          <div class="about-item">
            <h3 class="item-title">COFFEE</h3>  

           <div class="card_block">
           <?php    
                      $query = new WP_Query(array(
                      'post_type' => "post",
                      'category_name' => 'about',
                      'order' => 'ASC',
                      'orderby' => 'modified',
                      ));
                      if($query->have_posts()){
                      while($query->have_posts()){
                      $query->the_post();
                  ?>
              <div class="l-wrapper_02 card-radius_02">
              <article class="card_02">
                  <div class="card__header_02">
                  <p class="card__title_02"><?php the_title(); ?></p>
                  <figure class="card__thumbnail_02">
                      <img src="<?php the_field('sub_image'); ?>" alt="サムネイル" class="card__image_02">
                  </figure>
                  </div>
                  <div class="card__body_02">
                  <p class="card__text2_02"><?php the_content(); ?></p>
                  </div>    
              </article>
              </div>
              <?php
                          } //記事の繰り返しの終了
                          }else{
                          echo '随時更新中';//記事が無かった場合の内容
                      } //記事の有無の分岐終了
                      wp_reset_postdata();
                      ?>
           </div>
            <div class="btn_block">
              <a class="btn" href="<?php echo home_url(); ?>\about\"><span>Read More</span></a>
            </div>

          </div>
        </div>
      </section>

      <section id="location">
        <div class="location-img fixed-bg">
          <h2 class="sec-title">LOCATION</h2>
        </div>

        <div class="location-content wrapper">
          <div class="location-item">
            <h3 class="item-title">ACCESS</h3>
            <div class="item-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4585.299293219977!2d139.7062494041788!3d35.64507269733178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b40ba660b1b%3A0x8858088b6942f55f!2z44CSMTUwLTAwMjIg5p2x5Lqs6YO95riL6LC35Yy65oG15q-U5a-_5Y2X!5e0!3m2!1sja!2sjp!4v1592748907506!5m2!1sja!2sjp"></iframe>
            </div>
            <div class="item-info">
              <p>
                X-XX-XX, Ebisuminami, Shibuya-ku, Tokyo 150-0022<br>
                東京都渋谷区恵比寿南X-XX-XX
              </p>
              <p>
                Open 7 days a Week<br>
                9:00am to 20:00pm
              </p>
              <p>Tel : XX-XXXX-XXXX</p>
            </div>
          </div>
        </div>
      </section>
    </main>



    <?php get_footer(); ?>

  