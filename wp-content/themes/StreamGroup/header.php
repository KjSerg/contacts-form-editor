<?php
$var    = variables();
$set    = $var['setting_home'];
$assets = $var['assets'];
$url    = $var['url'];
$logo   = carbon_get_post_meta( $set, 'logo' );
?>

<!DOCTYPE html>
<html class="no-js page" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>

<header class="header">
    <div class="header-content">
		
        <?php $logo_ = carbon_get_post_meta(get_option('page_on_front'), 'logo') ?>
        <a class="logo" href="<?php echo get_home_url(); ?>"> 
            <img src="<?php _u( $logo_ ) ?>" alt="">
        </a>
        <nav class="navigation">
            <ul>
				<?php
				$menu = wp_nav_menu(
					array(
						'theme_location' => 'header_menu',
						'menu'           => 'Menu',
						'items_wrap'     => '%3$s',
						'container'      => '',
						'link_before'    => '',
						'link_after'     => '',
						'echo'           => 0
					)
				);
				echo $menu;
				?>
            </ul>
        </nav>
        <div class="header-right">
			<?php $language_switcher = wp_get_nav_menu_items( 'lang' ); ?>
			<?php if ( $language_switcher ) : ?>
                <div class="language">
					<?php foreach ( $language_switcher as $item ) : if ( is_current_lang( $item ) ) : ?>
                        <div class="language-active"><?php echo $item->title; ?></div>
					<?php endif; endforeach; ?>
                    <div class="language-drop">
                        <ul>
							<?php foreach ( $language_switcher as $item ) : if ( ! is_current_lang( $item ) ) : ?>
                                <li><a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></li>
							<?php endif; endforeach; ?>
                        </ul>
                    </div>
                </div>
			<?php endif; ?>
            <div class="tog-nav"></div>
        </div>
    </div>
</header>

<main class="content">