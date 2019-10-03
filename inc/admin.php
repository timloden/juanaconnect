<?php

/* Remove admin bar items
--------------------------------------------------------------------------------------*/

add_action('admin_bar_menu', 'remove_wp_logo', 999);

function remove_wp_logo( $wp_admin_bar )
{
    $wp_admin_bar->remove_node('wp-logo');
    $wp_admin_bar->remove_node('comments');
}

/* Change "Logged in as" text
--------------------------------------------------------------------------------------*/

add_filter('admin_bar_menu', 'replace_wordpress_howdy', 25);

function replace_wordpress_howdy( $wp_admin_bar )
{
    $my_account = $wp_admin_bar->get_node('my-account');
    $newtext = str_replace('Howdy,', 'Logged in as: ', $my_account->title);
    $wp_admin_bar->add_node(
        array(
        'id' => 'my-account',
        'title' => $newtext,
        ) 
    );
}

add_action('login_enqueue_scripts', 'custom_login_logo');

function custom_login_logo()
{
    $general_settings = get_field('general_settings', 'option');
    $logo = $general_settings['organization_logo'];
    ?>

    <style type="text/css">
        #login h1 a, .login h1 a, body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/login-logo.png) !important;
            height: 80px;
            width: 100%;
            background-size: auto;
            background-repeat: no-repeat;
            background-size: contain;
            padding-bottom: 0;
        }

        .login #nav {
            font-weight: bold;
        }

        .login #nav, .login #backtoblog {
            text-align: center;
        }

    <?php if ($logo) : ?>
            #login h1 a, .login h1 a, body.login div#login h1 a {
                background-image: url(<?php echo($logo['url']); ?>) !important;
            }
    <?php endif; ?>

    </style>
<?php 
}