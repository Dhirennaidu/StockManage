<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 

<style>
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
<center>
<div class="card" style="width:70%;height:350px;text-align:center;">
  <div class="card-body">
    <p><img src="shop.JPEG" style="width:90px;border-radius:50%;"><h1>Sibani Book Store</h1></p>
    <p class="card-text">Mobile No:<i class="fa fa-phone" style="width:40px;"></i>8658135266</p>
        <p class="card-text"><h6 class="card-title">Location:<i class="fas fa-map-marker-alt" style="width:40px;"></i>Digaphandi,Gandinagar,odisha 761003</h6></p> 
</div>
</div><br>
<div class="input-container">
<div class="card" style="width:100%;height:150px;text-align:center;background-color:rgb(134, 70, 126);">
<center><h2 style="color:white;">Book's/Note Book's</h2></center><br>
<center><input  type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search for Book names.." title="Type in a name"></center>
</div>
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3" id="myUL">
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Hollywood Sign on The Hill">
      <div class="card-body">
        <h5 class="card-title" id="h5">DBMS Book</h5>
        <p class="card-text">
            <center><h5 class="card-title">450</h5><center>
         <button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Palm Springs Road">
      <div class="card-body">
        <h5 class="card-title">Networking Book Name</h5>
        <p class="card-text">
        <center><h5 class="card-title">450</h5><center>
        <button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Los Angeles Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Computer Fundamental Book Name</h5>
        <center><h5 class="card-title">450</h5><center>
        <p class="card-text"><a href="Productview.php"><button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button></a></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Operating System Book</h5>
        <p class="card-text">
        <center><h5 class="card-title">450</h5><center>
        <button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">C++ Name</h5>
        <p class="card-text">
        <center><h5 class="card-title">450</h5><center>
        <button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button>
        </p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="shop.JPEG" class="card-img-top" alt="Skyscrapers">
      <div class="card-body">
        <h5 class="card-title">Java Book</h5>
        <p class="card-text">
        <center><h5 class="card-title">450</h5><center>
        <button style="width:200px;height:40px;color:white;background-color:rgb(134, 70, 126);">View Details</button>
        </p>
      </div>
    </div>
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
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('div');
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("h5")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>
</html>
