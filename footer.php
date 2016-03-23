<footer id="colophon" class="site-footer" role="contentinfo">
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
        <a class="subscribe icon-feed" href="<?php bloginfo('rss2_url');
?>"><span class="tooltip">Suscr&iacute;bete!</span></a>
        <div class="site-info inner">
            <section class="copyright">
               Este site utiliza el tema <a
href="https://github.com/lacymorrow/casper">Casper WP</a> de Lacy Morrow, con
un <a href="http://github.com/eckelon/casper-child">dise&nacute;o adaptado</a>
por <a href="http://eckelon.net">Jes&uacute;s &Aacute;ngel Samitier</a>.
           </section>
        </div><!-- .site-info -->
</footer>
<?php wp_head(); ?>
