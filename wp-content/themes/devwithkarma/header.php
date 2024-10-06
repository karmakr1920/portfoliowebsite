<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php the_title(); ?> - Dev With Karma</title>

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/unicons.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	<!-- MAIN STYLE -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/tooplate-style.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>><?php wp_body_open(); ?>
	<!-- MENU -->
	<nav class="navbar navbar-expand-sm navbar-light">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url();?>"><i class='uil uil-user'></i>Dev With Karma</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item">
						<a href="#about" class="nav-link"><span data-hover="About">About</span></a>
					</li>
					<li class="nav-item">
						<a href="#project" class="nav-link"><span data-hover="Projects">Projects</span></a>
					</li>
					<li class="nav-item">
						<a href="#resume" class="nav-link"><span data-hover="Resume">Resume</span></a>
					</li>
					<li class="nav-item">
						<a href="#contact" class="nav-link"><span data-hover="Contact">Contact</span></a>
					</li>
				</ul>

				<ul class="navbar-nav ml-lg-auto">
					<div class="ml-lg-4">
						<div class="color-mode d-lg-flex justify-content-center align-items-end">
							<i class="color-mode-icon"></i>
							<span class="theme-text">Dark Theme</span> <!-- Added a span for the text -->
						</div>

					</div>
				</ul>
			</div>
		</div>
	</nav>