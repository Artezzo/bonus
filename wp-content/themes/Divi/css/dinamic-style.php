<?php
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');


  $cor_principal       = of_get_option('cor_principal');
  $cor_secundaria      = of_get_option('cor_secundaria');
  $cor_texto_principal = of_get_option('cor_texto_principal');
  $cor_link_principal  = of_get_option('cor_link_principal');

  $cor_link_menu_principal  = of_get_option('cor_link_menu_principal');
  $cor_link_menu_principal_hover  = of_get_option('cor_link_menu_principal_hover');

?>

/*---------[HEADER]-------------*/

#top-header .menu a{
	color: <?php echo $cor_link_menu_principal; ?>;
}

#top-header .menu a:hover {
	color: <?php echo $cor_link_menu_principal_hover; ?>;
}

.menu-container, #top-header {
	background-color: <?php echo $cor_principal; ?>;
}

.et-search-form {
	border:1px solid <?php echo $cor_principal; ?>;
}

#top-menu a {
	color: <?php echo $cor_link_menu_principal; ?>;
}

#top-menu a:hover {
	color: <?php echo $cor_link_menu_principal_hover; ?>;
}


#et_search_icon:hover{
	color: <?php echo $cor_principal; ?>;
}