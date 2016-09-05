<?php
	/**
 * @package Apostrophe
 *
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<?php if ( is_active_sidebar( 'footer-sidebar' ) ) : ?>
		<div class="widget-area">
			<div id="footer-sidebar">
				<?php dynamic_sidebar( 'footer-sidebar' ); ?>
			</div>
		</div>
		<?php endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<div id="footer">
  <div id="footer-container" class="container">
     <div id="allen-watermark"></div>
     <div id="siteinfo">
  	<div>&copy; 2005-2016 Allen Ginsberg Project. All rights reserved. <a href="#!/contact">Contact us</a> for more information.</div>
     </div>
     <div id="footer-sitemap">
    	<ul>Site Links
		<li><a href="#!/announcements">Blog/Announcements</a></li>
		<li><a href="#!/biography">Biography</a></li>
		<li><a href="#!/works">Published Works</a>
			<ul>
				<li><a href="#!/works/book">Books</a></li>
				<li><a href="#!/works/audio-recording">Audio</a></li>
				<li><a href="#!/works/film">Film</a></li>
			</ul>
		</li>
	</ul>
     </div>
     <div id="footer-archive">
	<ul>
		<li>&nbsp;</li>
		<li><a href="#!/archive">Archive</a>
			<ul>
				<li><a href="#!/archive/photography">Photography</a></li>
				<li><a href="#!/archive/art">Art</a></li>
				<li><a href="#!/archive/document">Documents</a></li>
				<li><a href="#!/archive/lecture">Lectures</a></li>
			</ul>
		</li>
		<li><a href="#!/links">Links</a></li>
	</ul>
    </div>
    <div id="footer-external-links">External Links</a>
	<ul>
		<li><a href="http://www.facebook.com/therealallenginsberg" target="_blank">Facebook</a></li>
		<li><a href="https://twitter.com/Ginsbergpoem" target="_blank">Twitter</a></li>
		<li><a href="http://allenginsberg.sandbag.uk.com/Store/DisplayItems.html" target="_blank">Merchandise</a></li>
		<li><a href="http://ginsbergblog.blogspot.com" target="_blank">Blogger site</a></li>
	</ul>
    </div>
  </div>
</div>

</body>
</html>
