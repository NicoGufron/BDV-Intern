<?php 
    require_once("koneksi.php");
    session_start();
    mysqli_select_db($link,"forge");
    if(!isset($_SESSION['email'])){
        echo "<script>document.location='login.php'</script>";
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM interns where id = '$id'";
        $q = mysqli_query($link,$query);
        while($row = mysqli_fetch_array($q)){
            $name = $row['name'];
            $email = $row['email'];
            $phone = $row['phone'];
            $university = $row['university'];
            $internpos = $row['internpos'];
            $interndegree = $row['interndegree'];
            $startDate = $row['startDate'];
            $endDate = $row['endDate'];
            $fieldstudy = $row['fieldstudy'];
            $resume = $row['resume'];
            $linkedin = $row['linkedin'];
        }
    }
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $university = $_POST['university'];
        $internpos = $_POST['internpos'];
        $interndegree = $_POST['interndeg'];
        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $fieldstudy = $_POST['fieldstudy'];
        $resume = $_POST['resume'];
        $linkedin = $_POST['linkedin'];

        $q = "UPDATE interns set name='$name',email='$email',phone='$phone',university='$university',internpos='$internpos',interndegree='$interndegree',startDate='$startDate',endDate='$endDate',fieldstudy='$fieldstudy',resume='$resume',linkedin='$linkedin' where id = $id";
        $query = mysqli_query($link,$q);
        if($query == true){
            echo "<script>alert('Data berhasil diubah');document.location='editint.php?id=".$id."'</script>";
        }else{
            echo "<script>alert('Data gagal diubah')</script>";
        }
        
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bdv</title>

    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>  
    <link rel="stylesheet" href="assets/css/normailize.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/formstyle.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">


</head>
<body>
        <main>
                <div class="container">
                  <div class="container-2">
                    <div class="row-job">
                      
                      <div class="head">
                          <a href="indexint.php" class="btn btn-primary btn-lg"> &laquo; Previous</a>
                        <div>
                            <h2>Editing for <?php echo $name ?></h2>
                        </div> 
                      </div>
                  </div>
                  </div>
                  <form class="form" id="bdv-form" method="POST" action="">
                    <!-- bagian1 -->  
                        <div class="legend">
                            <legend class="personal">Personal Information</legend>
                        </div>
                        <label for="name"  id="name-label">Name</label>
                        <input type="text" name="name" id="name" required placeholder="Insert Name" value="<?php echo $name?>">
                        <label for="email" id="email-label">Email</label>
                        <input type="email" name= "email" id="email" required placeholder="username@mail.com" value="<?php echo $email?>">
                        <label for="phone" id="phone-label">Phone</label>
                        <input type="text" name="phone" id="phone" required placeholder="Enter Phone Number" value="<?php echo $phone?>">
                        <label for="degree" id="degree-label" >Degree</label>
                        <select  id="dropdown" name='interndeg'>
                                    <option value="<?php echo $interndegree ?>" selected><?php echo $interndegree?></option>
                                    <option value="High School Diploma" >High school diploma </option>
                                    <option value="Bachelor's Degree" >Bachelor's degree</option>
                                    <option value="Master's Degree">Master's degree</option>
                        </select>
                        <label for="dropdown" id="dropdown-label">University</label>
                        <select  id="dropdown" style="overflow: hidden" name="university">
                                <option value="<?php echo $university?>" selected><?php echo $university?></option>
                                <option value="Telkom">Telkom</option>
                                <option value="ITB">ITB</option>
                                <option value="UGM">UGM</option>
                                <option value="Maranatha">MARANATHA</option>
                        </select>   
                    <!-- end bagian1 -->
                    <!-- bagian2 -->
                        <div class="legend">
                                <legend class="personal">Internship</legend>
                        </div>
                        <label for="dropdown" id="dropdown-label">Position</label>
                        <select id="dropdown" style="overflow: hidden" value="<?php echo $internpos?>" name="internpos">
                                <option value="<?php echo $internpos?>"  selected><?php echo $internpos?></option>
                                <option value="IT Engineer">IT Engineer</option>
                                <option value="IT Support">IT Support</option>
                                <option value="Designer">Designer</option>
                        </select>
                        <label for="field" id="field-label">Field Study</label>
                        <input type="text" id="field" placeholder="Field Study" value="<?php echo $fieldstudy?>" name="fieldstudy">
                        <label for="date" id="date-label">Set Internship Date</label>
                        <input type="text" name="datefilter" value="<?php echo $startDate . '-' . $endDate?>" placeholder="Set Date" />
                        <input type="hidden" id="start" name="startDate" value="<?php echo $startDate?>" />
                        <input type="hidden" id="end" name="endDate" value="<?php echo $endDate?>"/>
                        <script type="text/javascript">
                        $(function() {

                          $('input[name="datefilter"]').daterangepicker({
                              autoUpdateInput: false,
                              locale: {
                                  cancelLabel: 'Clear'
                              }
                          });

                          $('input[name="datefilter"]').on('apply.daterangepicker', function(ev, picker) {
                              $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                              $("#start").val(picker.startDate.format('MM/DD/YYYY'));
                              $("#end").val(picker.endDate.format('MM/DD/YYYY'));
                          });

                          $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                              $(this).val('');
                          });

                        });
                        </script>
                        
                        <!-- end bagian2 -->
                        <div class="legend"><legend class="personal">Portofolio</legend>
                        <label for="resume" id="resume-label">Resume</label>
                        <input style="width: 100%" type="text" id="resume" placeholder="Paste Yor Link Here" value="<?php echo $resume?>" name="resume">
                        <label for="linkedin" id="linkedin-label">Linkedin</label>
                        <input style="width: 100%" type="text" id="linkedin" placeholder="Paste Yor Link Here" value="<?php echo $linkedin?>" name="linkedin">

                        <div style="margin-top: 48px;">
                            <p class="text-center" id="error-message"></p>
                            </div>
                            <div class="text-center button-wrapper">
                            <button type="submit" class="button primary" name="submit">Apply changes</button>
                            </div>
                    </div>

                  </form>


                </div>
              </main>
    
</body>
<script src="assets/js/form.js"></script>
</html>