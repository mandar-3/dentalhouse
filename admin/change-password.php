<?php session_start();
$email = $_SESSION['usernm'];
 if(!isset($_SESSION['usernm']))
 {
    header('location:index.php');
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
    
<div class="container mt-5">
      <div class="row mt-1">
         <div class="col-md-12 mb-3 bg-white shadow-lg mx-auto p-4">
         <h3 class="text-center text-success">Hi <?php echo $_SESSION['name'];?></h3>

            
        <div class="text-center mt-5">
        <?php  include 'profile-link.php';?> 

        <div class="row">

        <?php

$op =$np =$msg="";

include 'config.php';
               if(isset($_POST["b1"]))
               {
                $op =$_POST["opwd"];
                $np =$_POST["npwd"];
$queryS="SELECT * FROM admin WHERE aemail = '$email' AND apwd ='$op'";
                $result =mysqli_query($cn,$queryS);
                $num = mysqli_num_rows($result);

                if($num == 1)
                {
    $queryU="UPDATE admin SET apwd = '$np' WHERE aemail = '$email'";
                        if(mysqli_query($cn,$queryU))
                        {
                            $msg ="Password Updated";
                            $class="text-success";
                        }
                        else
                        {
                            $msg ="Failed To Update";
                            $class ="text-danger";
                        }

                }

                else
                {
                    $msg = "Invalid Credetials";
                    $class="text-danger";
                }

               }

    ?>
            <div class="text-start col-md-6 mx-auto bg-white shadow-lg p-3 mt-3">
                <p class="<?php echo $class;?>">
                 <?php echo $msg;?>
                </p>
               <form action="change-password.php" method="post">

               <label for="opwd">Old Password</label>
               <input type="password" name="opwd" id="opwd" class="form-control mt-2" required>

               <label for="npwd" class="mt-3">New Password</label>
               <input type="password" name="npwd" id="npwd" class="form-control mt-2 required">
               <div class="text-center mt-3">
                <input type="submit" value="Change Password" name="b1" class="btn btn-primary">
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