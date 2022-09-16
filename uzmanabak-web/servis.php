<?php
include 'functions.php';
$id = $_GET['id'];
if(!isset($id)){
	header('Location: index.php');
	die();
}
$servis = service_get($id);
?><!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo $servis["name"]; ?> - Uzmana Bak Web Site</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="assets/images/favicon.png">		
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="venobox/venobox.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/plugin_theme_css.css"/>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>        
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" type="text/css" href="assets/css/responsive.css"/>
		<!-- modernizr js -->	
        <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>		
		
    </head>
<body>
<?php include 'header.php' ?>

<!-- breadcumb-area	 -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2><?php echo $servis["name"]; ?></h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.php">Uzmana Bak</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li><?php echo $servis["name"]; ?></li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>

<!-- solutech_about_area -->
<div class="solutech_about_area home_security">
	<div class="container">
		<div class="row about_area">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="single_image_area">
					<div class="single_image  ">
						<img src="https://ustasiyapsin-api.herokuapp.com/api/uploadImage/get-image/<?php echo $servis["img"]; ?>" alt="">
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-10 col-sm-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-left">
						<h2>20.02.2022</h2>		
						<h3><?php echo $servis["name"]; ?></h3>		
						<p><?php echo $servis["companyName"]; ?></p>		
					</div>
				</div>
				<p><?php echo $servis["about"]; ?></p>		

				<div class="witr_button_area button2">
					<div class="witr_btn_style mr">
						<div class="witr_btn_sinner">	
							<?php if(isset($_SESSION['uid'])){ echo '<a href="#" class="witr_btn">TEKLİF YAP</a>';}else{echo '<a href="#" class="witr_btn">TEKLİF YAPMAK İÇİN GİRİŞ YAP</a>';} ?>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- solutech_countdown_area -->
<div class="solutech_countdown_area">			
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h3>ETKİNLİK HAKKINDA YORUMLAR</h3>	
						
					</div>
				</div>
			</div>

		</div>
	</div>
</div>


<!-- solutech_team_area -->
<div class="solutech_team1_area team_page">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>ETKİNLİĞİN</h2>		
						<h3>ŞEHİRLERİ</h3>			
					</div>
				</div>
			</div>
		</div>
		<div class="witr_team_area_c witr_tps7">
			<div class="row post_team_idteam team_top">
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/team-01.jpg"  alt="">
							<div class="team_o_icons all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>															
							</div>											
						</div> 
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">ALİ ÇAKIR</a></h5>
							<span>Organizatör</span>	
						</div>
					</div>								
				</div>
				<!-- solutech_team_02 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/team-02.jpg"  alt="">
							<div class="team_o_icons all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>															
							</div>											
						</div> 
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">MÜJDAT AKIN</a></h5>
							<span>Eğlence Sektörü</span>
						</div>
					</div>								
				</div>
				<!-- solutech_team_03 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/team-03.jpg"  alt="">
							<div class="team_o_icons all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>															
							</div>											
						</div> 
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">AHMET YILMAZ</a></h5>
							<span>Müdür</span>
						</div>
					</div>								
				</div>
				<!-- solutech_team_04 -->
				<div class="witr_all_mb_30 col-lg-12">
					<div class="team-part all_color_team ">
						<div class="witr_team_section">
							<img src="assets/images/team-04.jpg"  alt="">
							<div class="team_o_icons all_team_icon_o_color">
								<ul class="witr_pots_team_s">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-instagram"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
								</ul>															
							</div>											
						</div> 
						<div class="witr_team_content all_content_bg_color text-center">
							<h5><a href="#">TARIK SAYDAM</a></h5>
							<span>Pazarlama Sorumlusu</span>
						</div>
					</div>								
				</div>
			</div>
		</div>
	</div>
</div>


<!-- solutech_testimonial_area -->
<div class="solutech_testimonial2_area home_security">			
	<div class="container">
		<div class="carso_id1 tshover witr_testi_s10">
			<div class="witr_testi_itemt testi-width all_color_testimonial">	
				<div class="em_single_testimonial">
					<div class="test_q_icon">
						<i class="fas fa-quote-right"></i>
					</div>
					<div class="em_testi_content">
						<div class="em_testi_text">
							<p>Mükemmel bir deneyimdi, teşekkürler.</p>
						</div>
					</div>								
					<div class="em_test_thumb test-part">
						<img src="assets/images/testimonial1.png"  alt="">	
					</div>
					<div class="em_testi_title">
						<h2>AKIN UYGUR<span>Müşteri</span></h2>										
					</div>
				</div>										
			</div>
			<!-- solutech_testimonial_02 -->
			<div class="witr_testi_itemt testi-width all_color_testimonial">	
			<div class="em_single_testimonial">
					<div class="test_q_icon">
						<i class="fas fa-quote-right"></i>
					</div>
					<div class="em_testi_content">
						<div class="em_testi_text">
							<p>Mükemmel bir deneyimdi, teşekkürler.</p>
						</div>
					</div>								
					<div class="em_test_thumb test-part">
						<img src="assets/images/testimonial1.png"  alt="">	
					</div>
					<div class="em_testi_title">
						<h2>AKIN UYGUR<span>Müşteri</span></h2>										
					</div>
				</div>								
			</div>
			<!-- solutech_testimonial_03 -->
			<div class="witr_testi_itemt testi-width all_color_testimonial">	
			<div class="em_single_testimonial">
					<div class="test_q_icon">
						<i class="fas fa-quote-right"></i>
					</div>
					<div class="em_testi_content">
						<div class="em_testi_text">
							<p>Mükemmel bir deneyimdi, teşekkürler.</p>
						</div>
					</div>								
					<div class="em_test_thumb test-part">
						<img src="assets/images/testimonial1.png"  alt="">	
					</div>
					<div class="em_testi_title">
						<h2>AKIN UYGUR<span>Müşteri</span></h2>										
					</div>
				</div>								
			</div>
		</div>
	</div>
</div>

	
<!-- witrfm_footer_area -->
<?php include 'footer.php' ?>




        <!-- Include All JS -->
        <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.nivo.slider.pack.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="venobox/venobox.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.knob.js"></script>
        <script src="assets/js/BeerSlider.js"></script>
        <script src="assets/js/theme-pluginjs.js"></script>
        <script src="assets/js/jquery.meanmenu.js"></script>
        <script src="assets/js/ajax-mail.js"></script>		
        <script src="assets/js/theme.js"></script>
	
	</body>
</html>