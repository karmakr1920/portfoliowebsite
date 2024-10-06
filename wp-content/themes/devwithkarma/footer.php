<!-- FOOTER -->
<footer class="footer py-5">
	<div class="container">
		<div class="row">

			<?php
			// Define variables for dynamic content
			$year = date("Y"); // Get the current year
			$companyName = "Dev With Karma";
			$designerName = "Navin Kumar";
			$designerLink = "https://www.linkedin.com/in/navin-k-550377223/";
			?>

			<div class="col-lg-12 col-12">
				<p class="copyright-text text-center">Copyright &copy; <?php echo $year; ?> <?php echo $companyName; ?>. All rights reserved.</p>
				<p class="copyright-text text-center">Designed by <a rel="nofollow" href="<?php echo $designerLink; ?>"><?php echo $designerName; ?></a></p>
			</div>


		</div>
	</div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/Headroom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jQuery.headroom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/smoothscroll.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
<?php wp_footer(); ?>
</body>

</html>