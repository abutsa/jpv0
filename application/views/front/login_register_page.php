<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Login & Registration | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<div id="top-bar">

			<div class="container clearfix">

				<div class="col_half nobottommargin">

					<!-- Top Links
					============================================= -->
					<div class="top-links">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					</div><!-- .top-links end -->

				</div>

				<div class="col_half fright col_last nobottommargin">

					<!-- Top Social
					============================================= -->
					<div id="top-social">
						<ul>
							<li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
							<li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li>
							<li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
							<li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li>
							<li><a href="tel:+91.11.85412542" class="si-call"><span class="ts-icon"><i class="icon-call"></i></span><span class="ts-text">+91.11.85412542</span></a></li>
							<li><a href="mailto:info@canvas.com" class="si-email3"><span class="ts-icon"><i class="icon-envelope-alt"></i></span><span class="ts-text">info@canvas.com</span></a></li>
						</ul>
					</div><!-- #top-social end -->

				</div>

			</div>

		</div><!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="no-sticky">

			<div id="header-wrap">

				<div class="container clearfix">

					<!-- Logo
					============================================= -->
					<div id="logo" class="divcenter">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url() ?>assets/images/logo-dark.png"><img class="divcenter" src="<?php echo base_url() ?>assets/images/jasa-pena.png" alt="Jasapena Logo"></a>
						<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url() ?>assets/images/logo-dark@2x.png"><img class="divcenter" src="<?php echo base_url() ?>assets/images/jasa-pena.png" alt="Jasapena Logo"></a>
				</div><!-- #logo end -->

				</div>

			</div>

		</header><!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>My Account</h1>
				<ol class="breadcrumb">
					<li><a href="#">Home</a></li>
					<li><a href="#">Pages</a></li>
					<li class="active">Login</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="tabs divcenter nobottommargin clearfix" id="tab-login-register" style="max-width: 500px;">

						<ul class="tab-nav tab-nav2 center clearfix">
							<li class="inline-block"><a href="#tab-login">Login</a></li>
							<li class="inline-block"><a href="#tab-register">Register</a></li>
						</ul>

						<div class="tab-container">

							<div class="tab-content clearfix" id="tab-login">
								<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
										<form id="login-form" name="login-form" class="nobottommargin" action="<?=site_url($this->uri->uri_string());?>" method="post">

											<h3>Login to your Account</h3>

											<div class="col_full">
												<label for="login-form-username">Email:</label>
												<input type="text" id="login-form-email" name="login-form-email" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="login-form-password">Password:</label>
												<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
											</div>
                                                                                        <div>
                                                                                                <?php if (isset($form_login_error)) echo $form_login_error;  ?>
                                                                                        </div>
											<div class="col_full nobottommargin">
												<button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
												<a href="#" class="fright">Lupa Password?</a>
											</div>

										</form>
									</div>
								</div>
							</div>

							<div class="tab-content clearfix" id="tab-register">
								<div class="panel panel-default nobottommargin">
									<div class="panel-body" style="padding: 40px;">
										<h3>Register for an Account</h3>

										<form id="register-form" name="register-form" class="nobottommargin" action="<?=site_url('user/user_add');?>" method="post">

											<div class="col_full">
												<label for="register-form-name">First Name:</label>
												<input type="text" id="register-form-name-first" name="register-form-name-first" value="" class="form-control" />
											</div>
                                                                                        
                                                                                        <div class="col_full">
												<label for="register-form-name">Last Name:</label>
												<input type="text" id="register-form-name-last" name="register-form-name-last" value="" class="form-control" />
											</div>
                                                                                        
											<div class="col_full">
												<label for="register-form-email">Email Address:</label>
												<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
											</div>								
                                                                   
											<div class="col_full">
												<label for="register-form-password">Choose Password:</label>
												<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
											</div>

											<div class="col_full">
												<label for="register-form-repassword">Re-enter Password:</label>
												<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
											</div>
                                                                                        <div>
                                                                                                <?php if (isset($form_register_error)) echo $form_register_error;  ?>
                                                                                        </div>
											<div class="col_full nobottommargin">
												<button class="button button-3d button-black nomargin" id="register-form-submit" name="register-form-submit" value="register">Register Now</button>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
						<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
					</div>

					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/js/functions.js"></script>

	<script>
		jQuery(document).ready( function($){
			var newDate = new Date(2017, 10, 1);
			$('#countdown-ex1').countdown({until: newDate});
		});
	</script>

</body>
</html>