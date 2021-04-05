<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lamansh
 */

?>

	</div><!-- #content -->

  <footer class="footer" style="background-color: <?php the_field('ft-1', 'option'); ?>;">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-1 col-md-11">
          <p style="color: <?php the_field('ft-2', 'option'); ?>;" class="copyright"><?php the_field('ft-3', 'option'); ?></p>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->
<a href="#0" class="cd-top">Top</a>
<?php wp_footer(); ?>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcF2-YPiEfRO5hkd2uo1Q-uE_0yrB0KQw&callback=initialize">
  </script>
</body>
</html>
