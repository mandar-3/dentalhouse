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
     
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .a {
            height: 700px;
            width: 43%;
            float: left;

            margin-top: 30px;


        }

        .b {
            margin-left: 90px;
            margin-right: 10px;
        }

        .c {
            margin-right: 90px;
            margin-left: 10px;
        }
        .d
        {
            width: 100%;
            height: 750px;
            
        }
        .e
        {
            height: 450px;
            width: 100%;
        }
        .onet
            {
                height: 50px;
                width: 100%;
                background-color: beige;
            }
    </style>
</head>

<body>
<?php
    include('header.php');
    ?>
        <!--Nav bar start-->
        <?php include 'navbar.php'  ?>
        <!--Nav bar end-->
        
    <img src="image/contact-banner.jpg" width="100%" >
    <div class="d">
    <div class="a  b p-5 shadow-lg">
        <h2>OUR OFFICE INFORMATION</h2><br>
            <div class=" col-md-12 row">
                <div class="col-md-2 p-2 ">
                    <i class="fas fa-map-marker-alt mt-3" style="font-size:60px;"></i>
                </div>
                <div class="col-md-9">
                    <h3>Location</h3>
                    <P>Dental Galaxy® Flat No 4
                     4th Floor, Aditi Classic, <br>Opp Kapil Malhar,
                         Baner Road, <br>Baner, Pune- 411045</P>

                </div>
            </div>
            <br>

            <div class=" col-md-12 row">
                <div class="col-md-2 p-2 ">
                    <i class="fas fa-phone-volume mt-3" style="font-size:60px;"></i>
                </div>
                <div class="col-md-9">
                    <h3>Call us</h3>
                    <P>24/7 Support<br>
                        9604480444</P>

                </div>
            </div>
            <br>

            <div class=" col-md-12 row">
                <div class="col-md-2 p-2 ">
                    <i class="fa fa-envelope-open mt-3" style="font-size:60px;"></i>
                </div>
                <div class="col-md-9">
                    <h4>Email</h4>
                    <P>dental.galaxy.pune@gmail.com</P>

                </div>
            </div>
    </div>
    <div class="a c p-5 shadow-lg">
        <h3 class="text-primary">Contact us</h3>
        <h2>Strong & Healthy Teeth
            With Dental House</h2>
            <div class="col-md-6 ">
            <form>
                <input type="text" placeholder="Name" name="nm" class="form-control"><br><br>
                <input type="text" placeholder="Mobile no" name="mn" class="form-control"><br><br>
                <input type="email" placeholder="Email" name="em" class="form-control"><br><br>
                <input type="text" placeholder="Subject" name="sub" class="form-control"><br><br>
                <input type="text" placeholder="Message" name="msg" class="form-control"><br>
                <div class="text-center">
                <input type="submit" placeholder="submit" name="sub" class="btn btn-primary">
            </div>
            </form>
        </div>
    </div>
    </div>
    <div class="e p-3 mb-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15129.384838472337!2d73.79193000000001!3d18.558424!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6d884c1e0aa968fc!2sDental%20Galaxy%C2%AE!5e0!3m2!1sen!2sin!4v1668422834759!5m2!1sen!2sin" width="100%" height="430" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <?php
    include('footer.php');
    ?>
    
    
    
</body>

</html>