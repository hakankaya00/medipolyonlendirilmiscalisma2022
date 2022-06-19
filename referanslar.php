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
			<?php 
$query = $conn->query("SELECT * FROM referans", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $row ){
			print "
			<div class='col-md-4'>
					<div class='referans-listele'>
						<img src='images/referans.png'>
						<ul>
							<li>".$row['referans_adi']."</li>
							<li>".$row['boya_cesidi']."</li>
							<li>".$row['ucret']." tl</li>
							<li>".$row['konum']."</li>
						</ul>
					</div>
				</div>

			";
		}
	}
			?>
			
		</div>	
	</div>
	<br>
	<br>
	<br>
	<br>
		<a href="referans-ekle.php"><button type="button" style="margin-left: 750px;" class="btn btn-success">Referans Ekle</button></a>

	<br>
	<br>
	<br>
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
