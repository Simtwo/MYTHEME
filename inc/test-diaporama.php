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


<!-- AVEC ACF PRESQUE -->
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

<!-- Ajout de  -->

function alter_att_attributes_wpse_102079($attr) {
  $attr['data-src'] = $attr['src'];
  return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'alter_att_attributes_wpse_102079');
