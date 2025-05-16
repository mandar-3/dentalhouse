<?php session_start();
 if(!isset($_SESSION['usernm']))
 {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<head>
    
    <title>Dashboard</title>
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
    
<div class="container mt-5">
      <div class="row mt-1">
         <div class="col-md-12 mb-3 bg-white shadow-lg mx-auto p-4">
         <h3 class="text-center text-success">Hi <?php echo $_SESSION['name'];?></h3>

            
        <div class="text-center mt-5">
       <?php  include 'profile-link.php';?> 
    <br>
       <div class="row mt-5">

       <div class="col-md-6">

                <div class="p-3 shadow-lg bg-white">
                    <p>12</p>
                    <p><b>Register Patients</b></p>
                </div>
        </div>
        
        <div class="col-md-6">
            <div class="p-3 shadow-lg bg-white">
            <p>12</p>
                    <p><b>Today's Appointment</b></p>
                
            </div>
         </div>
           
             
          
          
         </div>
      </div>
    </div>
</body>
</html>