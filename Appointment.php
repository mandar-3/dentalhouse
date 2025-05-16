<?php  session_start();?>
<!DOCTYPE html>

<head>
   
    <title>Appointment</title>
    <link rel="stylesheet" href="Bootstrap/bootstrap.css">
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
    <?php include 'navbar.php'  ?>
    <img src="image/book-appoinment.jpg" width="100%" >
<div class="container">
      <div class="row mt-4">
         <div class="col-md-6 mb-3 bg-white shadow-lg mx-auto p-5 ms-3">
            <h3 class="text-center text-primary">Appointment</h3>
           
            <form>
                <label for="fname"> Full Name</label>
                <input type="text" name="fn"  class="form-control" required><br>

                <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="other">Other

                    <br>

                <label for="em" class="mt-3">Mobile </label>
                <input type="mobile" name="mb"  class="form-control" required>

                <label for="Address">Address</label>
                <input type="text" name="add"  class="form-control" required>

                <label for="em" class="mt-3">Email </label>
                <input type="email" name="em"  class="form-control" required>
            
                <label for="Appointment" class="mt-3">Appointment </label>
                <input type="date" name="app"  class="form-control" required>
            <div class="text-center mt-3">
                <input type="submit" value="submit" class="btn btn-primary" name="b1">
            </div>
            </form>
         </div>
         <div class="col-md-5 mb-3 bg-white shadow-lg mx-auto p-4 me-3">
            <img src="image/x-ray.jpg" height="600px" width="600px">
         </div>
      </div>
    </div>
</body>
<?php include 'footer.php' ?>
</html>