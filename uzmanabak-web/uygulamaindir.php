<html>
<?php
include 'functions.php';

$services = service_get_all();

?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Uzmana Bak</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/UY ICON/logo/blue.png">		
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="venobox/venobox.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/plugin_theme_css.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>        
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>
		<!-- modernizr js -->	
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>		
		<script>
			const target = {
  clicked: 0,
  currentFollowers: 90,
  btn: document.querySelector("a.btn"),
  fw: document.querySelector("span.followers")
};

const follow = () => {
  target.clicked += 1;
  target.btn.innerHTML = 'Following <i class="fas fa-user-times"></i>';

  if (target.clicked % 2 === 0) {
    target.currentFollowers -= 1;
    target.btn.innerHTML = 'Follow <i class="fas fa-user-plus"></i>';
  }
  else {
    target.currentFollowers += 1;
  }

  target.fw.textContent = target.currentFollowers;
  target.btn.classList.toggle("following");
}

		</script>
		

    </head>
<body>

<?php
error_reporting(0);
$categories = category_get_all();

?>
<div class="em40_header_area_main">
 	<!-- HEADER TOP AREA -->
	<div class="solutech-header-top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
					<div class="top-address text-left">
						<p>
							<span><i class="fas fa-home"></i>Türkiye</span>
							<a href="#"><i class="fas fa-envelope"></i>uzmanibaksin@gmail.com</a>
						</p>
					</div>
				</div>
				<!-- TOP RIGHT -->
				<div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
					<div class="top-right-menu">
						<ul class="social-icons text-right text_m_center">
							<li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#"><i class="fab fa-tumblr"></i></a></li>
							<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>								
						</ul>
					</div>
				</div>	
			</div>		
		</div>
	</div>
    <!-- END HEADER TOP AREA -->
	<div class="tx_top2_relative">
		<div class="">
			<div class="tx_relative_m">
				<div class="">  
					<div class="mainmenu_width_tx  ">
						<div class="solutech-main-menu one_page  hidden-sm witr_h_h10">
							<div class="solutech_nav_area scroll_fixed postfix">
								<div class="container">
									<div class="row logo-left">				
										<!-- LOGO -->
										<div class="col-md-3 col-sm-3 col-xs-4">
											<div class="logo">
												<a class="main_sticky_main_l" href="index.php" title="solutech">
													<img src="assets/UY ICON/logo/blue.png" width="50" height="50"alt="solutech">
												</a>
												<a class="main_sticky_l" href="index.php" title="solutech">
													<img src="assets/UY ICON/logo/blue.png" alt="solutech">
												</a>
											</div>	  
										</div>
										<div class="col-md-9 col-sm-9 col-xs-8">
											<nav class="solutech_menu main-search-menu">					
												<ul class="sub-menu">
													<li >
														<a href="index.php">Anasayfa</a>
												
													</li>
													<li><a href="hakkimizda.php">Hakkımızda</a></li>
													<li class="menu-item-has-children">
														<a href="kategoriler.php">KATEGORİLER</a>
														<ul class="sub-menu">
															<?php 
															
															for ($i=0; $i < 5; $i++) { 
																echo "<li><a href=\"sektor.php?id=".$categories[$i]['name']."\">".ucwords($categories[$i]['name'])."</a></li>";
																}
															?>
															<li><a href="kategoriler.php">Tümünü Gör</a></li>
														
														</ul>	
														<?php if($_SESSION['login'] == true){
														?><li class="menu-item-has-children dtbtn"><a href="profil.php"><?php echo $_SESSION['name'];?></a><ul class="sub-menu">														
															<li><a href="profil.php">Profil</a></li>
															<li><a href="inc/auth.php?is=cikis">Çıkış Yap</a></li>
														</ul></li>
		<?php }else{ ?>
			<li class="menu-item-has-children dtbtn"><a href="auth/giris.php">Üyelik</a><ul class="sub-menu">														
															<li><a href="auth/kayit-ol.php">Kayıt Ol</a></li>
															<li><a href="auth/giris.php">Giriş Yap</a></li>
														</ul></li> <?php } ?>
												</ul>
												
											</nav>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 			
			</div>
		</div> 
	</div> 
</div> 





<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="mobile_menu_logo text-center">
					<a href="index.php" title="solutech">
						<img src="assets/images/logo.png" alt="solutech">
					</a>		
				</div>
			</div>
		</div>
	</div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm hidden-md hidden-lg  header_area main-menu-area">
	<div class="menu_area mobile-menu">
		<nav class="solutech_menu">						
			<ul class="sub-menu">
				<li class="menu-item-has-children">
				<a href="index.php">Anasayfa</a>
												
												</li>
												<li><a href="about.html">Hakkımızda</a></li>
												<li class="menu-item-has-children">
													<a href="kategoriler.php">Kategoriler</a>
													<ul class="sub-menu">
														<li><a href="index.html">Sinema</a></li>
														<li><a href="index.html">Tiyatro</a></li>
														<li><a href="index.html">Doğum Günü</a></li>
														<li><a href="index.html">Dans</a></li>
														<li><a href="index.html">Müzik</a></li>
														<li><a href="index.html">Sportif</a></li>
														<li><a href="index.html">Lunapark</a></li>
														<li><a href="index.html">Sirk</a></li>
														<li><a href="index.html">Geziler</a></li>
														<li><a href="index.html">Açık Alan</a></li>
														<li><a href="index.html">Kapalı Alan</a></li>
													</ul>
												</li>
												<li>
													<a href="#">Hizmet Verenler</a>
																												
												</li>
									
											</ul>
											<div class="donate-btn-header">
												<a class="dtbtn" href="auth/giris.php">Giriş Yap</a>	
											</div>				
</div>
<!-- END MOBILE MENU AREA  -->

<!-- solutech_make_service_area -->
<div class="solutech_make_service_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title white">
					<div class="witr_section_title_inner text-center">
						<h2>UZMANI BASKIN</h2>		
						<h3>HEMEN KULLANMAYA BAŞLA</h3>		
					</div>
				</div>
				<div class="witr_classic_button_area">
					<!-- btn default style -->
					<div class="witr_btn_style mr tx_op">
						<div class="witr_btn_sinner">	
							<a href="#" class="witr_bbtn bbtn1">APP STORE			
								<span class="btn_w a_active"><i class="icofont-brand-apple"></i>
								</span>
							</a>
							<a href="#" class="witr_btn">GOOGLE PLAY 
									
							<i class="icofont-ui-play"></i>
								</a>	
						</div>						
					</div>
					<!-- btn default style -->
	
        </body>
</html>