<footer>
  <div class="container">
  
    <div class="footer-top clearfix">
    	<div class="left-container clearfix">
	    	<div class="first-menu">
		    	<h3>Customer Services</h3>
		    	<?php wp_nav_menu( array(
		    	  'container' => false,
		    	  'theme_location' => 'customer service'
		    	)); ?>
	    	</div>

			<div class="second-menu">
				<h3>Help</h3>
		    	<?php wp_nav_menu( array(
		    	  'container' => false,
		    	  'theme_location' => 'help'
		    	)); ?>
			</div>
    	</div>

		<div class="right-container">
			<h3>Follow Us</h3>
	    	<?php wp_nav_menu( array(
	    	  'container' => false,
	    	  'theme_location' => 'follow us'
	    	)); ?>
		</div>
    </div>

    <div class="footer-bottom">
    	<p>Copyright &copy; 2016 Mike Walker. All Rights Reserved.</p>
    	<?php wp_nav_menu( array(
    	  'container' => false,
    	  'theme_location' => 'footer bar'
    	)); ?>
    </div>

  </div>
</footer>
<script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>