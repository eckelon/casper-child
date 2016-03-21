<?php /* Template Name: Home Page */ ?>
<?php get_header('home'); ?>

<div class='welcome'>
     Hey! This is a welcoming section!!
</div>
<div class='intro'>
<!-- start slipsum code -->

<?php
     if (have_posts()) {
          the_post();
          the_content();
     }
?>
<!-- please do not remove this line -->

<!-- end slipsum code -->
</div>
<div class='box_container'>
     <div class='box_content'>
          <h2> Últimas entradas </h2>
          <?php
          $args = array(
               'numberposts' => 5
          );

          $latest_posts = get_posts( $args );
          foreach ($latest_posts as $post) {
          ?>
               <ul>
                    <li><a href= "<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
               </ul>
          <?php
          }
          ?>
     </div>

     <div class='box_content'>
          <h2> Últimos twits </h2>
          <?php echo do_shortcode('[fts_twitter twitter_name=eckelon]');?>
     </div>

     <div class='box_content'>
          <h2> Últimas fotos </h2>
          <?php echo do_shortcode('[fts_instagram instagram_id=3603928 type=user]');?>
     </div>
</div>
