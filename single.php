<?php get_header(); ?>

</div><!-- #control -->


<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

  <?php get_template_part( 'parts/diaporama/diaporama' ); ?>

<?php endwhile; ?>
<?php else : ?>
<h2>Erreur</h2>
<?php endif; ?>



<?php get_footer(); ?>

</div><!-- fermeture div "page" -->
</body>
</html>
