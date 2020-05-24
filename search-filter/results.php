<?php
/**
 * Search & Filter Pro
 *
 * Sample Results Template
 *
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 *
 * Note: these templates are not full page templates, rather
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think
 * of it as a template part
 *
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs
 * and using template tags -
 *
 * http://codex.wordpress.org/Template_Tags
 *
 */

if ( $query->have_posts() )
{
	?>


	<div class="pagination">

		<div class="nav-previous"><?php next_posts_link( 'Older posts', $query->max_num_pages ); ?></div>
		<div class="nav-next"><?php previous_posts_link( 'Newer posts' ); ?></div>
		<?php
			/* example code for using the wp_pagenavi plugin */
			if (function_exists('wp_pagenavi'))
			{
				echo "<br />";
				wp_pagenavi( array( 'query' => $query ) );
			}
		?>
	</div>
	<ul class="allarticle">

	<?php
	while ($query->have_posts())
	{
		$query->the_post();

		?>


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




		<?php
	}
	?>


	<?php
}
else
{
	echo "No Results Found";
}
?>
</ul>
