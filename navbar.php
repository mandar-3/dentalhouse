<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
    <!-- <span class='fa-stack fa-lg'>
          <i class='fas fa-circle fa-stack-2x'></i>
          <i class='fas fa-tooth fa-stack-1x fa-inverse'></i>
      </span> -->
      <img src="image/icon.png" alt="" width="40px" class="p-1">
     <h3> <a class="navbar-brand text-dark" href="#">DENTAL HOUSE</a></h3>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link text-dark" aria-current="page" href="index.php">Home</a>
          <a class="nav-link text-dark" href="Aboutus.php">About us</a>
          <a class="nav-link text-dark" href="service.php">Our Services</a>
          <a class="nav-link text-dark" href="gallery.php">Gallery</a>
          <a class="nav-link text-dark" href="contactus.php">Contact as</a>
          
          <?php 
          if(!isset($_SESSION['usernm']))
          {
            
            ?>
            <div style="margin-left: 860px;">
          <a class=" btn btn-primary " href="registration.php">Register</a>
          <a class=" btn btn-primary " href="login.php">Login</a>  
        ` </div>  
          <?php
          }
          else
          {

?>
        
          <a class="nav-link text-dark" href="logout.php">Logout</a>

          <?php
          }

          ?>
        </div>
      </div>
    </div>
  
  </nav>