<?php /* Template Name: Home Page */ ?>
<?php get_header('home'); ?>

<div class='welcome'>
     Hey! This is a welcoming section!!
</div>
<div class='intro'>
<!-- start slipsum code -->

Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing.

<!-- please do not remove this line -->

<div style="display:none;">
<a href="http://slipsum.com">lorem ipsum</a></div>

<!-- end slipsum code -->
</div>
<div class='box_container'>
     <div class='box_content'>
          <h2> Últimas entradas </h2>
          <?php
          $args = array(
               'numberposts' => 10
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
     </div>

     <div class='box_content'>
          <h2> Últimas fotos </h2>
     </div>
</div>
