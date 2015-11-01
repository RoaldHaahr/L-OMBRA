<footer class="site-footer clearfix">
	<a class="logo-link" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" rel="Logo" /></a>
	<p>
		MEJLGADE 35B <br />
		8000 ÅRHUS C <br />
		TLF: <a href="tel:86 20 88 01">86 20 88 01</a> <br />
		CVR: 32949282 <br />
		E-MAIL: <a href="<?php bloginfo('template_directory'); ?>/contact">INFO@FRUD.DK</a>
	</p>
        <div class="footer-right">
        <div class="social-media-container">
                <img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" rel="Facebook" class="social-media facebook" />
                <img src="<?php bloginfo('template_directory'); ?>/images/instagram.png" rel="Instagram" class="social-media instagram" />
                <img src="<?php bloginfo('template_directory'); ?>/images/youtube.png" rel="YouTube" class="social-media youtube" />
        </div>
        <a href="http://www.findsmiley.dk/da-DK/Searching/DetailsView.htm?searchstring=Sans+med+Fr%FCd&searchtype=all&vtype=detail&mode=simple&display=table&sort=0&SearchExact=false&virk=534442" target="_blank"><img class="kontrolrapport" src="<?php bloginfo('template_directory'); ?>/images/kontrolrapport.jpg" rel="Se kontrolrapport" /></a>
        </div>
</footer>

</div><!-- end container -->
<?php wp_footer(); ?>

<script type="text/javascript">
	$('#menu-item-1838, .menu-item-1838').click(function(e) {
		e.preventDefault();

		$('div#page-overlay').fadeIn();

		$('aside.book-table img').on('click', function() {
			$('div#page-overlay').fadeOut();
		});
	});
</script>

<script type="text/javascript">
	$('.mobile-menu-trigger, .mobile-menu-close-button, #menu-item-1838').click(function(e) {
		e.preventDefault();

		$('.mobile-menu').toggle(400);
	});

</script>

</body>
</html>