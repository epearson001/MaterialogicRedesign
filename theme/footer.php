</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="contain-to-grid" role="contentinfo">
	<div class="footer-wrapper">
		<div class="row">
			<div class="small-12 large-9 columns">
				<div class="row">
					<!--<div class="small-12 large-4 columns">
						<p>&copy; <?php /*echo date('Y'));*/ ?></p>
					</div>-->
					
					<div class="small-6 large-3 columns">
						<span class="footer-headline">Company</span>
						<?php wp_nav_menu(array('theme_location' => 'footercompany', 'container' => false, 'menu_class' => 'inline-list left footer small-viewport')); ?>
					</div>

					<div class="small-6 large-3 columns">
						<span class="footer-headline">Services</span>
						<?php wp_nav_menu(array('theme_location' => 'footerservices', 'container' => false, 'menu_class' => 'inline-list left footer')); ?>
					</div>

					<div class="small-6 large-3 columns">
						<span class="footer-headline">Technology</span>
						<?php wp_nav_menu(array('theme_location' => 'footertechnology', 'container' => false, 'menu_class' => 'inline-list left footer')); ?>
					</div>

					<div class="small-6 large-3 columns footer-last">
						<span class="footer-headline">Legal</span>
						<?php wp_nav_menu(array('theme_location' => 'footerlegal', 'container' => false, 'menu_class' => 'inline-list left footer social-bump')); ?>
					</div>
				</div>
			</div>
			<div class="small-12 large-3 columns">
				<div class="row offset-left">
					<span class="footer-headline">Social</span>
					<ul class="inline-list left footer" id="menu-footer-social">
						<li class="menu-item twitter" id="twitter-social"><a href="#"><span><div class="social-trunc">Follow us on </div>Twitter</span></a></li>
						<li class="menu-item facebook" id="facebook-social"><a href="#"><span><div class="social-trunc">Like us on </div>Facebook</span></a></li>
						<li class="menu-item google" id="google-social"><a href="#"><span><div class="social-trunc">Add us on </div>Google+</span></a></li>
						<li class="menu-item linkedin" id="linkedin-social"><a href="#"><span><div class="social-trunc">Connect with us on </div>Linkedin</span></a></li>
						<li class="menu-item newsfeed" id="newsfeed-social"><a href="#"><span><div class="social-trunc">Subscribe to our </div>Newsfeed</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-wrapper">
		<div class="row top-rule">
			<div class="small-12 large-12 columns">
				<span class="copyright-footer">Copyright &copy; <?php /*echo date('Y'));*/ ?> Materialogic. All rights reserved.</span>
			</div>				
		</div>
	</div>
</footer>



<?php wp_footer(); ?>


<!-- Mootools, Retina, Formalizer, and Selectivizer support added. -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/js/custom.js'></script>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>
	
</body>
</html>