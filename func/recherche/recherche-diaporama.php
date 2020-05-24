<?php echo $image; ?>

<?php
$image = get_sub_field('image_a_afficher', false);
if( $image ) {
echo wp_get_attachment_image( $image, false, array('title' => '', 'alt' => '', 'class' => 'tns-lazy-img'));}
?>

<?php
$image = get_sub_field('image_a_afficher', false);
if( $image ) {
echo wp_get_attachment_image_srcset( array( 400, 200 ));}
?>

<?php
			$image = get_sub_field('zdjecie', false);
			$size = 'sydney-large-thumb'; // (thumbnail, medium, large, full or custom size)
			if( $image ) {
			echo wp_get_attachment_image( $image, $size );}
			?>


    	$scrset = wp_get_attachment_image

<!-- AVEC ACF PRESQUE IMG ID -->
<img class="tns-lazy-img" <?php awesome_acf_responsive_image(get_sub_field( 'image_a_afficher' ),'thumb-640','640px'); ?> alt="">


<!-- En URL -->
<img class="tns-lazy-img" alt="" data-src="<?php echo $content; ?>">

<li class="blocks-gallery-item">
  <figure>
    <img class="tns-lazy-img" alt="" data-src="<?php echo $content; ?>">
    <figurecaption>
      <?php echo $content2; ?>
    </figurecaption>
  </figure>
</li>




<ul class="wp-block-gallery">
<?php if( have_rows('slider') ): ?>
		<?php while( have_rows('slider') ): the_row();	    ?>


<?php


							$content = get_sub_field('image_a_afficher');
							$content2 = get_sub_field('texte_a_afficher');
							?>

	<li class="blocks-gallery-item">
		<figure>

			<!-- En URL -->
			<img class="tns-lazy-img" alt="" data-src="<?php echo $content; ?>">

		<figurecaption>
				<?php echo $content2; ?>
			</figurecaption>
		</figure>
	</li>




<!-- Ajout de  -->

function alter_att_attributes_wpse_102079($attr) {
  $attr['data-src'] = $attr['src'];
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'alter_att_attributes_wpse_102079');







<!-- changer de curseur sur image -->


window.addEventListener("load", init);

function init() {
  const img = document.querySelector("img");
  const {width} = img.getBoundingClientRect();
  const halfImgWidth = width / 2;

  img.addEventListener("mousemove", function(e) {
    const xPos = e.pageX - img.offsetLeft;
    this.classList.remove("cursor-prev", "cursor-next");
    if (xPos > halfImgWidth) {
      this.classList.add("cursor-next");
    } else {
      this.classList.add("cursor-prev");
    }
  });
}

<!-- + CSS -->



.cursor-prev {
  cursor: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/cursor-prev.cur), auto;
  cursor: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/cursor-prev.svg) 16 16, auto;
}

.cursor-next {
  cursor: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/cursor-next.cur), auto;
  cursor: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/cursor-next.svg) 16 16, auto;
}
