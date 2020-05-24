<?php get_header(); ?>

<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>



<?php endwhile; ?>
<?php else : ?>
<h2>Erreur</h2>
<?php endif; ?>

</div>

</body>

</html>
