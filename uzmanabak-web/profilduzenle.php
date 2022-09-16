  <?php
include 'functions.php';

$user = user_get($_SESSION['id']);

?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
		
		<meta charset="UTF-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Uzmanı Baksın</title>
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
			
<style>
    .card{
                    background: linear-gradient(87deg, #fff 0, #6e1b9d 100%) !important;
                }
</style>
    </head>
<body>

<?php include 'header.php';?>


      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary border-0 mb-0">
            <div class="card-header bg-transparent pb-5">
              
              <div class="btn-wrapper text-center">           
                          <h6>  PROFİL DEĞİŞİKLİKLERİNİZİ GİRİNİZ!</h6>
                </div>
            </div>
            <div class="duzenle">
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              
              </div>
              <form role="form" action="inc/auth.php" method="POST">
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Adınız" name="name" type="name" value="<?php echo $user["name"]; ?>">
                    <input type="hidden" name="x" value="update">
                    <input type="hidden" name="_id" value="<?php echo $user["_id"]; ?>">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Soyadınız" name="surname" type="surname" value="<?php echo $user["surname"]; ?>">
                  </div>
                </div>
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Telefon Numarasnız" name="gsm" type="text" value="<?php echo $user["gsm"]; ?>">
                  </div>
                </div>
				
				<div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Şifre (boş bırakılırsa değişmez)" name="password" type="password">
                  </div>
                </div>
              
          
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4"> DEĞİŞİKLİKLERİ KAYDET</button> <br>
                </div>
              </form>
            </div>
          </div>
          <div class="row mt-3">
           
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
 
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>


</body>

</html>