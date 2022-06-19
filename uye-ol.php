<?php 
	require_once("baglan.php");
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
					<h1>Üye Ol</h1>
					<form action="uye-ol.php" method="post">
						<input type="text" name="mail" placeholder="Mail Adresiniz">
						<input type="password" name="sifre" placeholder="Şifreniz">
						<input type="submit" name="btn" value="Gonder">
					</form>
				</div>
			</div>				
		</div>	
	</div>
	<?php 
	if (isset($_POST['mail'], $_POST['sifre'])) {

    $mail = trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_EMAIL));
    $sifre = trim(filter_input(INPUT_POST, 'sifre', FILTER_SANITIZE_STRING));


    if (empty($mail) || empty($sifre)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresin girin!</p>");
    }

    try {

        $baglanti = new PDO("mysql:host=localhost;dbname=kayaboya", "root", "");
        $baglanti->exec("SET NAMES utf8");
        $baglanti->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sorgu = $baglanti->prepare("INSERT INTO kullanici(mail, sifre) VALUES(?, ?)");
        $sorgu->bindParam(1, $mail, PDO::PARAM_STR);
        $sorgu->bindParam(2, $sifre, PDO::PARAM_STR);

        $sorgu->execute();

        echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

    } catch (PDOException $e) {
        die($e->getMessage());
    }

    $baglanti = null;
}
	?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>