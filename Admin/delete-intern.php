<?php
require_once('koneksi.php');
session_start();
$role_session = $_SESSION['role'];
if($_SESSION['role']!="superuser"){
    echo "<script>document.location='index.php'</script>";
}


mysqli_select_db($link,"forge");
if($_GET['id']){
    $id = $_GET['id'];
    $q = "DELETE from interns where id = '$id'";
    mysqli_query($link,$q);
    echo "<script>alert('Data dihapus');document.location='indexint.php'</script>";
}
?>