<?php
	include ("baglan.php");
	
	$query = $conn->query("SELECT * FROM kullanici", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
		foreach( $query as $row ){
			print "<div style='padding:5px; margin:5px; background-color:#fff;'>"."Mail Adresin : ".$row['mail']."<br>"."Şifren : ".$row['sifre']."</div>";
		}
	}
?>