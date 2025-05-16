<?php session_start();
$email = $_SESSION['usernm'];
$apid =$_GET['apid'];
$name =$_GET['name'];
$afor =$_GET['afor'];
$adate =$_GET['adate'];
 if(!isset($_SESSION['usernm']))
 {
    header('location:index.php');
 }
?>

<!DOCTYPE html>
<head>
    
    <title>Update Appointment</title>
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

        <div class="row">

        <?php

$staus =$apdate = $aptime = $msg="";

include 'config.php';
               if(isset($_POST["b1"]))
               {
$status =$_POST["reason"];
$apdate =$_POST["newdate"];
$aptime =$_POST["aptime"];
$apid =$_POST['apid'];


$queryU="UPDATE appointment SET astatus='$status',atime= '$aptime',rdate='$apdate' WHERE apid = ".$apid;

               if(mysqli_query($cn,$queryU))
                {
                    echo "<script>
                    alert('Appointment Status Updated');
                    window.location.href='appointment-request.php';
                    </script>";
                }

                else
                {
                    $msg ="Failed To Update";
                }
                
               }
                
    ?>
            <div class="text-start col-md-6 mx-auto bg-white shadow-lg p-3 mt-3">
                <p class="<?php echo $class;?>">
                 <?php echo $msg;?>
                </p>
               <form action="update-appointment.php" method="post">

              
               <div class="col-md-6 mx-auto p-3 bg-light">
                <p>Appointment Id = <?php echo $apid;?><br>
                Patient Name = <?php echo $name;?><br>
                Appointment For = <?php echo $afor;?><br>
                Appointment date = <?php echo $adate;?></p>

                
            <select name="reason" class="form-control mb-3" required>
                <option  selected disabled>Confirmed/Reschedule</option>
                <option value="Confirmed">Confirmed</option>
                <option value="Reschedule">Reschedule</option>
               
            </select>
               
            <label calss="mt-3">if reschedule New Date</label>
            <input type="date" name="newdate" value="<?php echo date('Y-m-d');?>" class="form-control">

            <label calss="mt-3">Time</label>
            <input type="text" name="aptime" class="form-control" placeholder="eg. 2.00 pm" required>

            <input type="hidden" name="apid" class="form-control" value="<?php echo $apid;?>" required>
          
            </div>

            
               <div class="text-center mt-3">
                <input type="submit" value="Update" name="b1" class="btn btn-success">
                <a href="appointment-request.php">Back</a>
               </div>


               </form>
            </div>
        </div>
           </div>
         
            
     
          
          
         </div>
      </div>
    </div>

    
</body>
</html>