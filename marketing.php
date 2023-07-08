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

#myInput{
    height:40px;
    width:260px;
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
<div class="input-container">
<i class="fas fa-map-marker-alt" style="font-size:30px;"></i> 
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search a Address" title="Type in a name"></center><br>
<center></div><table id="myTable">
    <tr>
        <th>
    
</th>
<tr>
    <td>
<center><div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="shop.JPEG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title">Sibani Book Store</h1>
        <p class="card-text">Mobile No:<i class="fa fa-phone" style="width:40px;"></i>8658135266</p>
        <p class="card-text"><h6 class="card-title">Location:<i class="fas fa-map-marker-alt" style="width:40px;"></i>Digaphandi,Gandinagar,odisha 761003</h6></p>
        <p><button>Products</button></p>  
    </div>
    </div>
  </div>
</div></center></td></tr>
<tr>
    <td>
<center><div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="shop.JPEG" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
      <h1 class="card-title">Maheswari Book Store</h1>
        <p class="card-text">Mobile No:<i class="fa fa-phone" style="width:40px;"></i>8658135266</p>
        <p class="card-text"><h6 class="card-title">Location:<i class="fas fa-map-marker-alt" style="width:40px;"></i>Brhampur,Gandinagar,odisha 761003</h6></p>
        <p><button>Products</button></p>  
      </div>
    </div>
  </div>
</div></center>
</td>
  </tr>
</table></center>
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

</script>
</html>
