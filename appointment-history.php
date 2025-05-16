<?php session_start();
include 'config.php';
$id =$_SESSION['pid'];
 if(!isset($_SESSION['usernm']))
 {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<head>
    
    <title>Change Password</title>
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
    
<div class="container">
      <div class="row mt-1">
         <div class="col-md-12 mb-3 bg-white shadow-lg mx-auto p-4">
         <h3 class="text-center text-success">Hi <?php echo $_SESSION['name'];?></h3>

            
        <div class="text-center mt-5">
        <?php  include 'profile-link.php';?> 

        <div class="row">
            <div class="text-start col-md-6 mx-auto bg-white shadow-lg p-3 mt-3">
        
            <table class="table table-bordered">
                <tr>
                    <th>Appointment Id</th>
                    <th>Appointment For</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    
                </tr>

                <?php
$queryS="SELECT * FROM appointment WHERE pid = ".$id;
               $result =mysqli_query($cn,$queryS);
               $i=1;
               while($row = mysqli_fetch_assoc($result))
               {
                //var_dump($row);

                ?>
                <tr>
                    <td><?php echo $i;?>   </td>
                    <td><?php echo $row['afor'];?>   </td>
                    <td><?php echo $row['apdate'];?>   </td>
                    <td><?php echo $row['atime'];?>   </td>
                    <td><?php echo $row['astatus'];?>   </td>
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
<?php include 'footer.php' ?> 
</html>