<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WarrentHill
 */

?>
		<footer class="footer">
			<div class="footer__container">
				<div class="footer__logo"><img src="<?php the_field('footer_logo', 'options') ?>" alt=""></div>
				<div class="footer__copyright"><?php $copyright = get_field('copyright', 'options');
					echo $copyright['copyright_text'] . ' <a href="'. $copyright['link']['url'] .'">' .$copyright['link']['title'] . '</a>';
				?> </div>
			</div>
		</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
