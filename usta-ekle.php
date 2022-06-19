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
	<div class="d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12">
				<div class="uye-ol">
					<h1>Usta Ekle</h1>
					<form action="usta-ekle.php" method="post">
						<input type="text" name="usta_eposta" placeholder="Usta E-Posta">
					    <input type="password" name="usta_sifre" placeholder="Usta Şifresi">
					    <input type="text" name="usta_adi" placeholder="Usta Adı">
						<input type="text" name="usta_soyadi" placeholder="Usta Soyadı">
						<input type="text" name="usta_telefon" placeholder="Usta Telefon">
						<input type="submit" name="btn" value="Gonder">
					</form>
				</div>
			</div>				
		</div>	
	</div>
		<?php 
	if (isset($_POST['usta_eposta'], $_POST['usta_sifre'] ,$_POST['usta_adi'] ,$_POST['usta_soyadi'] ,$_POST['usta_telefon'])) {

    $usta_eposta = trim(filter_input(INPUT_POST, 'usta_eposta', FILTER_SANITIZE_EMAIL));
    $usta_sifre = trim(filter_input(INPUT_POST, 'usta_sifre', FILTER_SANITIZE_STRING));
    $usta_adi = trim(filter_input(INPUT_POST, 'usta_adi', FILTER_SANITIZE_STRING));
    $usta_soyadi = trim(filter_input(INPUT_POST, 'usta_soyadi', FILTER_SANITIZE_STRING));
    $usta_telefon = trim(filter_input(INPUT_POST, 'usta_telefon', FILTER_SANITIZE_STRING));


    if (empty($usta_eposta) || empty($usta_sifre) || empty($usta_adi) || empty($usta_soyadi) || empty($usta_telefon)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($usta_eposta, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {

        $baglanti = new PDO("mysql:host=localhost;dbname=kayaboya", "root", "");
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO ustalar(usta_adi, usta_soyadi, usta_eposta, usta_sifre, usta_telefon) VALUES(?, ?, ?, ?, ?)");
        $sorgu->bindParam(1, $usta_adi, PDO::PARAM_STR);
        $sorgu->bindParam(2, $usta_soyadi, PDO::PARAM_STR);
        $sorgu->bindParam(3, $usta_eposta, PDO::PARAM_STR);
        $sorgu->bindParam(4, $usta_sifre, PDO::PARAM_STR);
        $sorgu->bindParam(5, $usta_telefon, PDO::PARAM_STR);

        $sorgu->execute();

        echo "<p>Usta başarılı bir şekilde eklendi.</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglanti = null;
}
	?>
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
