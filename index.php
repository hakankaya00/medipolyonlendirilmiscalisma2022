<?php 
session_start();
if(isset($_SESSION['oturum'])){
$kuladi = $_SESSION['oturum']; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Kaya Boya - Anasayfa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link href="dist/skitter.css" type="text/css" media="all" rel="stylesheet" />
  
  <!-- Skitter JS -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="dist/jquery.skitter.min.js"></script>
  
  <!-- Init Skitter -->
  <script type="text/javascript" language="javascript">
    $(document).ready(function() {
      $('.skitter-large').skitter({
        responsive: {
          small: {
            animation: 'fade',
            max_width: 768,
            suffix: '-small'
          },
          medium: {
            animation: 'directionRight',
            max_width: 1024,
            suffix: '-medium'
          }
        }
      });
    });
  </script>
  
  <!-- Custom -->
  <script src="js/app.js"></script>
  <link href="css/styles.css" type="text/css" media="all" rel="stylesheet" />

</head>
<body class="bg">

<header>
<?php 
	include ("menu.php");
?>
	giris yapildi
	  <div id="page">
    <div id="content">
      <div class="skitter-large-box">
        <div class="skitter skitter-large with-dots">
          <ul>
            <li><a href="#cube"><img src="images/bg.png" style="width:1200px;" class="circles" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#see-more" class="btn btn-small btn-yellow">See more</a></p></div></li>
            <li><a href="#cubeRandom"><img src="images/bg2.png" class="circlesInside" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore officiis voluptatum reprehenderit vitae amet beatae dolorem labore dignissimos nesciunt. Harum, blanditiis suscipit beatae unde id non, necessitatibus praesentium nisi quidem. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li>
            <li><a href="#block"><img src="images/osman-kaya.jpg" class="circlesRotate" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li>
            <li><a href="#cubeStop"><img src="images/referans.png" class="cube" /></a><div class="label_text"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit eos nihil corrupti inventore id culpa repellat molestiae quam at molestias. <a href="#" class="btn btn-small btn-yellow">See more</a></p></div></li> 
          </ul>
        </div>
      </div>
    </div>

  </div>


	<br><br>


	<a href="cikis-yap.php"><button type="button" style="margin-left: 1400px;" class="btn btn-danger">çıkış yap</button></a>
	<br>
	<br>

<footer>
	<ul class="info">
		<li><i class="bi bi-house-door-fill">Sarıyer Merkez Mahallesi Eski Sular Caddesi No:1 Daire:8 Sarıyer/İstanbul</i></li>
		<li><i class="bi bi-telephone-forward">0 (535) 313 2701</i></li>
		<li><i class="bi bi-telephone-forward">0 (535) 313 2701</i></li>
		<li><i class="bi bi-envelope">hakan.kaya3630@gmail.com</i></li>
	</ul>

	<ul class="social-media">
		<li><i class="bi bi-facebook"></i></li>
		<li><i class="bi bi-twitter"></i></li>
		<li><i class="bi bi-instagram"></i></li>
		<li><i class="bi bi-linkedin"></i></li>

	</ul>

</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { echo '<!DOCTYPE html>
<html>
<head>
	<title>Kaya Boya - Anasayfa</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">


</head>
<body class="bg">

<header>
	<ul>
		<li><a href="index.php">Anasayfa</a></li>
		<li><a href="#">Referanslar</a></li>
		<li><a href="usta-ekle.php">Ustalar</a></li>
		<li><a href="#">İş Teklifi</a></li>
		<li><a href="#">Hakkımızda</a></li>
		<li><a href="uye-giris.php">Üye Girişi</a></li>
		<li><a href="uye-ol.php">Üye Ol</a></li>
	</ul>
</header>


giris yapilmadi
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<footer>
	<ul class="info">
		<li><i class="bi bi-house-door-fill">Sarıyer Merkez Mahallesi Eski Sular Caddesi No:1 Daire:8 Sarıyer/İstanbul</i></li>
		<li><i class="bi bi-telephone-forward">0 (535) 313 2701</i></li>
		<li><i class="bi bi-telephone-forward">0 (535) 313 2701</i></li>
		<li><i class="bi bi-envelope">hakan.kaya3630@gmail.com</i></li>
	</ul>

	<ul class="social-media">
		<li><i class="bi bi-facebook"></i></li>
		<li><i class="bi bi-twitter"></i></li>
		<li><i class="bi bi-instagram"></i></li>
		<li><i class="bi bi-linkedin"></i></li>

	</ul>

</footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>'; } ?>