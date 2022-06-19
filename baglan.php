<?php
try {
     $conn = new PDO("mysql:host=localhost;dbname=kayaboya;charset=utf8", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
}
?>