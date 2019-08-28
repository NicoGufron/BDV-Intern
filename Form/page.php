<?php 
require_once("koneksi.php");
include "page2.html";

function slugify($text){
  $text = preg_replace('~[^\pL\d]+~u', ' ', $text);
  return $text;
}

if(isset($_GET["pos"])){
    $pos = $_GET["pos"];
    $yow = slugify($pos);
    $query = "SELECT * from intern_pos where position = '$yow';";
    $q = mysqli_query($link, $query);
    while($row = mysqli_fetch_array($q)){

        $role = $row['role'];
        $requirem = $row['requirem'];

    }
}
?>
 <div class="container container-2">
            
            
<div class="row des">
        <div class="col-lg-6">
                    <p class="nav">Home ><span><a href="" class="nav"><?php echo $yow; ?></a></span></p>
                    <?php echo "<h1>$yow</h1>" ?>
                    <h2>About BDV</h2>
                    <div class="text">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit. Nunc eu molestie turpis, et pretium ligula. Curabitur commodo leo nibh, in semper enim ultricies vel. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus nec lacinia lacus.</p>
                    </div>
                    <h2>About Role</h2>
                    <div class="text">
                      <p><?php echo $role;?></p>  
                    </div>
                    <h2>Requirements</h2>
                    <div class="text">
                      <p><?php echo $requirem;?></p>
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
    <form method="GET">
        <h2>GET YOUR OPPORTUNITY TO START YOUR CAREER</h2>
        <h2>WITH BDV</h2>
        <a href="form.php?pos=<?php echo $yow;?>" class="primary-button">APPLY INTERN</a>
    </form>
</div>
<footer class="page-footer font-small blue pt-4">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row footer">
  
        <!-- Grid column -->
        <div class="col-md-3 mt-md-0 mt-3">
  
          <!-- Content -->
          <h5 class="text-h">Bandung Digital Valley</h5>
          <h6>Description</h6>
          <p class="tp">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>

  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none pb-3">
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-h">Latest Events</h5>
          <h6>Description</h6>
          <div class="tp">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
        </div>
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-h">Upcoming events</h5>
          <h6>Description</h6>
          <div class="tp">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit. </p>
        </div>
        </div>
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
                <!-- Links -->
                <h5 class="text-h">Contact Us</h5>
                <h6>Description</h6>
                <div class="tp">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vulputate venenatis massa, quis volutpat ligula. In id magna in orci maximus maximus. Nullam nec sagittis velit.</p>
                </div>
              </div>
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      Bandung Digital Valley<br>
      Copyright 2019
    </div>
    <!-- Copyright -->
  
  </footer>
