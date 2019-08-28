<?php 
require_once("koneksi.php");
mysqli_select_db($link,"forge");
$query = "SELECT name from interns";
$q = mysqli_query($link,$query);
while($row = mysqli_fetch_array($q)){
    $name = $row['name'];
}
echo $name;
include "header-Adm.php";
?>
