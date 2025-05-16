<?php  session_start();?>
<!DOCTYPE html>
<head>
    
    <title>Admin Login</title>
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
<div class="container">
      <div class="row mt-4">
         <div class="col-md-6 mb-3 bg-white shadow-lg mx-auto p-4">
            
         <?php

$em =$pass =$msg ="";
include 'config.php';
               if(isset($_POST['b1']))
               {
                $em =$_POST['em'];
                $pass =$_POST['pwd'];
$queryS="SELECT * FROM  admin  WHERE aemail='$em' AND apwd ='$pass'";
$results=mysqli_query($cn,$queryS);

                    $num =mysqli_num_rows($results);
                    if($num ==1)
                    {
                    
                        session_start();
                        $row=mysqli_fetch_assoc($results);
                        $_SESSION['id']=$row['id'];
                        $_SESSION['name']=$row['aname'];
                        $_SESSION['usernm']=$row['aemail'];
                        header('location:dashboard.php');
                    }
                    else
                    {
                        $msg ="Invalid Credentials";

                    }

               }

?>
           
            <h3 class="text-center text-primary">Admin Login</h3>

            <p class="text-danger">
                <?php echo $msg;?>
            </p>
            <p class=" text-center">

            <form method="post" action="index.php">

                <label for="em" class="mt-3">Email </label>
                
                <input type="email" name="em" id="em" class="form-control" required>
            
                <label for="pwd" class="mt-3">Password </label>
                <input type="password" name="pwd" id="pwd" class="form-control" required>
            <div class="text-center mt-3">
                <input type="submit" value="Login" class="btn btn-primary" name="b1">
               
            </div>
            </form>
         </div>
      </div>
    </div>
</body>

</html>