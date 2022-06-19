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
<body class="bg">

<?php

	include ("baglan.php");
	
	if($_POST)
	{
		$mail =$_POST["mail"];
		$sifre =$_POST["sifre"];


		$query  = $conn->query("SELECT * FROM kullanici WHERE mail='$mail' && sifre='$sifre'",PDO::FETCH_ASSOC);
		if ( $say = $query -> rowCount() ){

			if( $say > 0 ){
				$_SESSION['oturum']=true;
				$_SESSION['mail']=$mail;
				$_SESSION['sifre']=$sifre;
			    header('Location: '."index.php");
				print 'Hoş geldiniz '.$mail;
				echo '
					<a href="cikis-yap.php">çıkış yap</a>
				';
				
			}else{
				echo "oturum açılmadı hata";
			}
		}else{
			echo "<h1>Kullanıcı adı veya şifre hatalı</h1>";
			echo '
					<div class="container d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12 ">
				<div class="uye-girisi">
					<h1>Üye Girişi</h1>
					<form action="#" method="post">
						<input type="text" name="mail" placeholder="Mail Adresiniz">
						<input type="password" name="sifre" placeholder="Şifreniz">
						<input type="checkbox" name=""><span class="hatirla">Beni Hatırla</span>
						<span class="sifremi-unuttum">Şifremi unuttum</span>
						<input type="submit" name="">
					</form>
				</div>
			</div>				
		</div>	
	</div>
			';
		}
	}else{
		echo '
				<div class="container d-flex justify-content-center">
		<div class="row ">
			<div class="col-md-12 ">
				<div class="uye-girisi">
					<h1>Üye Girişi</h1>
					<form action="#" method="post">
						<input type="text" name="mail" placeholder="Mail Adresiniz">
						<input type="password" name="sifre" placeholder="Şifreniz">
						<input type="checkbox" name=""><span class="hatirla">Beni Hatırla</span>
						<span class="sifremi-unuttum">Şifremi unuttum</span>
						<input type="submit" name="">
					</form>
				</div>
			</div>				
		</div>	
	</div>
		';
		echo 'üye değilseniz üye olmak için <a href="uye-ol.php">Tıklayın</a>';
	}
	
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>