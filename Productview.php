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
    style="height:600px;
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
    <h1><strong>Java Program Book</strong></h1>
    <p><h1 style="color:blue;"><strong><i class="fa fa-rupee" style="font-size:30px"></i>560</strong></h1></p>
    <p><h4><strong><i class="fa fa-phone"></i>8658135266</strong></h4>
    <p><h4><strong><i class="fas fa-map-marker"></i>Brhampur,gandinagar 7thlane,761003</h4></p>
    <p><h4><strong><i class="fas fa-hourglass-end"></i>4 Days Replacement Policy</strong><h4></p>
    <p><h4><strong><i class="fas fa-truck"></i>Online Delivery Minimum 3km</strong></h4></p>
    <p><h4><strong><i class="fas fa-truck"></i>Delivery Charge:<i class="fa fa-rupee" style="font-size:15px"></i>50</strong></h4></p>
    <h1><strong>Book Details</strong></h1> 
    <p><h4><strong>Auther:</strong>Dhiren naidu</h4></p>
    <p><h4><strong>Pages:</strong>560<h4></p>
    <p><h4><strong>Language:</strong>English</h4></p>
    <p><h4><strong>Services:<i class="fa fa-rupee" style="font-size:15px"></i>Both Online Payment/Cash on delivery</strong></h4></p>
</div>
  <div class="column3" style="background-color:white;">
    <p><button id="but" style="background-color:orange;"><strong><i class="fas fa-shopping-cart"></i>Add to card</strong></button><a href="Productbuy.php"><button id="but"><strong><i class="fas fa-shopping-bag"></i>Buy Now</strong></button></a></p>
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

</script>
</html>
