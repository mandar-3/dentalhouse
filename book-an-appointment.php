<?php session_start();
$id = $_SESSION['pid'];
 if(!isset($_SESSION['usernm']))
 {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<head>
    
    <title>Appointment For</title>
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
        <?php  include 'profile-link.php';
                include 'config.php';

                $afor=$adate= $aquery=$msg ="";
                if(isset($_POST["b1"]))
                {
                    $afor =$_POST["afor"];
                    $adate =$_POST["adate"];
                    $aquery =$_POST["aquery"];

        $queryI="INSERT INTO  appointment (pid,afor,apdate,aquery,astatus,atime,rdate,reason) VALUES($id,'$afor','$adate','$aquery','Not Confirmed','-','$adate','-')";

                    if(mysqli_query($cn,$queryI))
                    {
                        $msg ="Appointment Request Submitted";
                        $class="text-success";
                    }
                    else
                    {
                        $msg ="Failed To Submit";
                        $class="text-danger";
                    }
                }
        
        ?> 

        <div class="row">

            <div class="text-start col-md-6 mx-auto bg-white shadow-lg p-3 mt-3">
                <p class="<?php echo $class;?>">
                    <?php echo $msg;?>
                

                </p>
               <form action="book-an-appointment.php" method="post">

               <label for="apfor">Appointment For</label>
               <input type="text" name="afor" id="apfor" class="form-control mt-2" required>

               <label for="adate" class="mt-3">Appointment Date</label>
               <input type="date" name="adate" id="adate" class="form-control mt-2" required>

               <label for="aquery" class="mt-3">Any Query ?</label>
               <textarea name="aquery" id="aquery" class="form-control mt-3" rows="3"></textarea>

               <div class="text-center mt-3">
                <input type="submit" value="Book" name="b1" class="btn btn-primary">
               </div>


               </form>
            </div>
        </div>
           </div>
         
            
     
          
          
         </div>
      </div>
    </div>
</body>
<?php include 'footer.php' ?> 
</html>