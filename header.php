<html lang="fr" xml:lang="fr" xmlns="http://www.w3.org/1999/xhtml">
<head>

<title><?php bloginfo('name'); ?></title>
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="-1" />

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Design graphique & développement web."/>
<meta name="keywords" content="Simon Bouchard, graphiste, graphisme, paris">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link href="ss" rel="shortcut icon" type="image/x-icon" />

<?php wp_head(); ?>

</head>

<div id="page">
  <div class="control">
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>

  <?php
  wp_nav_menu(
    array(
      'theme_location' => 'header-menu',
      'menu_id'        => 'Menu principal',
    )
  );
  ?>
  </div><!-- #control -->
