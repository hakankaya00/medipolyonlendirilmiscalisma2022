<?php 
session_start();
if(isset($_SESSION['oturum'])){
$kuladi = $_SESSION['oturum']; 

?>


<?php header('Location: '."index.php"); ?>

<?php } else { include "uye-giris-islem.php"; } ?>
