<?php  session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="Bootstrap/bootstrap.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
* {
  box-sizing: border-box;
  margin:0;
  padding:0;
}


.onet
            {
                height: 50px;
                width: 100%;
                background-color: beige;
            }
body {
  
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}



/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  display: none; /* Hide all elements by default */
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* The "show" class is added to the filtered elements */
.show {
  display: block;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 12px 16px;
  background-color: white;
  cursor: pointer;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>
<?php include 'header.php'  ?>
<!--Nav bar start-->
<?php include 'navbar.php'  ?>

<img src="image/our-gallery.jpg" width="100%" >

<!-- MAIN (Center website) -->
<div class="main">



<div id="myBtnContainer" class="mt-5">
  <button class="btn active" onclick="filterSelection('all')"> All Images</button>
  <button class="btn" onclick="filterSelection('nature')"> Happy Patient</button>
  <button class="btn" onclick="filterSelection('cars')"> Braces And Dentures</button>
  <button class="btn" onclick="filterSelection('people')"> Our Treatments</button>
</div>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column nature">
    <div class="content">
      <img src="image/diana-polekhina-iYQgnaWD8uw-unsplash.jpg" alt="Mountains" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-MLJHxQ5qxxY-unsplash.jpg" alt="Lights" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-fmB7IdFjhTM-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-NRFVdiM--BE-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-pbAvxZzG8Ug-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-Q_o_ob-3Ny4-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-sgzJMbUQbYg-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column nature">
    <div class="content">
    <img src="image/diana-polekhina-y3q-2m9zBoA-unsplash.jpg" alt="Nature" style="width:100%" height="250px">
      
    </div>
  </div>
  <!--braces-->
  <div class="column cars">
    <div class="content">
      <img src="image/brace.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="image/2.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
    <img src="image/a.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/b.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/c.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/d.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/e.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/f.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column cars">
    <div class="content">
      <img src="image/g.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <!--x-ray-->

  <div class="column people">
    <div class="content">
      <img src="image/jonathan-borba-v_2FRXEba94-unsplash.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-cedric-fauntleroy-4270362.jpg" alt="Car" style="width:100%" height="250px">
      
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-iamluisao-12917364.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-iamluisao-12917374.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-cottonbro-studio-6502553.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/quang-tri-nguyen-T-iifFLk3KU-unsplash.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-tima-miroshnichenko-5355837.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-tima-miroshnichenko-5355843.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
  <div class="column people">
    <div class="content">
    <img src="image/pexels-tima-miroshnichenko-5355903.jpg" alt="Car" style="width:100%" height="250px">
     
    </div>
  </div>
<!-- END GRID -->
</div>

<!-- END MAIN -->
</div>

<script>
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}


// Add active class to the current button (highlight it)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>

</html>
