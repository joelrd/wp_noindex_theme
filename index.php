<?php
/**
 * Index template
 * @author Henry Rojas Douglas <henry@henryrojasdev.com>
 * @version 1.0.0
 * @license GPL
 * @copyright https://henryojasdev.com/
 * @package wp_noindex_theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="robots" content="noindex" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php wp_footer(); ?>
    </body>
</html>
