<?php if ( ! isset( $_SESSION ) ) session_start(); ?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php elegant_titles(); ?></title>
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="page-container">
<?php
	if ( is_page_template( 'page-template-blank.php' ) ) {
		return;
	}

	$et_secondary_nav_items = et_divi_get_top_nav_items();

	$et_phone_number = $et_secondary_nav_items->phone_number;

	$et_email = $et_secondary_nav_items->email;

	$et_contact_info_defined = $et_secondary_nav_items->contact_info_defined;

	$show_header_social_icons = $et_secondary_nav_items->show_header_social_icons;

	$et_secondary_nav = $et_secondary_nav_items->secondary_nav;

	$primary_nav_class = 'et_nav_text_color_' . et_get_option( 'primary_nav_text_color', 'dark' );

	$secondary_nav_class = 'et_nav_text_color_' . et_get_option( 'secondary_nav_text_color', 'light' );

	$et_top_info_defined = $et_secondary_nav_items->top_info_defined;
?>

	<?php if ( $et_top_info_defined ) : ?>
		<div id="top-header" class="<?php echo esc_attr( $secondary_nav_class ); ?>">
			<div class="container clearfix">

			
				<div id="et-secondary-menu">
				<?php
					if ( '' !== $et_secondary_nav ) {
						echo $et_secondary_nav;
					}?>
				</div> <!-- #et-secondary-menu -->
				<?php
                   echo do_shortcode('[et_social_follow icon_style="slide" icon_shape="circle" icons_location="top" col_number="auto" counts="true" counts_num="100" custom_colors="true" bg_color="#ffffff" bg_color_hover="#0db7c4" icon_color="#0db7c4" icon_color_hover="#ffffff" outer_color="light"]'); 
                 ?>

			</div> <!-- .container -->
		</div> <!-- #top-header -->
	<?php endif; // true ==== $et_top_info_defined ?>

		<header id="main-header" class="<?php echo esc_attr( $primary_nav_class ); ?>">
			<div class="container clearfix">
			<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && '' != $user_logo
					? $user_logo
					: $template_directory_uri . '/images/logo.png';
			?>
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" />
				</a>
				<div class="box-info-header">
					<div class="box-telefone-header">
						<?php echo of_get_option('telefone_destaque'); ?>
					</div>

					<div class="box-email-header">
						<?php echo of_get_option('email'); ?>
					</div>
				</div>
			</div> <!-- .container -->

		</header> <!-- #main-header -->
					<div class="menu-container">
				<div class="container">
					
				<div id="et-top-navigation">
					<nav id="top-menu-nav">
					<?php
						$menuClass = 'nav';
						if ( 'on' == et_get_option( 'divi_disable_toptier' ) ) $menuClass .= ' et_disable_top_tier';
						$primaryNav = '';

						$primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => 'top-menu', 'echo' => false ) );

						if ( '' == $primaryNav ) :
					?>
						<ul id="top-menu" class="<?php echo esc_attr( $menuClass ); ?>">
							<?php if ( 'on' == et_get_option( 'divi_home_link' ) ) { ?>
								<li <?php if ( is_home() ) echo( 'class="current_page_item"' ); ?>><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'Divi' ); ?></a></li>
							<?php }; ?>

							<?php show_page_menu( $menuClass, false, false ); ?>
							<?php show_categories_menu( $menuClass, false ); ?>
						</ul>
					<?php
						else :
							echo( $primaryNav );
						endif;
					?>
					</nav>


					<?php do_action( 'et_header_top' ); ?>
				</div> <!-- #et-top-navigation -->
				</div>
			</div>

		<div id="et-main-area">

