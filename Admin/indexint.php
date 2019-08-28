<?php 
require_once("koneksi.php");

session_start();
if(!isset($_SESSION['email'])){
    echo "<script>document.location='login.php'</script>";    
}
include('header-Adm.php');
?>

<style>
    th{
        text-align:center;
        padding:1vh;
    }
    td{
        padding:1vh;
        font-size:12px;
    }
</style>
<div id="content" class="pmd-content content-area dashboard">
    <div class="container-fluid">
        <div class="row" id="card-masonry">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="pmd-card pmd-z-depth statistics-content">
                    <div class="pmd-card-title">
             <!-- SVG -->
                        <div class="media-left set-svg">
							<span class="service-icon img-circle bg-fill-green">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 24 24" style=" fill:#FFFFFF;">    
				                <path d="M 12 3 A 4 4 0 0 0 8 7 A 4 4 0 0 0 12 11 A 4 4 0 0 0 16 7 A 4 4 0 0 0 12 3 z M 8.8105469 14.392578 C 5.9935469 15.016578 3 17 3 17 L 3 21 L 21 21 L 21 17 C 21 17 18.006453 15.016578 15.189453 14.392578 C 14.459453 15.363578 13.308 16 12 16 C 10.692 16 9.5405469 15.363578 8.8105469 14.392578 z"></path>
				            </svg>
							</span>
						</div>
                <div class="media-body media-middle">
                    <h2 class="pmd-card-title-text typo-fill-secondary">Internships</h2>
                </div>
            </div>

                <!-- Start sini buat table? -->
            
            <div class="pmd-card-body text-center">
                <a class="btn btn-primary" href="add_job.php">Add job</a>
            <div class="input-group">
                <span class="input-group-addon">Search</span>
                <input type="text" name="search_text" id="search_text" class="form-control">
            </div>
            <br>
                <div id="result">
                </div>
            </table>
                    <div class="row">
                        <center>
                            <div class="col-md-9">
									<canvas id="canvas"></canvas>
					        </div>
                        </center>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function(){
        load_data();
        function load_data(query){
            $.ajax({
                url:'fetch.php',
                method:'post',
                data:{query:query},
                success:function(data)
                {
                    $('#result').html(data);
                }
            });
        }

        $('#search_text').keyup(function(){
            var txt = $(this).val();
            if(txt!=''){
                load_data(txt);
            }
            else{
               load_data();
            }
        });
    });
    </script>
</div>