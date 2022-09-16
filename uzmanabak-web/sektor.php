<?php
include 'functions.php';
function slugify($text) {
    $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
    $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
    $text = strtolower(str_replace($find, $replace, $text));
    $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
    $text = trim(preg_replace('/\s+/', ' ', $text));
    $text = str_replace(' ', '-', $text);

    return $text;
}
$id = $_GET['id'];
if(!isset($id)){
	header('Location: index.php');
	die();
}
$servis = sector_get_by_cat(slugify($id));

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
					<h2><?php echo lcfirst($id); ?></h2>
				</div>
				</div>
                   
			</div>
		</div>
	</div>
</div>

<br>
<br>
				<!-- solutech_blog_01  -->
				<?php 
				foreach ($servis as $ser) {
					echo '<div class="witr_nth_child col-lg-4  col-md-6 col-sm-8 grid-item   witr_all_mb_30">
					<div class="blog-part all_blog_color">
						<div class="blog_part_inner">
							<div class="witr_blog_imags">
								<div class="blog-img">
									<a href="#"><img src="https://ustasiyapsin-api.herokuapp.com/api/uploadImage/get-image/'.$ser['img'].'" alt=""> </a>
								</div>
							</div>
							<div class="wblog-content blog-content-2 all_blog_color">
								<center>				<h5><a href="kategori/'.$ser['name'].'">'.$ser['name'].'</a></h5>
								<a class="btn" data-toggle="modal" style="color:#fff !important;" data-target="#exampleModalLong" >MOBİL UYGULAMAMIZI İNDİR</a>
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

	<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
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
      </div></div></div></div></div></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
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