<?php 
	include ("baglan.php");
	session_start();		
if(isset($_SESSION['oturum'])){
$kuladi = $_SESSION['oturum']; 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Kaya Boya - Ustalar</title>
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

$siteadi = "http://localhost/kayaboya/";




$id = $_GET['id']; 



$sql = "SELECT * FROM ustalar where usta_id={$id}";

$sql2 = "SELECT * FROM yorumlar where usta_id={$id}";

$oku = $conn->query($sql);

$oku2 = $conn->query($sql2);


$oku = $oku->fetch(PDO::FETCH_ASSOC); // Tek veri


$oku2 = $oku2->fetch(PDO::FETCH_ASSOC); // Tek veri

extract($oku);


@extract($oku2);

?>

<img src="images/osman-kaya.jpg" class="img-responsive" style="width:500px;opacity:1;"></img>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">İsim</th>
      <th scope="col">Soy isim</th>
      <th scope="col">E-posta</th>
      <th scope="col">Telefon</th>
      <th scope="col">Usta Yorum</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?php echo $usta_id; ?></th>
      <td><?php echo $usta_adi; ?></td>
      <td><?php echo $usta_soyadi; ?></td>
      <td><?php echo $usta_eposta; ?></td>
      <td><?php echo $usta_telefon; ?></td>
      <?php 
if (empty($usta_yorum)) {
        echo("<td>-</td>");
    }else{
    	echo "<td>";
		echo $usta_yorum;
    	echo "</td>";
    }	
      ?>
    </tr>

  </tbody>
</table>
			
		</div>	
	</div>

	<br>
	<br>
	<br>
	<br>
		<a href="usta_yorum_ekle.php?id=<?php echo $usta_id; ?>"><button type="button" style="margin-left: 750px;" class="btn btn-success">Yorum Ekle</button></a>

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
