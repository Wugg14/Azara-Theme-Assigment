<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Azara-theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer__container">
            <div class="footer-logo__container">
                <img src="<?php echo get_theme_file_uri('/img/azara-logo-white.png') ?>" alt="Azara Logo"/>
            </div>
            <div class="footer-links__container">
                <div class="footer__user-guide">
                    <h3>USER GUIDES</h3>
                    <a href="/#">Parents & Guardians</a>
                    <a href="/#">Staff</a>
                    <a href="/#">Clinicians</a>
                    <a href="/#">Manager</a>
                    <a href="/#">Leadership</a>
                </div>
                <div class="footer__about-links">
                    <h3>ABOUT</h3>
                    <a href="/#">Contact Us</a>
                    <a href="/#">Policies</a>
                    <a href="/#">EULA</a>
                    <a href="/#">Connect</a>
                </div>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
