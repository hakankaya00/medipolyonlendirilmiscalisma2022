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
<?php 
	include ("menu.php");
?>
</header>
	<div class="d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12">
				<div class="uye-ol">
					<h1>İş Teklifi Ekle</h1>
					<form action="is-teklifi-ekle.php" method="post">
						 <input type="text" name="renk" placeholder="Renk seçiniz">
						 <select class="tur" name="tur" size="1">
						    <option value="Plastik">Plastik</option>
						    <option value="Silikon">Silikon</option>
						    <option value="Yagli">Yaglı</option>
 						 </select>
 						  <select name="usta" size="1">
			<?php 
$query = $conn->query("SELECT * FROM ustalar", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $row ){
			print "<option value=".$row['usta_id'].">".$row['usta_adi']."</option>";
		}
	}
			?>

</select>

 						 
					    <input type="text" name="alan" placeholder="M2 Alan">
					    <input type="text" name="adres" placeholder="Adres">
						<input type="text" name="oda" placeholder="Oda Sayisi">
						<input type="submit" name="btn" value="Gonder">
					</form>
				</div>
			</div>				
		</div>	
	</div>
		<?php 
	if (isset($_POST['renk'], $_POST['alan'] ,$_POST['adres'] ,$_POST['oda'])) {

    $renk = trim(filter_input(INPUT_POST, 'renk', FILTER_SANITIZE_EMAIL));
    $alan = trim(filter_input(INPUT_POST, 'alan', FILTER_SANITIZE_STRING));
    $adres = trim(filter_input(INPUT_POST, 'adres', FILTER_SANITIZE_STRING));
    $oda = trim(filter_input(INPUT_POST, 'oda', FILTER_SANITIZE_STRING));
    $tur = $_POST['tur'];
    $usta = $_POST['usta'];
    if (empty($renk) || empty($alan) || empty($adres) || empty($oda)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    try {

        $baglanti = new PDO("mysql:host=localhost;dbname=kayaboya", "root", "");
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO isteklifi(renk,tur,usta,alan,adres,oda) VALUES(?, ?, ?, ?, ?, ?)");
        $sorgu->bindParam(1, $renk, PDO::PARAM_STR);
        $sorgu->bindParam(2, $tur, PDO::PARAM_STR);
        $sorgu->bindParam(3, $usta, PDO::PARAM_STR);
        $sorgu->bindParam(4, $alan, PDO::PARAM_STR);
        $sorgu->bindParam(5, $adres, PDO::PARAM_STR);
        $sorgu->bindParam(6, $oda, PDO::PARAM_STR);

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
