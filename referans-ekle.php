<?php 
include ("baglan.php");
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


</head>
<body>
		<header>
	<ul>
		<li><a href="index.php">Anasayfa</a></li>
		<li><a href="referans-ekle.php">Referanslar</a></li>
		<li><a href="usta-ekle.php">Ustalar</a></li>
		<li><a href="#">İş Teklifi</a></li>
		<li><a href="#">Hakkımızda</a></li>
		<li><a href="uye-giris.php">Üye Girişi</a></li>
		<li><a href="uye-ol.php">Üye Ol</a></li>
	</ul>
</header>
	<div class="d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12">
				<div class="uye-ol">
					<h1>Referans Ekle</h1>
					<form action="referans-ekle.php" method="post">
						<input type="text" name="referans_adi" placeholder="Referans Adı">
					    <input type="text" name="boya_cesidi" placeholder="Boya Çeşidi">
					    <input type="text" name="ucret" placeholder="Ücret">
						<input type="text" name="konum" placeholder="Konum">
						<input type="submit" name="btn" value="Gonder">
					</form>
				</div>
			</div>				
		</div>	
	</div>
		<?php 
	if (isset($_POST['referans_adi'], $_POST['boya_cesidi'] ,$_POST['ucret'] ,$_POST['konum'])) {

    $referans_adi = trim(filter_input(INPUT_POST, 'referans_adi', FILTER_SANITIZE_EMAIL));
    $boya_cesidi = trim(filter_input(INPUT_POST, 'boya_cesidi', FILTER_SANITIZE_STRING));
    $ucret = trim(filter_input(INPUT_POST, 'ucret', FILTER_SANITIZE_STRING));
    $konum = trim(filter_input(INPUT_POST, 'konum', FILTER_SANITIZE_STRING));


    if (empty($referans_adi) || empty($boya_cesidi) || empty($ucret) || empty($konum)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    try {

        $baglanti = new PDO("mysql:host=localhost;dbname=kayaboya", "root", "");
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO referans(referans_adi, boya_cesidi, ucret, konum) VALUES(?, ?, ?, ?)");
        $sorgu->bindParam(1, $referans_adi, PDO::PARAM_STR);
        $sorgu->bindParam(2, $boya_cesidi, PDO::PARAM_STR);
        $sorgu->bindParam(3, $ucret, PDO::PARAM_STR);
        $sorgu->bindParam(4, $konum, PDO::PARAM_STR);

        $sorgu->execute();

        echo "<p>Referans başarılı bir şekilde eklendi.</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglanti = null;
}
	?>
	<br>
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
<body>
	<div class="d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12">
				<div class="uye-ol">
					<h1><a href="uye-giris.php">Lütfen giriş yapınız</a></h1>
				</div>
			</div>				
		</div>	
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>'; } ?>
