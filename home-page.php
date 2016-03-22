<?php /* Template Name: Home Page */ ?>
<?php get_header('home'); ?>

<div class='welcome'>
<?php
     if (have_posts()) {
          the_title();
     }
?>
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
<?php get_footer(); ?>
