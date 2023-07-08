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
  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
    * {
  box-sizing: border-box;
}
body{
    background-color: white;
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
  width:60px;
  height:50px;
  margin:0;
}


.card{
  height:200px;
  width:90%;
}


.column {
  float: left;
  
  width:90%;
  height:auto; /* Should be removed. Only for demonstration */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}
.column3{
    float: left;
  width: 50%;
  height:auto;
 
}
/* Clear floats after the columns */

.footer {
  position: fixed;
  float:left;
  width: 25%;
  background-color: red;
  color: white;
  text-align: center;
}


.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password],input[type="file"] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
select{
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #7b20d6;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.offcanvas-body button{
   background-color:white;
   width:100%;
   height:40px;
   text-align:left;
}
    </style>
</head>
<body>
<div class="top-container">
  <h3>Mini Bazar.com <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#demo">
 <!--- &#9776;-->
 <center><img src="shop.JPEG" style="width:30px;border-radius:50%;"></center>
  </button></h3>
 
</div><br>
<div class="offcanvas offcanvas-start" id="demo">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title"><strong>dhirennaidu17@gmail.com</strong></h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
  </div>
  <div class="offcanvas-body">
    <button><i class="fa fa-user" style="font-size:20px;"></i>Profile.</button><br><br>
    <button style="background-color:rgb(134, 70, 126);color:white;"><i class="fa fa-plus-square" style="font-size:20px;"></i>Upload Store.</button><br><br>
    <button><i class="fa fa-dashboard" style="font-size:20px;"></i>Dash Bord.</button><br><br>
    <button><i class="fa fa-clipboard" style="font-size:20px;"></i>Your Order's</button><br><br>
    <button><i class="fa fa-shopping-cart" style="font-size:20px;"></i>Cart</button><br><br>
    <button><i class="fa fa-bell"style="font-size:20px;"></i>Notification</button><br><br>
    <button class="btn btn-secondary" type="button">Log out</button>
  </div>
</div>
<!---------------Profile------------------------------->
<form action="/action_page.php">
  <div class="container">
    <h1>Upload New Store </h1>
    <p>Please fill in this form Carefully</p>
    <hr>
    <div class="alert alert-primary" role="alert">
  This is a primary alert—check it out!
</div>
    <div class="alert alert-danger" role="alert" id="valid" style="display:none;">
 
</div>
    <label for="email"><b>Store Name</b></label>
    <input type="text" placeholder="Enter your New Store Name" name="email" id="sname" required>

    <label for="img">Upload Store Image</label>
  <input type="file" id="img" name="img" accept="image/*" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Store Type</b></label>
    <select  placeholder="Repeat Password" name="psw-repeat" id="select" required>
<option>Book Store</option>
<option>Food Store</option>
<option>Mobile Store</option>
<option>Electronices Store</option>
</select>
    <hr>

    <button onclick="check()" type="button" class="registerbtn">Upload</button>
  </div>
  
  
</form>
         
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
    var sname=document.getElementById('sname').value;
    var img=document.getElementById('img').value;
    var email=document.getElementById('email').value;
    var pass=document.getElementById('psw').value;
    var stype=document.getElementById('select').value;
    var alert=document.getElementById('valid');
    if(sname==''){
          alert.style.display="block";
          alert.innerHTML="<strong>Enter a Store Name</strong>";
    }
    else if(img==''){
        alert.style.display="block";
        alert.innerHTML="<strong>Please Upload Store Photo</strong>";
    }
    else if(email==''){
        alert.style.display="block";
        alert.innerHTML="<strong>Enter a Email</strong>";
    }
    else if(pass==''){
        alert.style.display="block";
        alert.innerHTML="<strong>Enter a Password</strong>";
    }
    else if(stype=''){
        alert.style.display="block";
        alert.innerHTML="<strong>Select Your Type Store</strong>";
    }
    else{
        alert.style.display="none";
    }
 }
</script>
</html>
