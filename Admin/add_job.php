<?php 
session_start();
require_once("koneksi.php");
if(!isset($_SESSION['email'])){
    echo "<script>document.location='login.php'</script>";    
}

if(isset($_POST['namajob']) && isset($_POST['role']) && isset($_POST['requirem'])){

    $namajob = $_POST['namajob'];
    $role = $_POST['role'];
    $requirem = $_POST['requirem'];
    $query = "INSERT INTO intern_pos VALUES(NULL,'$namajob','$role','$requirem');";
    $q = mysqli_query($link,$query);
    if($q == true){
        echo "<script>alert('New job added!');document.location='add_job.php';</script>";
    }else{
        echo "<script>alert('Failed to add new job!');</script>";
    }
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8" content="width=device-width, initial-scale=1" name="viewport">
        <title>Tambah Job Internship</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <style>
            .box{
                padding:2%;
                margin:5%;
            }
            label{
                padding-left:2%;
                margin:2vh;
            }
            .ql-editor {
                min-height: 150px;
            }
        </style>
    </head>
<body>
    <div class="box">
    <form method="post" action="" id="wah"> 
        <label for="addjob">Job Name</label>
        <input type="text" name="namajob" class="form-control" placeholder="IT Engineer? Content Creator? Backend Developer?">
            <label for="contents">Job Role</label>
            <div id="editor-container">
            
            </div>
            <textarea id="hiddenArea" style="display:none" name="role"></textarea>
            <label for="contents">Job Requirements</label>
            <div id="editor-container2">
            
            </div>
            <textarea id="hiddenArea2" style="display:none" name="requirem"></textarea>
        <br>
        <input type="submit" class="btn btn-primary">
    </form>
</div>
<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<link href="https://cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
<!-- Initialize Quill editor -->
<script>
  var quill = new Quill('#editor-container',{
    theme: 'snow',
    placeholder:'Enter job role here.'
  });
  var quill2 = new Quill('#editor-container2',{
    theme: 'snow',
    placeholder:'Enter job requirements here.'
  });
  

  $(document).ready(function(){
    $("#wah").on('submit',function(){
        $("#hiddenArea").val($("#editor-container .ql-editor").html());
        $("#hiddenArea2").val($("#editor-container2 .ql-editor").html());
    });
  })



</script>
</body>
</html>