<?php
/*
Template Name: 詳細
Template Post Type: post
*/
?>
<?php get_header(); ?>

<main class="details_main">
    <section class="details_section">
                    <?php    
                          $query = new WP_Query(array(
                          'post_type' => "post",
                          'category_name' => 'details',
                          'order' => 'ASC',
                          'orderby' => 'modified',
                          ));
                          if($query->have_posts()){
                          while($query->have_posts()){
                          $query->the_post();
                      ?>
        <div class="container">
            <div class="row">
               <div class="aaa">
                    <div> 
                        <h2 class="details_title" data-en="Coffee"><?php the_title(); ?></h2>
                    </div>
                    <div class="details_content">
                            <div class=" details_text_block">
                                <p class="details_text">
                                    <?php the_content(); ?>
                                </p>
                            </div>
                            <div class="images_item01">
                                <img src="<?php the_field('sub_image'); ?>" class="details_img" alt="">
                            </div>                                                                                                
                    </div>
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
    </section>

</main>
<footer id="details_footer">
      <p>&copy; COFFEE</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>