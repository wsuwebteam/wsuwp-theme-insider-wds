<?php WSUWP\Theme\WDS\Theme::render_block( 'quicklinks' ); ?>
<header class="wsu-insider-header">
    <div class="wsu-insider-header__inner">
        <div class="wsu-insider-header__title">
            <a href="<?php echo esc_url( get_home_url() ); ?>" class="wsu-insider-header_link">
                <strong>WSU</strong> Insider
            </a>
        </div>
    <div class="wsu-insider-header__subtitle"><?php echo wp_kses_post( get_bloginfo( 'description' ) ); ?></div>
    </div>
    <?php if ( has_nav_menu( 'site_horizontal' ) ) : ?>
        <nav class="wsu-navigation-header ">
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'site_horizontal',
                    'menu_class'     => 'wsu-menu-collapse  wsu-menu-collapse--style-horizontal',
                    'container'      => '',
                    'walker'         => new WSUWP\Theme\WDS\Walker_Nav_Menu_Collapse(),
                    'menu_id'        => 'wsu-site-menu',
                    'depth'          => $args['menuDepth'],
                )
            );
            ?>
        </nav>
    <?php endif; ?>
        </header>