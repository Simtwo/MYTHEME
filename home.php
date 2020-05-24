<?php
/*
Template Name: Home
*/
get_header();
?>


<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
<div id="primary" class="content-area">
  <ul class="allarticle">

      <li class="articlehome">
      <a href="<?php the_permalink(); ?>">

      <?php $image = get_field('image');
      if( !empty( $image ) ): ?>
      <div class="illustrations_grande" style="background-image:url('<?php echo esc_url($image['url']); ?>')"></div>
      <?php endif; ?>

      <div class="overlay" style="display:none;">
        <h2><?php the_title(); ?></h2>
      </div>
        </a>
      </li>

  </ul>
</div><!-- #primary -->


<?php endwhile; ?>
<?php endif; ?>
<?php
get_footer();
