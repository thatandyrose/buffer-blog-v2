<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Buffer
 */
?>

	</div><!-- #content -->

  <div class="newsletter-cta">
    <h1 class="newsletter-cta-h1">Join us on our journey from $0 – $10K in monthly recurring revenue.</h1>
    <h2 class="newsletter-cta-h2">We're learning a lot and sharing <em>everything</em> with you!</h2>
    <?php
      if( function_exists( 'mc4wp_form' ) ) {
          mc4wp_form();
      }
    ?>
  </div>

	<footer class="about-buffer footer" role="contentinfo">
    <p class="about-blurb">BTMetrics automagically calculates your most important SaaS metrics, so you can throw away the spreadsheets and get back to growing your business.</p>
    <a class="footer-signup" href="http://www.btmetrics.com/?utm_source=blog&utm_medium=10K-Journey&utm_campaign=bottom-blog-learn-more-link">Learn More</a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

  <span class="copyright">©2015 BTMetrics, Inc.</span>

</body>
</html>
