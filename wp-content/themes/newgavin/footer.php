<div class="clr"></div>
		<div id="footer">
		<div class="footbg">
		<span>Copyright <?php echo comicpress_copyright(); ?>  <a href="<?php echo get_settings('Home'); ?>/"><?php bloginfo('name'); ?></a>保留所有权利.
       </span><br></div></div>
	
	</div>
</div>
<!-- 返回顶部 -->
<div style="display: none;" id="gotop"></div>
<!-- 返回顶部END -->

</body>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/sanzi.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prettify.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/prettify.min.js"></script>
<script type="text/javascript">
window.onload = function(){prettyPrint();};
</script>

 
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script>
 <!--[if ie 6]>
	<script src="http://letskillie6.googlecode.com/svn/trunk/letskillie6.zh_TW.pack.js"></script>
<![endif]-->
<?php if ( is_singular()| is_page()){ ?><script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/comments-ajax.js"></script><?php } ?>
<?php wp_footer(); ?>
</html>

      
