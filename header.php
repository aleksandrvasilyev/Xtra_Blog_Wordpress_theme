<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xtrablog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php global $xtrablogs_options; ?>

<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><?php if ( $xtrablogs_options['xtrablog-logo']['url'] ) { ?><img
                    alt="<?php echo esc_html__( get_bloginfo( 'name' ) ); ?>" width="75"
                    src="<?php echo $xtrablogs_options['xtrablog-logo']['url']; ?>"><?php } else { ?><i
                        class="fas fa-times fa-2x"></i><?php } ?></div>
            <h1 class="text-center"><?php echo esc_html__( get_bloginfo( 'name' ) ); ?></h1>
        </div>
		<?php if ( wp_get_nav_menu_items( wp_get_nav_menu_name( 'header_nav' ) ) ) { ?>
            <nav class="tm-nav" id="tm-nav">
                <ul>
					<?php
					$actual_link = ( isset( $_SERVER['HTTPS'] ) ? "https" : "http" ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					foreach ( wp_get_nav_menu_items( wp_get_nav_menu_name( 'header_nav' ) ) as $value ) { ?>
                        <li class="tm-nav-item <?php if ( $actual_link == esc_attr( $value->url ) ) { ?> active <?php } ?>">
                            <a href="<?php echo esc_attr( $value->url ); ?>" class="tm-nav-link">
								<?php if ( $value->classes[0] ) { ?><i
                                    class="<?php foreach ( $value->classes as $val ) {
										echo $val . ' ';
									} ?>"></i><?php } ?>
								<?php echo esc_html__( $value->title ); ?>
                            </a></li>
					<?php } ?>
                </ul>
            </nav>
		<?php } ?>


        <div class="tm-mb-65">
			<?php if ( $xtrablogs_options['xtrablog-facebook-link'] ) { ?>
                <a rel="nofollow" href="<?php echo $xtrablogs_options['xtrablog-facebook-link']; ?>"
                   class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
			<?php } ?>
			<?php if ( $xtrablogs_options['xtrablog-twitter-link'] ) { ?>
                <a href="<?php echo $xtrablogs_options['xtrablog-twitter-link']; ?>" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
			<?php } ?>
			<?php if ( $xtrablogs_options['xtrablog-instagram-link'] ) { ?>
                <a href="<?php echo $xtrablogs_options['xtrablog-instagram-link']; ?>" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
			<?php } ?>
			<?php if ( $xtrablogs_options['xtrablog-linkedin-link'] ) { ?>
                <a href="<?php echo $xtrablogs_options['xtrablog-linkedin-link']; ?>" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
			<?php } ?>
        </div>
		<?php if ( $xtrablogs_options['xtrablog-editor-header'] ) { ?>
            <p class="tm-mb-80 pr-5 text-white">
				<?php echo esc_html__( $xtrablogs_options['xtrablog-editor-header'] ); ?>
            </p>
		<?php } ?>
    </div>
</header>
<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        <div class="row tm-row">
            <div class="col-12">
                <form role="search" method="get" class="form-inline tm-mb-80 tm-search-form">
                    <input class="form-control tm-search-input" name="s" type="search" placeholder="Search..."
                           aria-label="Search" value="<?php echo esc_html__( $_GET['s'] ); ?>">
                    <button class="tm-search-button" type="submit">
                        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>

