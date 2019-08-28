<?php
    require_once('koneksi.php');
    mysqli_select_db($link,'forge');
    $output = '';
    if(isset($_POST['status']) && isset($_POST['id'])){
        $status = $_POST['status'];
        $id = $_POST['id'];
        $q = "UPDATE interns set status = '$status' where id = '$id'";
        mysqli_query($link,$q);
        echo "<script>alert('Status has been changed');document.location='indexint.php'</script>";
    }


?>