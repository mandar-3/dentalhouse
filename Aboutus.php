<?php  session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>ABout </title>
    <style>
        /* body{
            background-image: url(image/home.1.jpg);
            background-size: cover;
        } */
    </style>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <!--Nav bar start-->
    <?php include 'header.php'  ?>
    <?php include 'navbar.php'  ?>
    <!--Nav bar end-->
    <img src="image/about-banner.jpg" width="100%" >
<div class="container  mt-3 mb-5">
        <div class="row">

            <div class="col-sm-6 text-center py-3 mt-3 animate__animated animate__fadeInLeft animate__delay-2s">
                <br><br>
                <img src="image/group.png" alt="about-ics" width="90%" class="shadow-lg p-3 img-thumbnail">
            </div>

            <div class="col-sm-6 mt-3 mt-5 ">
                
                   <h2 class="mt-5"> ABOUT US</h2>
                   <p style=" text-align: justify; font-size: 20px;" class="mt-5">
                    Dental House
                    We provide team-based comprehensive dental care for children and adults, we also specailize in treating 
                    patients with systemic illness & complication. Complicated dental procedures like wisdom tooth extractions
                    / Implants etc are done in patients having Diabetes, Heart Diseases, Kidney Diseases, Liver Diseases, Cancers,
                     Skin Diseases & even Pregnancy.
                    We also rendered treatment to patients who are differently abled or requires special needs.
                    Our Clinic is dedicated to providing the state-of-the-art general, periodontal, orthodontic and family dentistry.
                    With a mission to provide and deliver the most innovative, technologically advanced and comfortable dental care to 
                    our patients. Our comprehensive dental treatment philosophy will improve our patients overall health and consequently
                     enhance the quality of their life. We strive to render state-of-the-art painless dental treatment at affordable prices.
                </p>

              
            </div>
        </div>
    </div>
    <div class="container mt-3 "></div>
     <!--row 1 start-->   
     <div class="row  mt-2 mb-5">
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

</body>
<?php include 'footer.php' ?>
</html>