<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package GBC_Underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#f4f2ed" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.typekit.net/mfh4dtn.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class((is_front_page() || is_home()) ? 'homepage' : null); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'gbc-underscores' ); ?></a>
	<div id="gbc-top-bar">
		<a id="sponsor" href="https://csudigitalhumanities.org"><?php echo gbc_sprite('cphdh');?> CSU <span>Center for Public History + </span>Digital Humanities</a>
		<span>
			<a aria-label="Visit Bluesky page" href="https://bsky.app/profile/cphdh.bsky.social"><?php echo gbc_sprite('bluesky');?></a>
			<a aria-label="Visit Facebook page" href="https://www.facebook.com/csudigitalhumanities/"><?php echo gbc_sprite('facebook');?></a>
			<a aria-label="Visit YouTube channel" href="https://www.youtube.com/user/csudigitalhumanities"><?php echo gbc_sprite('youtube');?></a>
			<a aria-label="Send us an email" href="mailto:info@greenbookcleveland.org"><?php echo gbc_sprite('email');?></a>
		</span>
	</div>
	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			echo '<a class="gbc-brand site-title" href="'.esc_url( home_url( '/' ) ).'" aria-label="'.get_option('blogname').' logo" rel="home"><img src="'.gbc_theme_file('text-alt.png').'" alt="'.get_option('blogname').'"></a>';
			?>
		</div><!-- .site-branding -->
		<?php 
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1',
				'menu_id' => 'nav-menu-top',
				'menu_class' => 'gbc-top-menu',
				'depth' => 1,
				'container'=>null,
			)
		);
		?>
		<a id="menu" role="button" aria-expanded="false" aria-controls="megamenu" href="javascript:void(0);" aria-label="Toggle Menu"><?php echo gbc_sprite('menu');?></a>
	</header><!-- #masthead -->
	<div id="megamenu">
		<nav id="megamenu-inner">
			<h3>Search</h3>
			<?php echo get_search_form(false);?>
			<div class="megamenu-row">
				<div id="megamenu-nav">
					<h3>Main Navigation</h3>
					<?php 
					wp_nav_menu(
						array(
							'theme_location' => 'menu-2',
							'menu_id' => 'nav-megamenu',
							'menu_class' => 'gbc-top-menu',
							'depth' => 0,
							'container'=>null,
						)
					);
					?>
				</div>
				<div id="megamenu-types">
					<h3>Location Types</h3>
					<?php echo gbc_terms_list();?>
				</div>

			</div>
		</nav>
	</div>
	<div id="megamenu-overlay"></div>
	<div id="primary-container">
