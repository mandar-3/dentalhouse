<?php session_start();
include 'config.php';
 if(!isset($_SESSION['usernm']))
 {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<head>
    
    <title>Appointment Request</title>
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
            <div class="text-start col-md-10 mx-auto bg-white shadow-lg p-3 mt-3">
        
            <table class="table table-bordered">
                <tr>
                    <th>Appointment Id</th>
                    <th>Patient Name</th>
                    <th>Mobile </th>
                    <th>Appointment For</th>
                    <th>Appointment Time</th>
                    
                </tr>

                <?php
$date =date('Y-m-d');
$queryS="SELECT  patient.pid, patient.pname, patient.pmob, appointment.apid,appointment.afor, appointment.apdate,appointment.astatus,appointment.atime,appointment.rdate FROM patient INNER JOIN appointment ON patient.pid =  appointment.pid  WHERE appointment.rdate = '$date' AND appointment.astatus ='Confirmed'";
               $result =mysqli_query($cn,$queryS);
               $i=1;
               while($row = mysqli_fetch_assoc($result))
               {
                   // var_dump($row);

                ?>
                <tr>
                    <td><?php echo$row['apid'];?></td>
                    <td><?php echo$row['pname'];?></td>
                    <td><?php echo$row['pmob'];?></td>
                    <td><?php echo$row['afor'];?></td>
                    <td><?php echo$row['atime'];?></td>
                </tr>
                <?php
               $i++;
            }
                ?>
            </table>
        </div>
        </div>
           </div>
         
            
     
          
          
         </div>
      </div>
    </div>
</body>
</html>