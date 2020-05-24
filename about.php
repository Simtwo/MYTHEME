<?php
/*
Template Name: About
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>



      <?php endwhile; ?>
      <?php else : ?>
      <h2>Erreur</h2>
      <?php endif; ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
