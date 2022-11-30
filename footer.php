
<div class="footer">
		<div class="main-header">
			<div class="logo-img">
				<img src="http://127.0.0.1/wp-content/uploads/2022/11/logo-removebg-preview.png" alt="Logo Image" />
			</div>
			<div class="header-title">
				<h1>Olympic Realty Team</h1>
			</div>
			<nav>
				<?php wp_nav_menu( array( 'menu_id'=>'6', 'container_class' => 'main-nav', ) ); ?>
				<a class="toggle-nav" href=“#">&#9776;</a>
			</nav>
		</div>
	</div>

	<script src="<?php echo get_template_directory_uri().'/js/jQuery.min.js'; ?>"></script>
	 <script src="<?php echo get_template_directory_uri().'/js/custom.js'; ?>"></script>
     <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>