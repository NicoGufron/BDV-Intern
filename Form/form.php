<?php
require_once("koneksi.php");
if(isset($_GET['pos'])){
    $pos = $_GET['pos'];

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
    <script src="//cdnjs.cloudflare.com/ajax/libs/validate.js/0.13.1/validate.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

    <!-- bootsrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>  
    <link rel="stylesheet" href="normailize.css"/>
    <link rel="stylesheet" href="formstyle.css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">


</head>
<body>
        <main>
                <div class="container">
                  <div class="container-2">
                    <div class="row-job">
                      <span class="nav" ><a href="home.php" id="">Home</a> > <span><a href="page.php?pos=<?php echo $pos?>"><?php echo $pos?></a>> Apply</span></span>
                      <div class="head">
                        <div>
                            <h2><?php echo $pos?></h2>
                            <h3 style="padding-top: 12px">Bandung</h3>
                        </div> 
                          <a class="navbar-brand img-responsive logo" href="#home"><img src="Images\Bdv.PNG" alt="Logo" width="140" height="134"></a>            
                      </div>
                  </div>
                  </div>
                  <form class="form" id="bdv-form" method="POST" action="submit.php" onSubmit="return check_phone(this)">
                    <!-- bagian1 -->  
                        <div class="legend">
                            <legend class="personal">Personal Information</legend>
                        </div>
                        <label for="name" id="name-label">Name</label>
                        <input type="text" id="name" required placeholder="Insert Name" value="" name="name">
                        <label for="email" id="email-label">Email</label>
                        <input type="email" id="email" required placeholder="username@mail.com" value="" name="email">                      
                        <label for="phone" id="phone-label">Phone</label>
                        <h6 style="color:#f5365c;font-size:14px" >*Example 08xxxxxxxxxx *</h6>
                        <input type="text" id="phone" required placeholder="Enter Phone Number" value="" pattern="^\d{12}$|^\d{11}$" max="12" required name="phone">
                        <!-- <script type="text/javascript">
                              function check_phone(phone){
                                var regex =/^(^\+62\s?|^0)(\d{3,4}-?){2}\d{3,4}$/;
                                if(regex.test(phone.value)){
                                  return true;

                                  }
                                else{
                                    alert("Harap Masukan Nomor Telephone Yang Valid");
                                    return false;
                                }
                                }
                           
                        </script> -->
                        <label for="degree" id="degree-label" >Degree</label>
                        <select required name="interndeg" id="dropdown" >
                                    <option value="" disabled selected hidden>Please choose...</option>
                                    <option value="High School Diploma" >High School Diploma </option>
                                    <option value="Bachelor's Degree" >Bachelor's Degree</option>
                                    <option value="Master's Degree">Master's Degree</option>
                        </select>
                        <label for="dropdown" id="dropdown-label">University</label>
                        <select name="universitas" id="universitas" required> 
                                <option value="" disabled selected hidden>Please choose...</option>                             
                                <option value="Telkom University">Telkom University</option>
                                <option value="Institute Teknologi Bandung">Institute Teknologi Bandung</option>
                                <option value="Universitas Gajah Mada">Universitas Gajah Mada</option>
                                <option value="Universitas Kristen Maranatha">Universitas Kristen Maranatha</option>
                                <option value="lain">Lainnya</option>
                        </select>
                        <div id="inputuniv">
                          <br>
                        </div>
                        <script>
                            $('#universitas').on('change',function(){
                              console.log(this.value);
                                if(this.value == 'lain'){
                                  $('#inputuniv').append('<input type="text" id="namauniv" name="universitas" style="width:100%" placeholder="Enter your university">');
                                }
                                else{
                                  $("#namauniv").remove();
                                }
                            })
                        </script>   
                    <!-- end bagian1 -->

                    <!-- bagian2 -->
                        <div class="legend">
                                <legend class="personal">Internship</legend>
                        </div>
                        <label for="dropdown" id="dropdown-label">Position</label>
                        <select name="internpos" id="dropdown" value="" required>
                                <option value="<?php echo $pos?>"selected hidden><?php echo $pos?></option>
                                <option value="IT Engineer">IT Engineer</option>
                                <option value="IT Support">IT Support</option>
                                <option value="IT Designer">Designer</option>
                        </select>
                        <label for="field" id="field-label">Field Study</label>
                        <input type="text" id="field" required placeholder="Field Study" value="" name="fieldStudy">
                        <!-- <script>
                              var field = document.getElementById("field");
                              var fieldValue = field.value;
                              submit.addEventListener("click", function() {
                                if (fieldValue.length === 0) {
                                  name.classList.add("invalid");
                                  errorMessage.innerText = "Please Enter Field Study";
                                  return errorMessage.innerText;
                                } 
                                else {
                                  name.classList.add("valid");
                                }
                              });

                        </script> -->
                        <label for="date" id="date-label">Set Internship Date</label>
                        <input type="text" name="datefilter" required value="" id="date" />
                        <input type="hidden" name="startDate" id="startDate">
                        <input type="hidden" name="endDate" id="endDate">
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
                                $("#startDate").val(picker.startDate.format('MM/DD/YYYY'));
                                $("#endDate").val(picker.endDate.format("DD/MM/YYYY"));
                            });
                          
                            $('input[name="datefilter"]').on('cancel.daterangepicker', function(ev, picker) {
                                $(this).val('');
                            });
                          
                          });
                          </script>
                        
                        <!-- end bagian2 -->
                        <div class="legend"><legend class="personal">Portofolio</legend> </div>
                          <label for="textarea" id="textarea-label">Cover Letter</label>
                          <textarea style="font-size:16px" id="textarea" placeholder="Enter summary" value="" name="letter"></textarea>
                          <label for="resume" id="resume-label">Resume</label>
                          <input  type="text" id="link" required placeholder="Paste Yor Link Here" value="" name="resume">
                          <label for="linkedin" id="linkedin-label">Linkedin</label>
                          <input type="text" id="link" required placeholder="Paste Yor Link Here" value="" name="linkedin">

                          <div style="margin-top: 48px;">
                              <p class="text-center" id="error-message"></p>
                              </div>
                              <div class="text-center button-wrapper">
                              <button type="submit" class="button primary" id="submit" >Submit Your Application</button>
                              </div>
                    </div>
                  </form>
              </main>
    
</body>
<script src="form.js"></script>
</html>