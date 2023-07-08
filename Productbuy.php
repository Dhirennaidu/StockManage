<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Product View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


 
<style>
    * {
  box-sizing: border-box;
}
.top-container {text-align:left;
  background-color: #f1f1f1;
  padding: 30px;
  text-align:left;
  background-color:rgb(134, 70, 126);
  height:110px;
  color:white;
}
.top-container button{
  float:right;
}


.card{
  height:600px;
}


.column {
  float: left;
  width: 50%;
 
  height:auto; /* Should be removed. Only for demonstration */
}
.column3{
    float: left;
  width: 50%;
  height:auto;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
#but{
width:280px;height:50px;
font-size:20px;
background-color:rgb(134, 70, 126);
color:white;
}
/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
  .column3{
    width:100%;
    position:fixe;
  }
  #but{
    width:50%;
   
  }
}
@media screen and (max-width: 1030px) {
  .column {
    width: 100%;
  }
  .column3{
    width:100%;
    position:fixe;
  }
  #but{
    width:50%;
    height:60px;
  }
}
/* Create four equal columns that floats next to each other */

    </style>
</head>
<body>
<div class="top-container">
  <h2>Mini Bazar.com <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
 <!--- &#9776;-->
 <img src="shop.JPEG" style="width:30px;border-radius:50%;">
  </button></h2>
 
</div><br>
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h1 class="offcanvas-title">Heading</h1>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <p><i class="fa fa-user" style="font-size:20px;"></i>Profile.</p>
    <p><i class="fa fa-market" style="font-size:20px;"></i>Upload Store.</p>
    <p><i class="fa fa-market" style="font-size:20px;"></i>Dash Bord.</p>
    <p><i class="fa fa-wallet" style="font-size:20px;"></i>Check Wallet</p>
    <button class="btn btn-secondary" type="button">Log out</button>
  </div>
</div>
<center><div class="card" style="width:80%;height:300px;text-align:center;">
  <div class="card-body">
    <p><img src="shop.JPEG" style="width:90px;border-radius:50%;"><h1>Sibani Book Store</h1></p>
    <p class="card-text"><h6>Mobile No:<i class="fa fa-phone" style="width:40px;"></i>8658135266</p>
<p class="card-text"><h6 class="card-title">Location:<i class="fas fa-map-marker-alt" style="width:40px;"></i>Digaphandi,Gandinagar,odisha 761003</h6></p> 
</div>
</div></center><br>
<div class="container">
  <div class="row">
  <div class="column" style="background-color:white;"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="shop.JPEG" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="shop.JPEG" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="shop.JPEG" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="column" style="background-color:white;">
    <h1><strong>Order Now</strong></h1>
    <!---alert 1 with data base------------------------------------>
<!---alert 2 message------------------------------------>
<div class="alert alert-warning" role="alert" style="display:none;" id="mess" >
  
</div>
    <form action="Productbuy.php" method="post" id="form">
   
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="input1" placeholder="Enter Email(@gmail.com)" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Mobile Number</label>
      <input type="mobile" class="form-control" id="input2" placeholder="(+91)Enter Mobile Number" required>
    </div>
  </div>
  <div class="form-group col-md-6">
    <label for="inputEmail4">Address</label>
    <input type="text" class="form-control" id="input3" placeholder="Enter Your Address" required>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">House Location</label>
      <input type="email" class="form-control" id="input4" placeholder="Enter House Location" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter a Pincode</label>
      <input type="mobile" class="form-control" id="input5" placeholder="Enter a pincode" required>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City/Village Name</label>
      <input type="text" class="form-control" id="input6" placeholder="Enter City/Village Name" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Payment Type</label>
      <select id="inputState1" class="form-control">
        <option></option>
        <option value="1">Online Payment</option>
        <option value="0">Cash on Delivery</option>
      </select>
    </div>
    <div class="form-row" id="row" >
    <div class="form-group col-md-6">
      <label for="inputState"></label>
     <input type="button" id="check1" class="form-control" style="background-color:green;color:white;" value="check" onclick="check()">
</div>
    <div class="form-row" id="row1" style="display:none;float:left;">
    <div class="form-group col-md-6">
      <label for="inputPassword4">Payment Now</label>
      <input type="number" class="form-control" id="input7" placeholder="Product price" style="float:left;" required>
      <br><br>
      <label for="inputState"></label><br>
     <input type="button" onclick="valid2()" style="background-color:blue;color:white;height:30px;" value="Submit">
     <input type="button" onclick="closep()" style="background-color:green;color:white;height:30px;" value="Cancel">
</div>
</div>
<div class="form-row" id="row3" style="display:none;">
    <div class="form-group col-md-6">
      <label for="inputState"></label>
     <input type="button" onclick="valid1()" style="background-color:blue;color:white;" value="submit">
     <input type="button" onclick="closec()" style="background-color:green;color:white;"value="Cancel">
</div>
</div>
</div>
</form>
</div>
  
</div>

</div>


<footer class="page-footer font-small blue">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2023 Copyright:
    <a href="/"> Mini Bazar.com</a>
  </div>
  <!-- Copyright -->

</footer>
</body>
<script>
function check(){
    var v=document.getElementById('inputState1').value;
   // document.write(v);
   if(v=="1"){//alert("hello");
     document.getElementById('row1').style.display="block";
    // document.getElementById('check1').style.display="none";
    document.getElementById('row3').style.display="none";
   }
   else if(v=="0")
   {
      document.getElementById('row3').style.display="block";
      document.getElementById('row1').style.display="none";
   }
}
function closep(){
    document.getElementById('row1').style.display="none";
  //  document.getElementById('row3').style.display="block";
}
function closec(){
    document.getElementById('row3').style.display="none";
    //document.getElementById('row1').style.display="block";
}

function valid2(){
    var a=document.getElementById('input1').value;
    var b=document.getElementById('input2').value;
    var c=document.getElementById('input3').value;
    var d=document.getElementById('input4').value;
    var e=document.getElementById('input5').value;
    var f=document.getElementById('input6').value;
    var g=document.getElementById('input7').value;
    var alertt=document.getElementById('mess');
    if(a=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a Email</strong>";
    }
    else if(b=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a Mobile Number</strong>";
    }
    else if(c=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a Address</strong>";
    }
    else if(d=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a House Location</strong>";
    }
    else if(e=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter Your Pincode</strong>";
    }
    else if(f=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter Village/city</strong>";
    }
   else if(g=='')
   {
    alertt.style.display="block";
        alertt.innerHTML="<strong>Please Payment Now</strong>";
   }
   else{
    var b=document.getElementById('form');
    b.submit();
   }
}
function valid1(){
    var a1=document.getElementById('input1').value;
    var b2=document.getElementById('input2').value;
    var c3=document.getElementById('input3').value;
    var d4=document.getElementById('input4').value;
    var e5=document.getElementById('input5').value;
    var f6=document.getElementById('input6').value;
    var alerttt=document.getElementById('mess');
    if(a1=='')
    {
        alerttt.style.display="block";
        alerttt.innerHTML="<strong>Please Enter a Email</strong>";
    }
    else if(b2=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a Mobile Number</strong>";
    }
    else if(c3=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a Address</strong>";
    }
    else if(d4=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter a House Location</strong>";
    }
    else if(e5=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter Your Pincode</strong>";
    }
    else if(f6=='')
    {
        alertt.style.display="block";
        alertt.innerHTML="<strong>Please Enter Village/city</strong>";
    }
   else{
    var d=document.getElementById('form');
    d.submit();
   }
}
</script>
</html>
