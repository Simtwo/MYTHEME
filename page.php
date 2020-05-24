<?php get_header(); ?>

<div id="content">
<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>

<?php get_template_part( 'parts/diaporama/diaporama' ); ?>

<?php endwhile; ?>
<?php else : ?>
<h2>Aucun Article</h2>
<?php endif; ?>
</div>

<?php get_footer(); ?>

</div><!-- fermeture div "page" -->
</body>
</html>
