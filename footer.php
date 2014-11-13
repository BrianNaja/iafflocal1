<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package iafflocal1
 */
?>

	</div><!-- #content -->
</div><!-- #page -->
  
<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
  	<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'iafflocal1' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'iafflocal1' ), 'WordPress' ); ?></a>
  	<span class="sep"> | </span>
  	<?php printf( __( 'Theme: %1$s by %2$s.', 'iafflocal1' ), 'iafflocal1', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
  </div><!-- .site-info -->
</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
