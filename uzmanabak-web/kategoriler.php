<?php
include 'functions.php';


?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Kategoriler - Uzmana Bak</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Favicon Icon -->
        <link rel="icon"  type="image/png" href="./assets//UY ICON//logo/blue.png">		
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

<!-- breadcumb-area -->
<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>KATEGORİLER</h2>
				</div>
				</div>
                   
			</div>
		</div>
	</div>
</div>

<br>
<br>
		 <div class="bgimgload">	
			<div class="row blog-messonary blog_top">
				<!-- solutech_blog_01  -->
				<?php 
				foreach ($categories as $category) {
					echo '<div class="witr_nth_child col-lg-4  col-md-6 col-sm-8 grid-item   witr_all_mb_30">
					<div class="blog-part all_blog_color">
						<div class="blog_part_inner">
							<div class="witr_blog_imags">
								<div class="blog-img">
									<a href="#"><img src="https://ustasiyapsin-api.herokuapp.com/api/uploadImage/get-image/'.$category['img'].'" alt=""> </a>
								</div>
							</div>
							<div class="wblog-content blog-content-2 all_blog_color">
								<center>				<h5><a href="kategori/'.$category['name'].'">'.$category['name'].'</a></h5>
								<a class="btn" href="sektor.php?id='.$category['name'].'">GÖZ AT</a>
								</center>
				
							</div>
						</div>
					</div>
				</div>';
				}
				?>

				
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