<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home Page</title>
    <style>
        /* body{
            background-image: url(image/home.1.jpg);
            background-size: cover;
        } */
    </style>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
     .onet
            {
                height: 50px;
                width: 100%;
                background-color: beige;
            }
            </style>  
</head>

<body>
<?php include 'header.php'  ?>
<!--Nav bar start-->
<?php include 'navbar.php'  ?>
<!--Nav bar end-->
<!-- start slider -->
<?php include 'slider.php';?>

<!-- end slider -->
<div class="container row mx-auto mt-5 ">
  <div class="col-md-6 mb-3 bg-white shadow-lg  p-4">
    <div class="">
      <h2>Dental House-Best Dentist in Baner</h2>
      <p>We provide team-based,comprehensive dental care for clidren and adults,including patients who aare anxious or have an underlying developmental or medical condition or disease that may add complexity to the management of their oral health.</p>
       <p>if you are lookinf for the best dental clinic in baner,best dentist in baner,best dental clinic in pune,or"Best dentisst near me" then look no further.Dental Galaxy is the Best Dental Clinic in Puen.</p> 
       <br>
       <span> <i class="fa fa-check" aria-hidden="true"></i>periodontal(gum) care</span><br><br>
       <span> <i class="fa fa-check" aria-hidden="true"></i>Implant Dentistry</span><br><br>
       <span> <i class="fa fa-check" aria-hidden="true"></i>orthodontics/Braces</span><br><br>
       <span> <i class="fa fa-check" aria-hidden="true"></i>Painless Root Canal Treatment</span><br><br>
       <span> <i class="fa fa-check" aria-hidden="true"></i>Kids (Pediatric) Dentistry</span>
    </div>
    </div>
          <div class="col-md-6 mb-3 text-center  ">
             
          <div class="mt-5 text-center">

             <iframe width="100%" height="450"
src="https://www.youtube.com/embed/QlZQ_YY9l5U">
</iframe> 
</div>
             </div>
       </div>  
      </div>
  </div>
</div>
<!--row 1 start-->   
<div class="row  mt-2 mb-5 text-center mt-5">
  <h3>OUR SPECIALIST </h3>
        <div class="col-md-3 mt-3 m bg-white font">
            <div class="bg-white shadow-lg p-3 text-center">
                <img src="image/dr1.png" alt="" width="70%" height="">
            <div class=" p-2 text-center">
                <h6>Dr.pravin kumar</h6>   
          </div>
                <p>(pedodontist)</p> 
            </div>       
            </div>
      
        <div class="col-md-3 mt-3 bg-white font">
          <div class="bg-white shadow-lg p-3 text-center">
              <img src="image/dr2.png" alt="" width="70%" height="">
          <div class=" p-2 text-center">
              <h6>Dr.Avina patil</h6>
              
              <p>(orthodontists)</p>           
          </div>        
          </div>
      </div>
      <div class="col-md-3 mt-3 bg-white font">
          <div class="bg-white shadow-lg p-3 text-center">
              <img src="image/dr3.png" alt="" width="70%" height="">
          <div class=" p-2 text-center">
              <h6>Dr.Ajinkya More</h6>
              
              <p>(periodontist) </p>     
          </div> 
          </div>
      </div>
      <div class="col-md-3 mt-3 bg-white font">
        <div class="bg-white shadow-lg p-3 text-center">
            <img src="image/dr4.png" alt="" width="70%" height="">
        <div class=" p-2 text-center">
            <h6>Dr.Pranita kale</h6>
            
            <p>(Endodontist)</p>     
        </div> 
        </div>
    </div>
    </div>
</div>
<!--row 1 end-->
<?php include 'footer.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    
    $('.carousel').carousel({
  interval: 1000 * 1
})
</script>
</body>

</html>
