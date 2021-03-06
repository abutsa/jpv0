<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="Jasapena" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/swiper.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Jasapena.com - Login / Register</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Top Bar
		============================================= -->
		<!-- #top-bar end -->

		<!-- Header
		============================================= -->
		<header id="header" class="dark">

			<div id="header-wrap">

				<div class="container clearfix">

					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

					<!-- Logo
					============================================= -->
					<div id="logo">
						<a href="index.html" class="standard-logo" data-dark-logo="<?php echo base_url() ?>assets/images/jasa-pena-light.png"><img src="<?php echo base_url() ?>assets/images/jasa-pena-light.png" alt="Canvas Logo"></a>
						<!--<a href="index.html" class="retina-logo" data-dark-logo="<?php echo base_url() ?>assets/images/logo-dark@2x.png"><img src="<?php echo base_url() ?>assets/images/logo@2x.png" alt="Canvas Logo"></a>-->
					</div><!-- #logo end -->

					<!-- Primary Navigation
					============================================= -->
					<nav id="primary-menu" class="style-3">

						<ul>
							<li><a href="index.html"><div>Cara Kerja</div></a></li>
							<li><a href="index.html"><div>Datangkan Penulis</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Post Project</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Post Contest</div></a></li>
										</ul>
							</li>
							<li><a href="index.html"><div>Mulai Kerja</div></a>
										<ul>
											<li><a href="index-portfolio.html"><div>Browse Project</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Browse Contest</div></a></li>
											<li><a href="index-portfolio-2.html"><div>Browse Categories</div></a></li>
										</ul>
							</li>
							<li><a href="index.html"><div>Login/Register</div></a></li>
						</ul>
						
						<!-- Top Cart
						============================================= -->
						<div id="top-cart">
							<a href="#" id="top-cart-trigger"><i class="icon-user"></i></a>
							<div class="top-cart-content">
								<div class="top-cart-title">
									<h4>Username</h4>
								</div>
								<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-desc">
											<a href="#">Update Profil</a>
										</div>
									</div>
									</div>
									<div class="top-cart-items">
									<div class="top-cart-item clearfix">
										<div class="top-cart-item-desc">
											<a href="#">Logout</a>
										</div>
									</div>
								</div>
							</div>
						</div><!-- #top-cart end -->

						<!-- Top Search
						============================================= -->
						<div id="top-search">
							<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
							<form action="search.html" method="get">
								<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
							</form>
						</div><!-- #top-search end -->

					</nav><!-- #primary-menu end -->

				</div>

			</div>

		</header>
		<!-- #header end -->

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>LOGIN / REGISTER</h1>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">
			
			<div class="content-wrap">

				<div class="container clearfix">

					<div class="col_one_third nobottommargin">

						<div class="well well-lg nobottommargin">
							<form id="login-form" name="login-form" class="nobottommargin" action="<?=site_url($this->uri->uri_string());?>" method="post">

								<h3>Login ke akun anda</h3>

								<div class="col_full">
									<label for="login-form-email">Email :</label>
									<input type="email" id="login-form-email" name="login-form-email" value="" class="form-control" />
								</div>

								<div class="col_full">
									<label for="login-form-password">Password :</label>
									<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
								</div>
                                                                
                                                                <div>
                                                                        <?php if (isset($form_login_error)) echo $form_login_error;  ?>
                                                                </div>
                                                                
								<div class="col_full nobottommargin">
									<button class="button button-3d nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
									<a href="#" class="fright">Lupa Password?</a>
								</div>

							</form>
							
						</div>

					</div>

					<div class="col_two_third col_last nobottommargin">


						<h3>Belum Punya Akun ? Register Sekarang Juga.</h3>

						<form id="register-form" name="register-form" class="nobottommargin" action="<?=site_url('user/user_add');?>" method="post">

							<div class="col_half">
								<label for="register-form-name-first">Nama Depan :</label>
								<input type="text" id="register-form-name-first" name="register-form-name-first" value="" class="form-control" />
							</div>

							<div class="col_half col_last">
								<label for="register-form-name-last">Nama Belakang :</label>
								<input type="text" id="register-form-name-last" name="register-form-name-last" value="" class="form-control" />
							</div>

							<div class="clear"></div>
							
							<div class="col_half ">
								<label for="register-form-email">Email :</label>
								<input type="text" id="register-form-email" name="register-form-email" value="" class="form-control" />
							</div>
							
							<div class="col_half col_last">
								<label for="register-form-password">Password:</label>
								<input type="password" id="register-form-password" name="register-form-password" value="" class="form-control" />
							</div>
				
							<div class="clear"></div>

							<div class="col_half">
								<label for="register-form-repassword">Re-enter Password:</label>
								<input type="password" id="register-form-repassword" name="register-form-repassword" value="" class="form-control" />
							</div>

                                                        <div>
                                                                <?php if (isset($form_register_error)) echo $form_register_error;  ?>
                                                        </div>
                                                        
							<div class="clear"></div>

							<div class="col_full nobottommargin">
								<button class="button button-3d button-black nomargin" id="register-form-submit" type="submit" name="register-form-submit" value="register">Register Now</button>
							</div>

						</form>

					</div>

				</div>

			</div>

		</section>

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						<span style="color: #FFFFFF">Copyrights &copy; 2017 All Rights Reserved by Abutsa.id</span><br>
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

						<i class="icon-envelope2"></i> ocky.harliansyah@abutsta.id <span class="middot">&middot;</span> <i class="icon-headphones"></i> 0812 3336 8800 <span class="middot">&middot;</span> <i class="icon-web"></i> Abutsa.id
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

</body>
</html>