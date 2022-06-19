<select name="kategori">
<?php
require_once "baglan.php";
$secenek=$_GET["secenek"];
$sorgu=mysql_query("select * from ustalar where secenek=".$secenek);
if(mysql_affected_rows() > 0)
{
while($oku=mysql_fetch_assoc($sorgu))
{
echo '
 <option value="'.$oku["usta_id"].">'.$oku["usta_adi"].'</option>';
}
}
?>
</select>