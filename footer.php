<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wtapp
 */

?>

    </div> <!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="site-info text-center">
            <p>Design and Developed by <a href="<?php echo esc_url( __( '//innovi.com.bd/', 'wtapp' ) ); ?>">Innovi</a></p>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>

    </body>
</html>
