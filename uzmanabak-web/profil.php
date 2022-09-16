<?php
include 'functions.php';

$user = user_get($_SESSION['id']);

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
		
<style>
    .card{
                    background: linear-gradient(87deg, #fff 0, #6e1b9d 100%) !important;
                }
</style>
    </head>
<body>

<?php include 'header.php';?>



<div id="stylex" class="stylex">
  

<center>
	<!-- profil card -->
<div class="card">
	<br>
  <div class="ds-top"></div>
  <div class="avatar-holder">
	  <?php if($user['img'] != ""){ ?> 
		<img width="250" height="250" src="https://ustasiyapsin-api.herokuapp.com/api/uploadImage/get-image/<?php echo $user["img"]; ?>" alt="Profil fotoğrafı">
		<?php }else{?>
    <img width="250" height="250" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Profil fotoğrafı"> <?php }?>
  </div>
  
 
  <div class="ds-info">
    <div class="ds pens">
      <h6 title="Kayıtlı olan bilgileriniz...">PROFİL BİLGİLERİNİZ</h6>
	  <hr>
	  <span>AD-Soyad :</span><h6 title="Kayıtlı olan soyadınız..."><?php echo $user['name']." ".$user['surname']; ?> </h6>
	
    
    </div>
    <div class="ds projects">
	<hr>
	<span>Telefon numarası :</span> <h6 ><?php echo $user["gsm"]; ?> </h6>
     
    </div>
    <div class="ds posts">
	<hr>
      <span>E-mail :</span><h6 title="Number of posts"><?php echo $user["mail"]; ?> </i></h6>
	  <hr>
	  <div class="button">
    <a href="./profilduzenle.php" class="btn" >DÜZENLE <i class="fas fa-edit"></i></a>
  </div>
    </div>
  </div>
  
</div>

</div>
</center>
	</body>
</html>



