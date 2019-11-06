<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp-theme-boilerplate
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php bloginfo( 'title' ); ?></title>

    <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header id="masthead" class="site-header" role="banner">

            <nav id="site-navigation" class="navbar navbar-toggleable-sm navbar-light bg-primary" role="navigation">
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">Weight Tracker</a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Section 1</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Section 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Section 3</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Section 4</a>
                        </li>
                    </ul>
                </div>
            </nav>

        </header> <!-- #masthead -->

        <div id="content" class="site-content">
