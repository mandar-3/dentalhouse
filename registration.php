<?php  session_start();?>
<!DOCTYPE html>

<head>
   
    <title> Registration</title>
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
    <img src="image/Register.jpg" width="100%" >
<div class="container">
      <div class="row mt-4">

           
      <?php

$name =$mob=$em=$pass=$msg ="";
include 'config.php';

if(isset($_POST['b1']))
{
    $name =$_POST['fn'];
    $mob =$_POST['mb'];
    $em =$_POST['em'];
    $pass =$_POST['pwd'];

    $queryS="SELECT * FROM patient WHERE pemail = '$em'";
    $results =mysqli_query($cn,$queryS);

       $num = mysqli_num_rows($results);

       if($num ==1)
       {
        $msg ="Username Already Exist";
       }
       else
       {

        $queryI="INSERT INTO patient(pname,pmob,pemail,ppwd)VALUES('$name',$mob,'$em','$pass')";

            if(mysqli_query($cn,$queryI))
            {
                $msg ="Registration Successfull";

            }

            else
            {
                $msg ="Failed To Register";

            }
       }
}
?>
         <div class="col-md-6 mb-3 bg-white shadow-lg mx-auto p-4">
            <h3 class="text-center text-primary">Client Registration</h3>

            <p class="text-primary">
                <?php echo $msg; ?>
            </p>
      
            <form action="registration.php" method="post">
                <label for="fname">Name</label>
                <input type="text" name="fn"  class="form-control" required>

                <label for="em" class="mt-3">Mobile </label>
                <input type="mobile" name="mb"  class="form-control" required>

                <label for="em" class="mt-3">Email </label>
                <input type="email" name="em"  class="form-control" required>
            
                <label for="pwd" class="mt-3">Password </label>
                <input type="password" name="pwd"  class="form-control" required>
            <div class="text-center mt-3">
                <input type="submit" value="Register" class="btn btn-primary" name="b1">
                <a href="login.php"></a>
            </div>
            </form>
         </div>
      </div>
    </div>
</body>
<?php include 'footer.php' ?>
</html>