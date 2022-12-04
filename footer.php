
	<div class="footer container-fluid">
		<div class="footer-sec">

			<!--<div class="logo-img">
				<a href="<?php //echo get_bloginfo('url'); ?>" ><img src="http://127.0.0.1/wp-content/uploads/2022/11/logo-removebg-preview.png" alt="Logo Image" /></a>
			</div>-->


			<div class="wrap-sec container">
				<section class="f-sec1">
					<h3>Locations</h3>
					<nav>
					<?php wp_nav_menu( array( 'menu_id'=>'9', 'container_class' => 'footer-nav', ) ); ?>
				</nav>
				</section>			
				<section class="f-sec2">
					<h3>Hot Homes</h3>
					<nav>
					<?php wp_nav_menu( array( 'menu'=>'11', 'container_class' => 'footer-nav',  ) ); ?>
				</nav>
				</section>
				<section class="f-sec3">
					<h3>Links</h3>
					<nav>
					<?php wp_nav_menu( array( 'menu'=>'10', 'container_class' => 'footer-nav',  ) ); ?>
				</nav>
				</section>		
			</div>

		</div>
	</div>

	<div class="dev">
		<span class="footer-credit">©2022 BY <a href="https://www.yehuda-nehari.com/" target="_blank">Yehuda-Nehari</a></span>
	</div>

	 <script src="<?php echo get_template_directory_uri().'/js/jQuery.min.js'; ?>"></script>
	 <script src="<?php echo get_template_directory_uri().'/js/custom.js'; ?>"></script>
     <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>