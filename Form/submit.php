<?php
$link = mysqli_connect("127.0.0.1","root","","webmember");

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $interndeg = $_POST['interndeg'];
    $universitas = $_POST['universitas'];
    $internpos = $_POST['internpos'];
    $fieldStudy = $_POST['fieldStudy'];
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];
    $letter = $_POST['letter'];
    $resume = $_POST['resume'];
    $linkedin = $_POST['linkedin'];
    $status = "Pending";

    $query = "INSERT INTO tbl_interns VALUES (NULL,'$name','$email','$phone','$universitas','$internpos','$interndeg','$startDate','$endDate','$fieldStudy','$letter','$resume','$linkedin','$status');";
    $q = mysqli_query($link,$query) or die(mysqli_error($link));
    echo "<script>alert('Data sudah disimpan!');document.location='form.html'</script>";

}


?>