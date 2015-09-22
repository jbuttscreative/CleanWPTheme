<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package joshuabutts
 */

?>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title>
            <?php wp_title( ' | ', true, 'right' ); ?>
        </title>

        <!--	Add Jquery if you want-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js">


        </script>
        <!--	Add the favicon in the root template directory-->
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
        <!--	Get the default stylesheet-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <?php wp_head(); ?>

    </head>

    <body>
        <div class="container">
            <!-- This container is the entire page. It closes in the wordpress footer.php-->


            <!--The function below outputs the default wordpress navigation menu or the main custom created menu	-->
            <?php wp_nav_menu(
    array(
        'menu'      =>      'main-menu',
        'container' =>      'false',
        'menu_class' =>     '',
        'menu_id'   =>      ''
        
    )

); ?>
